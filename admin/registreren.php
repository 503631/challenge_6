<?php
include("registreren.html");
include("connection.inc.php");
if (isset($_POST["submit"])) {
    $melding = "";
    $voornaam = htmlspecialchars($_POST['voornaam']);
    $achternaam = htmlspecialchars($_POST['achternaam']);
    $klant = $voornaam . " " . $achternaam;
    $straat = htmlspecialchars($_POST['straat']);
    $postcode = htmlspecialchars($_POST['postcode']);
    $woonplaats = htmlspecialchars($_POST['woonplaats']);
    $email = htmlspecialchars($_POST['e-mail']);
    $wachtwoord = htmlspecialchars($_POST['wachtwoord']);
    $wachtwoordHash = password_hash($wachtwoord, PASSWORD_DEFAULT);
    /// controleer of e-mail al bestaat geen dubbele adressen
    $sql = "SELECT * FROM klant WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($email));
    $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($resultaat) {
        $melding = "Dit e-mailadres is al geregistreerd";
    } else {
        $sql = "INSERT INTO klant (ID, voornaam, achternaam, straat, postcode, woonplaats, email, wachtwoord, rol) values (null,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute(
                array(
                    $voornaam,
                    $achternaam,
                    $straat,
                    $postcode,
                    $woonplaats,
                    $email,
                    $wachtwoordHash,
                    0
                )
            );
            $melding = "Nieuw account aangemaakt.";
        } catch (PDOException $e) {
            $melding = "Kon geen account aanmaken." . $e->getMessage();
        }
        echo "<div id='melding'>$melding</div>";
    }
}
