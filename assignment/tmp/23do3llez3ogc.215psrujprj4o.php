<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>
<link rel="stylesheet" href="./static/css/index.css">
<!-- Start 3D App SPA Contents -->
<div class="container-fluid main_contents">
  <!-- Home page block element -->
  <div id="home" style="display: none">
    <div class="row"> <!-- Main_3D Image or Carousel -->
      <div class="col-sm-12">
        <div id="main_3d_image">
          <div id="main_text" class="col-xs-12 col-sm-4">

            <div id="title_home"></div>
            <div id="subTitle_home"></div>
            <div id="description_home"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Row of cards on the grid -->
    <div class="row">
      <!-- Coca Cola Column -->
      <div class="col-sm-4">
        <div class="card">
          <div href="javascript:swap('coke')" onclick="swap('coke')">
            <img class="card-img-top img-fluid img-thumbnail" src="./static/assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
          </div>
          <div class="card-body">
            <div id="title_left" class="card-title drinksText"></div>
            <div id="subTitle_left" class="card-subtitle drinksText"></div>
            <div id="description_left" class="card-text drinksText"></div>
            <a href1="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
          </div>
        </div>
      </div>

      <!-- Sprite Column -->
      <div class="col-sm-4">
        <div class="card">
          <div href="javascript:swap('sprite')" onclick="swap('sprite')">
            <img class="card-img-top img-fluid img-thumbnail" src="./static/assets/images/site_images/sprite.jpg" alt="Sprite">
          </div>
          <div class="card-body">
            <div id="title_centre" class="card-title drinksText"></div>
            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
            <div id="description_centre" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
          </div>
        </div>
      </div>

      <!-- Dr Pepper Column -->
      <div class="col-sm-4">
        <div class="card">
          <div href="javascript:swap('pepper')" onclick="swap('pepper')">
            <img class="card-img-top img-fluid img-thumbnail" src="./static/assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
          </div>
          <div class="card-body">
            <div id="title_right" class="card-title drinksText"></div>
            <div id="subTitle_right" class="card-subtitle drinksText"></div>
            <div id="description_right" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End home page -->

  <!-- Start X3D models and 3D Image Gallery -->
  <div id="models">
    <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
    <div class="row">
      <!-- X3D Models ??? Place 4 models in here for the assignment -->
      <div class="col-md-8 col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <div id="navCoke" class="nav-link btn-primary" href="#" onclick="swap('coke')">Coke</div>
              </li>
              <li class="nav-item">
                <div id="navSprite" class="nav-link" href="#" onclick="swap('sprite')">Sprite</div>
              </li>
              <li class="nav-item">
                <div id="navPepper" class="nav-link" href="#" onclick="swap('pepper')">Pepper</div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <!-- Coke X3D model -->
            <div id="coke">
              <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
              <!-- Place the X3D code here -->
              <div class="model3D">
                <x3d>
                  <scene>

                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./static/assets/x3d/coke.x3d">
                      <timeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="true" first="true" id="model__RotationTimer_navCoke"></timeSensor>

                      <!--                      <navigationInfo id="model__headlight_navCoke" headlight='true' type='"EXAMINE"'></navigationInfo>-->
                      <NavigationInfo id="model__headlight_navCoke" DEF="headlight" headlight="false" type="&quot;EXAMINE&quot;" typeParams="-0.4,60,0.05,2.8" explorationMode="all" avatarSize="0.25,1.6,0.75" speed="1" transitionTime="1" transitionType="LINEAR "></NavigationInfo>

                      <viewpoint id="model__CameraFront_navCoke" description="persp" orientation="0.105124 0.94807 0.300188 3.78271" position="-268.414 332.496 -350.739" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraBack_navCoke" description="default_cam" orientation="0.070061 0.977275 0.200062 3.80108" position="-220.745 192.926 -299.071" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraLeft_navCoke" description="back_cam" orientation="0.996843 -0.079223 -0.00522 6.15119" position="4.43222 99.5907 503.808" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraRight_navCoke" description="front_cam" orientation="0.000296 0.985499 0.169683 3.14503" position="-3.73474 307.945 -796.642" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraTop_navCoke" description="top_cam" orientation="0.999996 0.9999 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraBottom_navCoke" description="top_cam" orientation="0.999996 0.00201 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>

                    </inline>

                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
            </div>
            <!-- Sprite X3D model -->
            <div id="sprite" style="display:none;">
              <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
              <!-- Place the X3D code here -->
              <div class="model3D">
                <x3d id="model">
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./static/assets/x3d/sprite.x3d">
                      <timeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="true" first="true" id="model__RotationTimer_navSprite"></timeSensor>
                      <navigationInfo id="model__headlight_navSprite" headlight='true' type='"EXAMINE"'></navigationInfo>
                      <viewpoint id="model__CameraFront_navSprite" description="persp" orientation="0.105124 0.94807 0.300188 3.78271" position="-268.414 332.496 -350.739" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraBack_navSprite" description="default_cam" orientation="0.070061 0.977275 0.200062 3.80108" position="-220.745 192.926 -299.071" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraLeft_navSprite" description="back_cam" orientation="0.996843 -0.079223 -0.00522 6.15119" position="4.43222 99.5907 503.808" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraRight_navSprite" description="front_cam" orientation="0.000296 0.985499 0.169683 3.14503" position="-3.73474 307.945 -796.642" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraTop_navSprite" description="top_cam" orientation="0.999996 0.9999 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraBottom_navSprite" description="top_cam" orientation="0.999996 0.00201 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>

                    </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
            </div>
            <!-- Pepper X3D model -->
            <div id="pepper" style="display:none;">
              <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
              <!-- Place the X3D code here -->
              <div class="model3D">
                <x3d>
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="./static/assets/x3d/drpepper.x3d">
                      <TimeSensor DEF="RotationTimer" cycleInterval="4" loop="true" enabled="true" first="true" id="model__RotationTimer_navPepper"></TimeSensor>
                      <TimeSensor DEF="TIMER" cycleInterval="30" loop="true" enabled="true" first="true"/>
                      <navigationInfo id="model__headlight_navPepper" headlight='true' type='"EXAMINE"'></navigationInfo>
                      <viewpoint id="model__CameraFront_navPepper" description="persp" orientation="0.105124 0.94807 0.300188 3.78271" position="-268.414 332.496 -350.739" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraBack_navPepper" description="default_cam" orientation="0.070061 0.977275 0.200062 3.80108" position="-220.745 192.926 -299.071" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraLeft_navPepper" description="back_cam" orientation="0.996843 -0.079223 -0.00522 6.15119" position="4.43222 99.5907 503.808" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1" set_bind="true"></viewpoint>
                      <viewpoint id="model__CameraRight_navPepper" description="front_cam" orientation="0.000296 0.985499 0.169683 3.14503" position="-3.73474 307.945 -796.642" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraTop_navPepper" description="top_cam" orientation="0.999996 0.9999 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
                      <viewpoint id="model__CameraBottom_navPepper" description="top_cam" orientation="0.999996 0.00201 0.001745 4.85308" position="-1.42666 875.72 103.895" fieldofview="0.950022" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>

                    </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3D image gallery -->
      <div class="col-md-4 col-sm-12">

        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <!-- Dropdown nav-tab -->
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle btn-primary" id="navbardrop" data-toggle="dropdown">Cameras</a>
                <div class="dropdown-menu">
                  <div class="dropdown-item" href="#" onclick="cameraFront();">Front</div>
                  <div class="dropdown-item" href="#" onclick="cameraBack();">Back</div>
                  <div class="dropdown-item" href="#" onclick="cameraLeft();">Left</div>
                  <div class="dropdown-item" href="#" onclick="cameraRight();">Right</div>
                  <div class="dropdown-item" href="#" onclick="cameraTop();">Top</div>
                  <div class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle drinksText">
              <h3>Camera Views</h3>
            </div>
            <div href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</div>
            <div href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</div>
            <div href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</div>
            <div href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</div>
            <div href="#" class="btn btn-outline-dark disabled btn-responsive">Off</div>
            <div class="card-text x3dCameraDescription drinksText">
              <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
            </div>
          </div>
        </div>

        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active  btn-primary">Animation</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
              <h3>Animation Options</h3>
            </div>
            <div href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</div>
            <div href="#" class="btn btn-outline-light btn-responsive">RotY</div>
            <div href="#" class="btn btn-outline-light btn-responsive">RotZ</div>
            <div href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</div>
            <div class="card-text x3dAnimationDescription drinksText">
              <p>These buttons select a range of X3D animation options</p>
            </div>
          </div>
        </div>

        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <div class="nav-link active dropdown-toggle btn-primary" href="#" id="navbardrop" data-toggle="dropdown">Render</div>
                <div class="dropdown-menu">
                  <div class="dropdown-item" href="#">Polygon</div>
                  <div class="dropdown-item" href="#" onclick="wireframe();">Wireframe</div>
                  <div class="dropdown-item" href="#">Vertex</div>
                </div>
              </li>
              <!-- Dropdown nav-tab -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                <div class="dropdown-menu">
                  <div class="dropdown-item" href="#">Default</div>
                  <div class="dropdown-item" href="#">Onmi On/Off</div>
                  <div class="dropdown-item" href="#">Target On/Off</div>
                  <div class="dropdown-item" href="#">Headlight On/Off</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-Title x3dRendersubtitle drinksText">
              <h3>Render and Lighting Options</h3>
            </div>
            <div href="#" class="btn btn-success btn-responsive">Poly</div>
            <div href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</div>
            <div href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</div>
            <div href="#" class="btn btn-outline-dark btn-responsive">Default</div>
            <div class="card-text x3dRenderDescription drinksText">
              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
            </div>
          </div>
        </div>

      </div> <!-- End gallery column -->
    </div> <!-- End row for X3D Model and Gallery -->
  </div> <!-- End X3D Models and Gallery -->

  <!-- Start the interaction panels -->
  <div class="container bg-white mt-3 py-3">
    <div class="text-center mb-4">
       <span class="h3 px-4" style="    border: 2px solid;">
          Gallery 3D Images
        </span>
    </div>

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="row text-center">
          <?php $ctr=0; foreach (($group1?:[]) as $image): $ctr++; ?>
            <div class="col-md-4 col-xs-6 col-sm-12 p-sm-5 p-md-2 p-3">
              <div class="card ">
                <div class="card-body">
                  <a href=".<?= ($group_path1) ?>/<?= ($image) ?> " data-fancybox="group1">
                    <img class="card-img-top img-thumbnail" src=".<?= ($group_path1) ?>/<?= ($image) ?>"/>
                  </a>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>

    <div id="interaction" class="row " style="display: none;">

      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header gallery-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active">Gallery</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-title title_gallery drinksText"></div>

            <!--          <div class="gallery" id="gallery"></div>-->
            <div class="card-text description_gallery drinksText"></div>
          </div>
        </div> <!-- End gallery card -->

      </div>

    </div> <!-- End the interaction panels -->
  </div>

  <div class=" py-3" style="background-color: #F2DFD0;margin-left: -15px;margin-right: -15px;width: 100vw;">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="row text-center">
            <?php $ctr=0; foreach (($group2?:[]) as $image): $ctr++; ?>
                <div class="col-md-4 col-xs-6 col-sm-12 p-sm-5 p-md-2 p-3">
                <div class="card ">
                  <div class="card-body">
                    <a href=".<?= ($group_path2) ?>/<?= ($image) ?> " data-fancybox="group2">
                      <img class="card-img-top img-thumbnail" src=".<?= ($group_path2) ?>/<?= ($image) ?>"/>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>

  <div class="hide" style="display: none;">
    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_coke" class="card-title drinksText"></div>
            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
            <div id="description_coke" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
          </div>
        </div>
      </div>
    </div> <!-- End coke description contents -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_sprite" class="card-title drinksText"></div>
            <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
            <div id="description_sprite" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
          </div>
        </div>
      </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_pepper" class="card-title drinksText"></div>
            <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
            <div id="description_pepper" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>
          </div>
        </div>
      </div>
    </div> <!-- End pepper description contents -->
  </div>
</div>  <!-- End 3D App SPA Contents -->


<!-- My 3D App modals -->


<!-- Include the x3dom JavaScript -->
<script src='./static/js/x3dom.js'></script>

<!-- Font Awesome Version 5 -->
<!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
<script src="./static/js/all.js"></script>

<!-- Custom JavaScript code for your 3d App -->
<!-- Also, intialises popovers-->
<script src="./static/js/custom.js" crossorigin="anonymous"></script>


<!-- JavaScript and PHP based Gallery generator  -->
<!--<script src="./static/js/gallery_generator.js"></script>-->

<!-- JavaScript and PHP based Gallery generator  -->
<script src="./static/js/getJsonData.js"></script>

<script src="./static/js/modelInteractions.js"></script>

<!--fancyBox3 => https://fancyapps.com/docs/ui/quick-start#cdn  -->


<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
