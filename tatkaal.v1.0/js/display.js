  //Un_id:17437365;
  //Name: Sujan Adhikari;
  //Module: Web-development
function call_login() { //checks whether the signup form is open or close
  var x = document.getElementById("signup");
  var y = document.getElementById("login");
  var can = document.getElementById("can");
  var tan = document.getElementById("tan");
  if (y.style.display === "none") {
    x.style.display = "none";
    y.style.display = "block";
    can.style.backgroundColor = "rgb(87, 184, 70)";
    tan.style.backgroundColor = "rgb(167, 175, 167)";
  } 
}
function call_signup(){//checks whether the login form is open or close
  var x = document.getElementById("signup");
  var can = document.getElementById("can");
  var tan = document.getElementById("tan");
  var y = document.getElementById("login");
  if (x.style.display === "none") {
    y.style.display = "none";
    x.style.display = "block";
    tan.style.backgroundColor = "rgb(87, 184, 70)";
    can.style.backgroundColor = "rgb(167, 175, 167)";
  } 
}

var img_couter = true;

function loadScript(){
  // setInterval(
    // function(){
    //   var body = document.getElementsByTagName("body")[0];
    //   if(img_couter){
    //     body.style.backgroundImage = "url('../appathon/images/1.jpg')";
    //     img_couter = !img_couter;
    //   }else{
    //     body.style.backgroundImage = "url('../appathon/images/2.jpg')";
    //     img_couter = !img_couter;
    //   }
    // }, 3000);
}

function showPosition(position) {
  
  alert(position.coords.longitude + ' ' + position.coords.latitude);
  var lat = document.getElementById('lat');
  window.location.href='index.php?keyword=' + position.coords.latitude + '&keyword2=' + position.coords.longitude;
  document.getElementById('long').innerHTML = position.coords.longitude;
  lat.innerHTML = position.coords.latitude ;
}
document.addEventListener("DOMContentLoaded", loadScript());
