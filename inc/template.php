<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>


<?php

   // $image = imagecreatefromstring($blob); 

echo '<div class="contentItem">';
echo '<form action="./showroom_cars.php" method="post">';
echo '<div class="row">';
echo '<input hidden value="goed" name="goed">';
echo '<img class="test" src="data:image/jpg;base64,'.base64_encode($img).'" />'; 
echo '<input class="button" type="submit" value=" ' . $merken . ' ">';
echo'</div>';
echo'</form>';






// $image = base64_encode($image);

//    $menu = <<<HTML
//    <form action="./shopping.php" method="post">
//    <div class="contentItem">
//      <div class="row">
//      <div  class="menutitle" name="id">$merken</div>
//         <!-- <div class="price" name="prijs">$image</div> -->
//      </div>
//         <img src="$img">
//         <img src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <img class="test" src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <input type="number" min="0" name="aantal">
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

