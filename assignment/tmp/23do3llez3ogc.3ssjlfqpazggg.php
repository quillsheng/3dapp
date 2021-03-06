<?php echo $this->render($header,NULL,get_defined_vars(),0); ?>

<div class="container-fluid">
  <div class="row mt-3">
    <div class="col-md-6 col-xs-12 position-relative text-white" style="background-color: #F14747;min-height: 350px;">
      <div class="h-25"></div>
      <div class="py-3 m-4 text-center align-content-center ">
        <div class="h3">CHECK OUT THIS BUNDLE</div>
        <div>
          Our Celebration Bundle,lets you choose drinks and assessores to throw and unforgettable party.
        </div>
        <div class="mt-3">FIND MORE</div>
      </div>
    </div>
    <div class="col-md-6 col-xs-12 p-0 m-0"  data-fancybox="demo1" data-src="./static/assets/images/home/coca-home.jpeg">
      <img src="./static/assets/images/home/coca-home.jpeg" width="100%" height="100%">
    </div>
  </div>
</div>

<div class="container">
  <div class="row mt-3">
    <div class="col-md-6 col-xs-12 position-relative p-0 m-0 "  data-fancybox="demo2" data-src="./static/assets/images/home/drpepper-home.jpeg">
      <img src="./static/assets/images/home/drpepper-home.jpeg" width="100%">
    </div>
    <div class="col-md-6 col-xs-12 p-sm-0 m-sm-0 p-5 m-0 text-white " style="background-color: #000">
      <div class="p-4 ">
        <div class="mt-2 h3">DISCOVER WHAT THE DRPEPPER</div>
        <p>The drpepper has done it again! the greatest flavour mystery continues...</p>
        <p>Put your taste buds to the test.</p>
        <div class="row">
          <div class="col-8"></div>
          <div>
            FIND MORE
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="row mt-3">

    <div class="col-md-6 col-xs-12 p-sm-0 m-sm-0  p-5 m-0 text-white " style="background-color: #000">
      <div class="p-4 ">
        <div class="mt-5 h3">NEW SPRITE PRODUCTS AVAILAABLE</div>
        <p>We've expanded our range to include four exciting NEW Sprite drinks.</p>
        <p>biTry one of them today</p>

        <div class="row">
          <div class="col-8"></div>
          <div class="h6">
            FIND MORE
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xs-12" style="padding: 0px;margin:0px;"  data-fancybox="demo3" data-src="./static/assets/images/home/sprite-home.jpeg">
      <img src="./static/assets/images/home/sprite-home.jpeg" width="100%">
    </div>
  </div>


  <div class="carousel " style="margin:10px -15px 20px -15px;">
    <?php foreach ((@$images?:[]) as $fruit): ?>
      <div class="carousel__slide c-image" data-fancybox="demo4" data-src="./static/assets/images/image-player/player<?= (trim($fruit)) ?>">
        <img  src="./static/assets/images/image-player/player<?= (trim($fruit)) ?>">
      </div>
    <?php endforeach; ?>

  </div>


  <div class="mt-5">
    <div class=" text-center position-relative mb-5" style="height: 100px">
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class="h3" style="margin-left: -80%; border: 2px solid">

        BASET SELLERS
        </div>
      </div>
    </div>

    <table class="table table-bordered">
      <thead>
      <tr>
        <th>Name</th>
        <th>Rate</th>
        <th>Reviews</th>
        <th>Price</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach (($sellers?:[]) as $row): ?>
        <tr>
          <td><?= ($row->name) ?></td>
          <td><?= ($row->rate) ?></td>
          <td><?= ($row->reviews) ?></td>
          <td><?= ($row->price) ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>

    </table>
    <div class="py-5"></div>
  </div>
</div>

<script src="./static/js/home.js"></script>

<?php echo $this->render($footer,NULL,get_defined_vars(),0); ?>
