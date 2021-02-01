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
    $titel = htmlspecialchars($_POST['titel']);
    $artiest =  htmlspecialchars($_POST['artiest']);
    $genre =  htmlspecialchars($_POST['genre']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $voorraad =  htmlspecialchars($_POST['voorraad']);
    $images =   htmlspecialchars($_POST['images']);
    
    $sql = "INSERT INTO album (id, titel, artiest,genre, prijs, voorraad, images) Values (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    try{
       $stmt->execute(array(
           NULL,
           $titel,
           $artiest,
           $genre,
           $prijs,
           $voorraad,
           $images)
       );
        $melding = "Nieuw album toegevoegd.";
    }catch(PDOException $e){
        $melding = "Kon geen nieuw album aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}
