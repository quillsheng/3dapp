//adapted from example code 'benskitchen.com'
function getId(id) {
  var currentTab = document.querySelector('.nav-link.btn-primary');
  var _id = 'model__CameraFront';
  if (currentTab && currentTab.id) {
    //
    _id = '_' + currentTab.id;
  }
  var val =  id + _id;
  console.log('id:',val);
  return val;
}

var spinning = false;

function spin() {
  spinning = !spinning;
  document.getElementById(getId('model__RotationTimer')).setAttribute('enabled', spinning.toString());
}

function stopRotation() {
  spinning = false;
  document.getElementById(getId('model__RotationTimer')).setAttribute('enabled', spinning.toString());
}

function animateModel() {
  if (document.getElementById(getId('model__RotationTimer')).getAttribute('enabled') != 'true')
    document.getElementById(getId('model__RotationTimer')).setAttribute('enabled', 'true');
  else
    document.getElementById(getId('model__RotationTimer')).setAttribute('enabled', 'false');
}

function wireframe() {
  var e = document.getElementById('model');
  e.runtime.togglePoints(true);
  e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight() {
  lightOn = !lightOn;
  document.getElementById(getId('model__headlight')).setAttribute('headlight', lightOn.toString());
}



function cameraFront() {

  document.getElementById(getId("model__CameraFront")).setAttribute('bind', 'true');
}

function cameraBack() {
  document.getElementById(getId('model__CameraBack')).setAttribute('bind', 'true');
}

function cameraLeft() {
  document.getElementById(getId('model__CameraLeft')).setAttribute('bind', 'true');
}

function cameraRight() {
  document.getElementById(getId('model__CameraRight')).setAttribute('bind', 'true');
}

function cameraTop() {
  document.getElementById(getId('model__CameraTop')).setAttribute('bind', 'true');
}

function cameraBottom() {
  document.getElementById(getId('model__CameraBottom')).setAttribute('bind', 'true');
}
