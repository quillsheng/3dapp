// JavaScript Document
var counter = 0;

function swap(selected) {
  console.log('--->selected...');
  // First do not display all div id contents
  document.getElementById('home').style.display = 'none';
  document.getElementById('coke').style.display = 'none';
  document.getElementById('sprite').style.display = 'none';
  document.getElementById('pepper').style.display = 'none';

  // Then display the selected div id contents
  document.getElementById(selected).style.display = 'block';

  document.getElementById('navCoke').classList.remove("btn-primary")
  document.getElementById('navSprite').classList.remove("btn-primary")
  document.getElementById('navPepper').classList.remove("btn-primary")
  window.event.target.classList.add('btn-primary')
  window.CURRENT_SWAP = selected;
}

function changeLook() {
  counter += 1;
  switch (counter) {
    case 1:
      document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
      document.getElementById('headerColor').style.backgroundColor = '#FF0000';
      document.getElementById('footerColor').style.backgroundColor = '#FF9900';
      break;
    case 2:
      document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
      document.getElementById('headerColor').style.backgroundColor = '#FF9999';
      document.getElementById('footerColor').style.backgroundColor = '#996699';
      break;
    case 3:
      document.getElementById('bodyColor').style.backgroundColor = 'coral';
      document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
      document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
      break;
    case 4:
      counter = 0;
      document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
      document.getElementById('headerColor').style.backgroundColor = 'chocolate';
      document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
      break;
  }
}

function changeBack() {
  document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
  document.getElementById('headerColor').style.backgroundColor = '#000000';
  document.getElementById('footerColor').style.backgroundColor = '#FFFFFF';
}
