<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabella dei quadrati e dei cubi</title>
</head>
<body>

<h1>Tabella dei quadrati e dei cubi</h1>

<?php

// controllo se il form e' stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $_POST["numero"];

    echo "<p>Tabella dei quadrati e dei cubi da 1 a $n:</p>";

    echo "<table border='1'>";
    echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

    // creo la tabella
    for ($i = 1; $i <= $n; $i++) {
        $quadrato = $i * $i;
        $cubo = $i * $i * $i;

        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$quadrato</td>";
        echo "<td>$cubo</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
?>

<form action="es02c.php" method="post">

    <label for="numero">Seleziona un numero intero N (da 1 a 10):</label>

    <select id="numero" name="numero">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>

    <br><br>
    <input type="submit" value="Crea tabella">

</form>

<?php
}
?>

</body>
</html>
