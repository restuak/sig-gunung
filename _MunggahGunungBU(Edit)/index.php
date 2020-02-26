<?php

include 'functions.php';
/*if(empty($_SESSION['user']))

https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDdGyp6n2hKHPECuB6JZIT-8dVHCpwI0&language=id&region=ID
    header("location:login.php");*/
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- CSS Tambahan-->
      <link rel="stylesheet" href="css/csstambahan.css">

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>    
    <meta name="description" content="Source Code Sistem Informasi Geografis / Geographic Information System (GIS) berbasis web dengan PHP dan MySQL. Studi kasus: lokasi pura di Bali."/>
    <meta name="keywords" content="Sistem, Informasi, geografis, gis, Tugas Akhir, Skripsi, Jurnal, Source Code, PHP, MySQL, CSS, JavaScript, Bootstrap, jQuery"/>
    <meta name="author" content="sarjanakomedi.com"/>
    <link rel="icon" href="favicon.ico"/>
    <link rel="canonical" href="https://sarjanakomedi.com/" />

    <title>Sistem Informasi Geografis</title>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2GrDSBy6ISeGg3aWUM4mn3izlA1wgt0&language=in&region=ID"></script>
    <script>
        var default_lat = <?=get_option('default_lat')?>; 
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
    </script>
    <script src="assets/js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-center" href="?">GIS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?m=tempat"><span class="glyphicon glyphicon-map-marker"></span> Tempat</a></li>
            <li><a href="?m=galeri"><span class="glyphicon glyphicon-picture"></span> Galeri</a></li>            
            <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php else:?>            
            <li><a href="?m=tempat_list"><span class="glyphicon glyphicon-map-marker"></span> Tempat</a></li>
            <li><a href="?m=login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <?php endif?>                   
          </ul>          
        </div>
      </div>
    </nav>

    <div class="container">
    <?php
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div>
    <footer class="footer bg-primary">
      <div class="container">
        <p>Copyright &copy; <?=date('Y')?> SarjanaKomedi.com <em class="pull-right">13 Oktober 2017</em></p>
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