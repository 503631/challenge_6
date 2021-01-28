<div class="block">
        <form action="./shopping.php" method="post">
            <input hidden name="goed">
            <input hidden value="$lijst" name="lijst">
            <input hidden value="$totaal" name="totaal">
            <input class="aftekenen" type="submit" value="afrekenen">
        </form>
        <form action="./shopping.php" method="post">
            <input hidden name="prijs" value="0">
            <input hidden name="clier">
            <input type="submit" value="leegmaken">
        </form>