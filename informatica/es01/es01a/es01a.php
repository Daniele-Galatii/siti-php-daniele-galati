<!DOCTYPE html>
<html lang="it">
<head>
    <title>Tabella pitagorica</title>
</head>
<body>

<h1>Tabella pitagorica</h1>

<?php
// creo una tabella di 10 righe e 10 colonne
echo '<table border="1">';

// ciclo per creare le righe
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    // ciclo per creare le colonne
    for ($j = 1; $j <= 10; $j++) {
        $risultato = $i * $j;
        echo "<td>$risultato</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
