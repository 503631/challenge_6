<!DOCTYPE html>
<html lang="en">
<!-- <?php session_start();
$_SESSION['true'] = false; ?> -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="shortcut icon" href="images/cars.ico"  type="image/x-icon">
  <title>v!st@CARS</title>
</head>
<body>
  <!-- <img src="images/mk5.png"> -->
    <!-- <img src="images/mk5.png"> -->
    <!-- <img class="logovista" src="images/logovista.webp" alt=""> -->
  <!-- #region Navbar-->
  <div id="navbar"><script>
    
    $("#navbar").load("common/navbar.html");
  </script></div>
  <div id="filter"> 
  <?php include_once("inc/filter.inc.php") ?>
  </div>
  <!-- #endregion -->
  <?php include_once("inc/connectien.inc.php") ?>
  <?php
        if (isset(($_POST['clier']))) {
          $merk = $_POST['merk'];
          print $merk;
          include("inc/autos.inc_test.php");
  }else{
  echo  "<div id=\"auto\">";
    include("inc/autos.inc.php");
  echo "</div>";
  }
?>
