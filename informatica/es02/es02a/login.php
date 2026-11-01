<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo credenziali</title>
</head>
<body>

<h1>Controllo credenziali</h1>

<?php
// controllo i dati del form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        echo "<p>Benvenuto $username nell'area riservata del sito!</p>";
    } else {
        echo "<p>Attenzione! Nome utente o password sbagliate.</p>";
        echo "<p>Accesso negato!</p>";
    }

} else {
    echo "<p>Accedi dalla pagina di login.</p>";
}
?>

<a href="index.html">Torna al login</a>

</body>
</html>
