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
    $foto =  htmlspecialchars($_POST['image']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brand_stof =  htmlspecialchars($_POST['brandstof']);
    $new_twee =   htmlspecialchars($_POST['new_twee']);
    
    $sql = "INSERT INTO autos_test (id, naam, foto, merken, jaar, prijs, brand_stof, new_twee) Values (?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    try{

       $stmt->execute(array(NULL,$naam,$foto,$merken,$jaar,$prijs,$brand_stof,$new_twee));
        $melding = "Nieuw album toegevoegd.";
        
    }catch(PDOException $e){
        $melding = "Kon geen nieuw album aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}
