<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login con postback</title>
</head>
<body>

<h1>Accesso a pagina riservata</h1>

<?php
// controllo se il form e'stato inviato
$mostraForm = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        echo "<p>Benvenuto $username nell'area riservata del sito!</p>";
        $mostraForm = false;
    } else {
        echo "<p>Attenzione! Username o password sbagliati.</p>";
        echo "<p>Accesso negato!</p>";
    }
}

// visualizzo il form
if ($mostraForm) {
?>

<form action="es02b.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <input type="submit" name="submit" value="Login">
    <input type="reset" value="Cancella">

</form>

<?php
}
?>

</body>
</html>
