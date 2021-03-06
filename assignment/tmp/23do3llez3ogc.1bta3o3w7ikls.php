<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<div class="container">
  <?php $index=0; foreach ((@$list?:[]) as $item): $index++; ?>
    <div class="row mt-3  border">
      <div class="col-md-6 col-xs-12 position-relative p-0 m-0 " data-fancybox="demo-<?= ($index) ?>" data-src="<?= ($item->image) ?>">
        <img src="<?= ($item->image) ?>" width="100%" height="300">
      </div>
      <div class="col-md-6 col-xs-12 p-sm-0 m-sm-0 p-5 m-0 text-white " style="background-color: #000">
        <div class="p-4 ">
          <div class="mt-2 h3"><?= ($item->title) ?></div>
          <p><?= ($item->description) ?></p>
          <div class="row">
            <div class="col-8"></div>
            <div> FIND MORE</div>
          </div>
        </div>
      </div>
    </div>


  <?php endforeach; ?>


  <div class="row mt-3  border">
    <div class="col-md-6 col-xs-12 position-relative p-0 m-0 " data-fancybox="demo-001" data-src="./static/assets/images/beyond/page5.png">
      <img src="./static/assets/images/beyond/page5.png" width="100%" height="500">
    </div>
    <div class="col-md-6 col-xs-12 p-sm-0 m-sm-0 p-5 m-0 text-white " style="background-color: #000">
      <div class="p-4 ">
        <div class="mt-2 h3"><a class=" text-white" href="https://fatfreeframework.com/3.7/home" target="_blank"> Fat-Free Framework for PHP </a></div>
        <p>f3是一个小型mvc框架， 代码库体积约为65Kb，速度很快。麻雀虽小，五脏俱全，F3仍然拥有您所期望的大部分功能，并且可以使用可选插件扩展它。
          配备了一个快速并且容易使用的模板引擎。f3的model同时与f3的数据映射和sql工具用多样的数据库引擎来做更复杂的交;
        </p>
        <p>index.php是项目的入口文件，引用f3MVC框架，加载一些系统配置比如：路由配置;
        <ul>
          <li>app目录是整个系统的核心部分，控制的定义在 controllers里，模型的定义在 models,模板的定义在 views 里。数据库的连接在helpers里的Database.php</li>
          <li>系统使用的到是SQLite数据库,页面上一些数据是从SQLite里读取并展示出来的</li>
          <li>static静态资源目录，此目录是整个系统资源目录，比如js,css,以及image等都放在这里</li>
          <li>tmp是系统运行的自动创建的。这里主要是f3把 views里面对应的页面，转成相应的模板保存到这个目录里，下次运行的时候就可以很快渲染出页面来</li>

        </ul>

        </p>
        <div class="row">
          <div class="col-8"></div>
          <div> FIND MORE</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
