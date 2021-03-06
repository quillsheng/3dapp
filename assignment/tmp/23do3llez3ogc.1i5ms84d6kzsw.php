<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./static/css/bootstrap.css">
  <!-- X3dom -->
  <link rel='stylesheet' type='text/css' href='./static/css/x3dom.css'>
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="./static/css/all.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./static/css/custom.css">
  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
  <title>Coca Cola 3D App template <?= ($title) ?></title>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./static/js/jquery-3.6.0.js"></script>
  <script src="./static/js/popper.min.js"></script>
  <script src="./static/js/bootstrap.js"></script>


</head>
<body id="bodyColor">

<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
  <div class="container-fluid container-xxl flex-wrap flex-md-nowrap">
    <div class="col-xl-4 text-center">
      <a class="text-white" href="./beyond">
        Going beyond
      </a>
    </div>
    <!-- Brand -->
    <div class="col-xl-4 logo">
      <a class="navbar-brand" href="./index">
        <h1>1</h1>
        <h1>oca</h1>
        <h2>Cola</h2>
        <h3>Journey</h3>
      </a>
      <p class="p-0 m-0 models-navbar-brand-p">Refreshing the world, one story at a time</p>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" style="    padding: unset;
    position: absolute;
    right: 28px;
    top: 28px;
}">
      <span class="navbar-toggler-icon text-white" style="width: 25px; height:25px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
        </svg>
      </span>
    </button>

    <!-- Link Menu item button to the links class navbar-collapse selector -->
    <div class="col-lx-4 collapse navbar-collapse" id="navbarSupportedContent" style="flex:none">
      <!-- Links -->
      <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
        <li class="nav-item">
          <a class="nav-link" href="./index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./models">Models</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./contact" data-toggle="modal" data-target="#contactModal">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

