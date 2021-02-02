<?php
if (isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
            alert('U heeft geen toegang tot deze pagina.');
            location.href='../index.php';
        </script>";
}

if (isset($_POST["submit"])) {
    // Weborder aanmaken
    $datum = new DateTime();
    $datum = date_format($datum, "c");
    $sql = "INSERT INTO weborder (id. klant_id. datum values (?,?,?)";

    $stmt = $pdo->prepare($sql);
    session_start();
    $data = array(NULL, $_SESSION['USER_ID'], $datum);
    try {
        $stmt->execute($data);
        echo "<script>
               alert('Bestelling aangemaakt.');
            </script>";
    } catch (PDOException $e) {

        echo $e->getMessage();
        echo "<script>
              alert('Kon geen bestelling aanmaken');
              location.href='index.php?page=webshop';
           </script>";
    }
}