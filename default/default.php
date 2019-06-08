<?php

include "localhost/config.php";
session_start();
// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: /login.php');
}
?>
<!DOCTYPE html>
<html>
<title>Chancletas</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<style>
header {
  background-color:  #36393e;
}
body, html {
  margin:0;
  padding: 0;
  background-color: #36393e;
}
ul {
  //ponerle sombra a la navigation bar
  -webkit-box-shadow: 0 8px 6px -6px #999;
  -moz-box-shadow: 0 8px 6px -6px #999;
   box-shadow: 0 8px 6px -6px #999;

  list-style-type: none;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  background-color: #2b2d31;

//Código para que la navigation bar no se mueva
  position: fixed;
  top: 0;
  width: 100%

}
li {
  float: left;
  padding: 0;
}
 li a {
  margin: 0px;
  display: block;
  color: white;
  text-align: center;
  padding: 25px !important;
  font-size: 150%;
  font-family: 'Indie Flower';
  text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
a:hover {
  background-color: #4a4c51;
}
.active {
  background-color: #6666ff;
}
header h1 {
 margin: 0;
// line-height:100px;
 text-align:center;
 font-family: 'Indie Flower', cursive;
 font-size: 700%;
 color: #ffffff; // #a0a4ac;
}

</style>
<header>
<ul>
<li><a class = 'active' href = '/home'>Home</a></li>
<li><a href = '#'>Datalogger</a></li>
<li><a href = '#'>Default Page</a></li>
<li><a href = '#'>Index.html</a></li>
<li style = 'float: right'><a href = '/about'>About</a></li>
</ul>

</header>
<script>
// Stick the navbar to the top of the page
window.onscroll = function(){Sticky()};
var navbar = document.getElementById('navbar');

function Sticky {
  navbar.classList.add('sticky');
}
</script>
</html>
