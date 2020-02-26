<?php

include 'functions.php';
/*if(empty($_SESSION['user']))

https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDdGyp6n2hKHPECuB6JZIT-8dVHCpwI0&language=id&region=ID
    header("location:login.php");*/
?>


 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- CSS Tambahan-->
      <link rel="stylesheet" href="css/csstambahan.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content="Sistem Informasi Geografis Gunung-Gunung di Indonesia berbasid website"/>
      <meta name="keywords" content="Gunung, SIG, Sistem Informasi Geografis, SIGWeb, PHP, JQuery, My SQL,"/>
      <meta name="author" content="Restu AK"/>
      <link rel="icon" href="favicon.ico"/>


      <title>Munggah Gunung - Sistem Informasi Gunung di Indonesia </title>
      
      <!-- Google API-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2GrDSBy6ISeGg3aWUM4mn3izlA1wgt0&language=in&region=ID"></script>

      <script>
        var default_lat = <?=get_option('default_lat')?>; 
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
      </script>
      <script src="assets/js/script.js"></script>
      <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
      <link href="assets/css/general.css" rel="stylesheet"/>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>  
      <script src="assets/tinymce/tinymce.min.js"></script> 
      <script>
          tinymce.init({
          selector: "textarea.mce",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              menubar : false,
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
        </script> 


    </head>

    <body>


<!--NAVBAR -->
<div class="navbar-fixed">
  <nav class="nav-extended blue darken-2">
  <div class="container">
    <div class="nav-wrapper ">
      <img href="#!" class="brand-logo" src="img/logo/mg.png" width="100" height="40" alt="logo">
      <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons cari">search</i></a>
      <a href="#" data-target="mobile-navbar" class="sidenav-trigger"><i class="material-icons masuk">perm_identity</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href=""><i id="search" type="search" class="material-icons input-field">search</i></a></li>
        <li><a href="?m=login"><i id="signin" type="signin" class="material-icons input-field">perm_identity</i></a></li>
      </ul>
    </div>
    </div>
  </nav>
</div>


<!--SLIDER -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/gunung/1.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/gunung/4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/gunung/3.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
      

<!--JELAJAH-->
<section id="jelajah" class="jelajah">
  <div class="container">
    <div class="row">
      <h3 class="light center grey-text text-darken-3">JELAJAH</h3>
      <div class="col m3 s12">
        <div class="card sticky-action center">
           <i class="material-icons large blue-text text-darken-2">location_on</i>
           <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Gunung Terdekat</span>
              </div>
              <div class="card-reveal">
               <span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
                  <p>Temukan gunung terdekat dari tempat kamu.</p>
              </div>
              <div class="card-action"><a href="#">KLIK DI SINI</a></div>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card sticky-action center">
           <i class="material-icons large blue-text text-darken-2">landscape</i>
           <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Basis Data Gunung</span>
              </div>
              <div class="card-reveal">
               <span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
                  <p>Temukan informasi gunung-gunung di Indonesia.</p>
              </div>
              <div class="card-action"><a href="?m=tempat_list">KLIK DI SINI</a></div>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card sticky-action center">
           <i class="material-icons large blue-text text-darken-2">map</i>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Jalur Pendakian</span>
              </div>
              <div class="card-reveal">
               <span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
                  <p>Ingin Mendaki? Temukan jalur pendakian di sini.</p>
              </div>
              <div class="card-action"><a href="#"> KLIK DI SINI</a></div>
            </div>
      </div>
      <div class="col m3 s12">
        <div class="card sticky-action center">
          <i class="material-icons large blue-text text-darken-2">info_outline</i>
           <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Status Vulkanik Gunung</span>
              </div>
              <div class="card-reveal">
               <span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
                  <p>Temukan status aktif gunung berapi di Indonesia.</p>
              </div>
              <div class="card-action"><a href="#"> KLIK DI SINI</a></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--SEARCH 
<nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>-->


<!--FOOTER-->
<footer class="page-footer blue darken-2">
          <div class="container ">
            <div class="row">
              <div class="col l6 s12 center">
                <h5 class="white-text">Munggah Gunung</h5>
                <p class="grey-text text-lighten-4">Munggah Gunung adalah sahabat kamu dalam pendakian dan mencari informasi aktivitas vulkanik gunung-gunung di Indonesia.</p>
              </div>
              <div class="col l4 offset-l2 s12 center">
                <h5 class="white-text ">Tautan</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Tentang</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Disklaimer</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Kontak</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">RSS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue darken-3">
            <div class="container">2019 Munggah Gunung 
            <a class="grey-text text-lighten-4 right" href="https://restuak.com">Oleh Restu AK</a>
            </div>
          </div>
        </footer>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!--NAVBAR-->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
      </script>
      
      <!--SLIDER-->
      <script>
      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
          indicators: false,
          height: 620,
          interval: 3000,

      });
      </script>


    </body>
  </html>
        