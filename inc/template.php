<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<div class="contentItem">';
  <form action="" method="post">';
  <div class="row">';
  <input hidden value="goed" name="goed">';
  <!--<img class="test" src="data:image/jpg;base64,'.base64_encode($img).'" />'; -->
  <input class="button"  type="submit" value=" ' . $merken . ' ">';
  </div>
 </form>
</div>

<?php

//    $image = imagecreatefromstring($blob); 


if(isset($_POST["submit"]]){
    $goed = htmlspecialchars($_POST["goed"]);
    $sql = "SELECT FROM  WHERE dfsf LIKE '%$goed%'";
}





// $image = base64_encode($img);

//    $menu = <<<HTML
//    <form action="./shopping.php" method="post">
//    <div class="contentItem">
//      <div class="row">
//      <div  class="menutitle" name="id">$merken</div>
//         <!-- <div class="price" name="prijs">$image</div> -->
//      </div>
//         <img src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <img class="test" src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <input class="button" type="submit" value="Kopen">
//    </div>
//    </form>

//    HTML;

//    echo $menu;
   



?>
<?php
// $menu = <<<HTML

// <div class="contentItem">
//     <div class="row">
//         <div class="menutitle">$titel</div>
//         <div class="price">€$prijs</div>
//     </div>
//     <img src="$img">
//     <button >Kopen</button>
// </div>

// HTML;

// echo $menu;

