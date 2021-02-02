<?php 
if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
include("album_add.inc.php");
if(isset($_POST["submit"])){

    $melding = "";
    $naam = htmlspecialchars($_POST['naam']);
    $images =  htmlspecialchars($_POST['image']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brandstof =  htmlspecialchars($_POST['brandstof']);
    $newOfTwee =   htmlspecialchars($_POST['new/twee']);
    
    $sql = "INSERT INTO autos_test (naam, foto, merken, jaar, prijs, brand_stof, new_twee)
     Values (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    try{
       $stmt->execute(array(
           NULL,
           $naam,
           $images,
           $merken,
           $jaar,
           $prijs,
           $brandstof,
           $newOfTwee)
       );
        $melding = "Nieuw album toegevoegd.";
    }catch(PDOException $e){
        $melding = "Kon geen nieuw album aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}
