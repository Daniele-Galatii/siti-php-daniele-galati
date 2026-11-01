
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Saluto e browser</title>
</head>
<body>

<h1>Saluto in base all'orario</h1>

<?php
// imposto l'orario italiano
date_default_timezone_set("Europe/Rome");

$nome = "Paolo";
$ora = date("G");

// controllo l'ora
if ($ora >= 8 && $ora < 12) {
    $saluto = "Buongiorno";
} elseif ($ora >= 12 && $ora < 20) {
    $saluto = "Buonasera";
} else {
    $saluto = "Buonanotte";
}

echo "<p>$saluto $nome, benvenuto nella mia prima pagina PHP</p>";

// controllo il browser
$userAgent = $_SERVER["HTTP_USER_AGENT"];

if (strpos($userAgent, "Edg/") !== false) {
    $browser = "Edge";
} elseif (strpos($userAgent, "OPR/") !== false) {
    $browser = "Opera";
} elseif (strpos($userAgent, "Firefox") !== false) {
    $browser = "Firefox";
} elseif (strpos($userAgent, "Chrome") !== false) {
    $browser = "Chrome";
} elseif (strpos($userAgent, "Safari") !== false) {
    $browser = "Safari";
} else {
    $browser = "non riconosciuto";
}

echo "<p>stai usando il browser $browser</p>";
?>

</body>
</html>
