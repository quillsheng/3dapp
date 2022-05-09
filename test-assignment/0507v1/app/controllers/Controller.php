<?php
/**
 * Controller
 */

namespace app\controllers;

class Controller
{
    /*
     * FatFreeFramework Instance
     */
    public $f3;

    /*
     * The name of the default model
     */
    public $model;

    public $baseView = "";

    /*
     * Infos about the user from the token decrypt
     */
    public $userRequest;

    /*
     * Date to render
     */
    protected $data = array();

    /*
     * Error to render
     */
    protected $errorData = array();


    /*
     * Arguments available in URL GET
     */
    private $arg_ok = array(
        'limit' => 'int',
        'order' => 'string',
        'by' => 'string',
        'offset' => 'int',
    );

    public function __construct()
    {
        // Insert F3
        $this->f3 = \Base::instance();
        $this->web = \Web::instance();

        // Get name of the default model
        $this->model = substr(get_class($this), 0, -10);

        // Load default model like nameModel.php from nameModelController.php
        $this->model = substr($this->model, 16);
        if (strlen($this->model) != 0 && class_exists('\\app\\models\\' . $this->model)) {
            $this->loadModel($this->model);
        }
    }

    /**
     * Load a Model Object
     * @param $name name of the model
     * @return object
     */
    protected function loadModel($name)
    {
        $class = '\\app\\models\\' . $name;
        $model = new $class();
        (!isset($this->$name)) ? $this->$name = $model : \app\helpers\API::error(404, 'No Model found');
        return $this;
    }

    /*
     * Method from the Base URL
     */
    public function index()
    {
        $this->setError(200, $this->f3->get('message_index'));
    }

    /**
     * Check if route needs to be authenticate
     * use Authentification class
     */
    public function beforeroute()
    {
        // Route call
        $route = $this->f3->get('PATTERN');
    }

    /**
     * Render data or error to the front
     */
    public function afterroute()
    {
        // If there is an error
        if (isset($this->errorData['code'])) {
            \app\helpers\API::error($this->errorData['code'], $this->errorData['message']);
        } else {
            \app\helpers\API::success($this->data);
        }
    }

    /**
     * Set data to the render
     * @param array $data
     * @param integer $index from the data
     * @param string $key key for the new data
     */
    protected function setData($data, $key = false, $index = 0)
    {
        // if there is already data set
        if (!empty($this->data) && isset($this->data[0])) {
            // insert data in the Data lready set
            if (is_array($data)) {
                $this->data[$index]->$key = (array)$data;
            } else {
                $this->data[$index]->$key = $data;
            }

        } else {
            // If there is no data insert
            $this->data = (is_string($data) || is_bool($data)) ? array('message' => $data) : $data;
        }
    }

    protected function toJson($body, $key = false, $index = 0)
    {
        $data = array(
            "code" => 200,
            "msg" => "Success",
            "data" => $body,
        );
        $this->setData($data, $key, $index);
    }

    /**
     * Unset data before the render
     * Only on the first level of $this->data MAJ WIP
     * @param array or string $label label to unset
     */
    protected function unsetData($label)
    {
        foreach ($this->data as $key => $value) {
            if (is_array($label)) {
                foreach ($label as $lab) {
                    unset($this->data[$key]->$lab);
                }
            } else {
                unset($this->data[$key]->$label);
            }
        }
    }

    /**
     * Create an error to render and cut the script before request
     * @param integer $code header http code
     * @param string $message message explain the error
     */
    protected function setError($code, $message)
    {
        $this->errorData = array('code' => $code, 'message' => $message);
        $this->afterroute();
    }

    /**
     * Get a data
     */
    public function get()
    {
        $m = $this->model;
        $this->setData($this->$m->load(intval($this->f3->get('PARAMS.id'))));
    }

    /**
     * Post a data
     */
    public function post()
    {
        $m = $this->model;
        $this->setData($this->$m->save($this->dataPost));
    }

    /**
     * Update a data
     */
    public function put()
    {
        $m = $this->model;

        // id to update
        if ($this->f3->get('PARAMS.id')) {
            // create conditions with the id
            $c = array('conditions' => array('id' => $this->f3->get('PARAMS.id')));
            // send the request and set Data return
            $this->setData($this->$m->update($this->dataPost, $c));
        } else {
            $this->setError(404, 'Error with the id / No id pass');
        }
    }

    /**
     * Delete a data
     */
    public function delete()
    {
        $m = $this->model;
        $this->setData($this->$m->delete(intval($this->f3->get('PARAMS.id'))));
    }

    /**
     * Get all data
     */
    public function getAll()
    {
        $m = $this->model;
        // Add condition from params in Url
        $c = $this->insertCondition();
        $this->setData($this->$m->findAll());
    }


    /**
     * Add conitions from URL parameters
     * @return array
     */
    private function insertCondition()
    {
        // Base of the array
        $c = array();
        // All the conditions in URL
        $g = $this->f3->get('GET');

        if (!empty($g)) {
            foreach ($g as $k => $v) {
                // Check if the value is ok
                if ($this->acceptedCond($k)) {
                    // transform string in int in case of
                    if ($this->arg_ok[$k] == "int") {
                        intval($v);
                    }
                    $c[$k] = $v;
                }
            }
        }
        return $c;
    }

    /**
     * Check if the condition is accept
     * @return boolean
     */
    private function acceptedCond($cond)
    {
        $args = array_keys($this->arg_ok);
        return (in_array($cond, $args)) ? true : false;
    }

    public function setHtmlValue($field, $value)
    {
        $this->f3->set($field, $value);
    }

    public function render($template, $body = null)
    {
        if (!empty($body)) {
            if (is_array($body)) {
                $this->f3->set("list", $body);
            } else if (is_object($body)) {
                $keys = get_object_vars($body);
                foreach ($keys as $key) {
                    echo $key;
                }
            }
        }
        $tmp = new \Template;
        if (!empty($this->baseView)) {
            echo $tmp->render($this->baseView . $template . ".html");
        } else {
            echo $tmp->render($template . ".html");
        }
        die();
    }
}
