<?php 

if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $titel = htmlspecialchars($_POST['titel']);
    $artiest  = htmlspecialchars($_POST['artiest']);
    $genre = htmlspecialchars($_POST['genre']);
    $prijs = htmlspecialchars($_POST['prijs']);

    $sql = "UPDATE album SET 'titel' = ?, 'artiest' =?,
            'genre' = ?, 'prijs' = ?,  WHERE 'id' = ? ";
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

?>  