<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/webshop.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <script>
        function uitloggen(){
            var loguit = confirm('Weet u zeker dat u wilt uitloggen?');
            if(loguit){
                location.href='index.php?page=uitloggen';
            }
        }
    </script>
</head>
<body>
   <!-- <img src="images/mk5.png"> -->
   <img class="logovista" src="images/logovista.webp" alt="">
  <!-- #region Navbar-->
  <div id="navbar"><script>
    
    $("#navbar").load("common/navbar.html");
  </script></div>
 
  <!-- #endregion -->
  <div class="header">


    <!-- <div class="icon_container">
         <div class="icon">&#x266C;</div>
      </div>-->
       <?php 
        if(isset($_SESSION["ID"])&&$_SESSION["STATUS"]=="ACTIEF"){
          if($_SESSION["ROL"]==0){
        ?>

        <div class="user">
            <p id="user">Gebruiker: <?php echo $_SESSION["USER_NAAM"]; ?></p>
        </div>
        
        <div class="nav">
            <ul>
                <li onclick="location.href='index.php?page=profiel_edit'">Profiel</li>
                <li onclick="location.href='index.php?page=webshop'">showroom</li>
                <li onclick="uitloggen()">Uitloggen</li>
            </ul>
        </div>
        <?php 
          }elseif($_SESSION["ROL"]==1){
        ?>
         <div class="user">
             <p id="user">Administrator: <?php echo $_SESSION["USER_NAAM"]; ?></p>
         </div>
         <div class="nav-admin">
             <ul>
                 <li onclick="location.href='index.php?page=albums'">auto's</li>
                 <li onclick="location.href='index.php?page=klanten'">Klanten</li>
                 <li onclick="location.href='index.php?page=weborders'">Weborders</li>
                 <li onclick="location.href='index.php?page=rapporten'">Rapporten</li>
                 <li onclick="uitloggen()">Uitloggen</li>
             </ul>
         </div>
        <?php
          }
        }
      ?>
  </div>    
</body>
</html>