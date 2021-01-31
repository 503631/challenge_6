<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
?>
<div class="content">
  <form name="albumtoevoegen" class="form" action="" method="POST">
      <p id="page_titel"> album toevoegen</p>
      <label>Titel:</label>
      <input type="text" name="titel" id="titel" value="" />
      <label>Artiest:</label>
      <input type="text" name="artiest" id="artiest" value="" />
      <label>Genre:</label>
      <input type="text" name="genre" id="genre" value=""  />
      <label>Prijs:</label>
      <input type="text" name="prijs" id="prijs" value=""  />
      <label>Voorraad:</label>
      <input type="text" name="voorraad" id="voorraad" value=""  />
      <label>Upload cover:</label>
      <input type="file" name="cover" id="cover" value="" /> 
      <br />
      <div class="icon_container">
          <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
      </div>
      <a href="index.php?page=albums">Terug</a>
  </form>
</div> 
</body>
</html>


