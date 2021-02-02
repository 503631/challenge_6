<?php 

if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $titel = htmlspecialchars($_POST['naam']);
    $artiest  = htmlspecialchars($_POST['foto']);
    $genre = htmlspecialchars($_POST['merk']);
    $prijs = htmlspecialchars($_POST['prijs']);

    $sql = "UPDATE autos_test SET 'naam' = ?, 'foto' =?,
            'merken' = ?, 'prijs' = ?,  WHERE 'id' = ? ";
    $stmt = $pdo->prepare($query);
    try{
        $stmt = $stmt->execute(array($titel, $artiest, $genre,
                $prijs, $id));
           echo "<script>
                    alert('Profiel is geupdate');
                    location.href='index.php?page=webshop'; 
                 </script>";
    }catch(PDOExCeption $e){
          echo $e->getMessage();
    }
}
