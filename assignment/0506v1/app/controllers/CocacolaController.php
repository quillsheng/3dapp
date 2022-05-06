<?php
/**
 * CocacolaController
 */

namespace app\controllers;

use app\models\Beyond;
use app\models\Cocacola;
use app\models\Sellers;

class CocacolaController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->f3->set('header', 'header.html');
        $this->f3->set('footer', 'footer.html');

        $this->baseView = "Cocacola/";
    }


    public function index()
    {
        $cc = new Cocacola();

        $this->setHtmlValue('title', 'home page');
        $images = array("0" => "1.jpeg",
            "1" => "2.jpg",
            "2" => "3.jpg",
            "3" => "4.png",
            "4" => "5.jpeg",
            "5" => "6.jpeg",
            "6" => "7.jpeg");
        $this->setHtmlValue("images", $images);

        $ms = new Sellers();
        $sellers = $ms->findAll();
        $this->setHtmlValue("sellers", $sellers);


        $this->render("home");
    }

    public function about()
    {
        $this->render('about');
    }

    public function drinks()
    {
        $this->render('drinks');
    }

    public function contact()
    {
        $this->render('contact');
    }

    public function models()
    {

        $group_path1 = '/static/assets/images/gallery_images_group1';
        $group_path2 = '/static/assets/images/gallery_images_group2';
        $group1 = $this->getDirectoryImage($group_path1);
        $group2 = $this->getDirectoryImage($group_path2);

        $this->setHtmlValue('group1', $group1);
        $this->setHtmlValue('group2', $group2);

        $this->setHtmlValue('group_path1', $group_path1);
        $this->setHtmlValue('group_path2', $group_path2);

        $this->render('model');
    }

    public function beyond()
    {
        $model = new Beyond();
        $list = $model->findAll(array("limit" => 4));
        $this->setHtmlValue('list', $list);
        $this->render('beyond');
    }


    public function all()
    {
        $model = new Cocacola();
        $list = $model->findAll();
        $this->toJson($list);
    }


    public function getImages()
    {
        $group1 = $this->getDirectoryImage('/static/assets/images/gallery_images_group1');
        $group2 = $this->getDirectoryImage('/static/assets/images/gallery_images_group2');

        $this->toJson(array('group1' => $group1, 'group2' => $group2));
    }

    protected function getDirectoryImage($group = '/static/assets/images/gallery_images_group1')
    {
        $directory = $_SERVER['DOCUMENT_ROOT'] . $group;// '/static/assets/images/gallery_images';
        // Only load files with the following extensions
        $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
        // An array used to separate the extension from each file
        $file_parts = array();
        // Response message
        $response = "";
        // Opens the directory to parse the images
        $dir_handle = opendir($directory);
        // Iterate through all the files
        //$i=0;
        while ($file = readdir($dir_handle)) {

            //First check for hidden files
            if (substr($file, 0, 1) != '.') {
                // Split each file name to extract the file extension
                $file_components = explode('.', $file);
                // Grab the extension token
                $extension = strtolower(array_pop($file_components));
                // Is this file a valid image. If so, add it to the response
                if (in_array($extension, $allowed_extensions)) {
                    // Build a response string using the ~ symbol as a string separator
                    //$response .= $directory.'/'.$file.'~';
                    $response .= '/' . $file . '~';
                    //$i++;
                }
            }
        }
        closedir($dir_handle);

        $urls = explode("~", $response);
        $list = [];
        foreach ($urls as $url) {
            if (!empty($url)) {
                $list[] = explode('/', $url)[1];
            }
        }
        return $list;
    }
}

?>
