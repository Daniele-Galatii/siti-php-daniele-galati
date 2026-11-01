
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Triangoli di asterischi</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>

<h1>Triangoli di asterischi</h1>

<?php
// triangolo a
echo "(a)<br>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo '<br>';
}

echo '<br>';

// triangolo b
echo "(b)<br>";
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo '<br>';
}

echo '<br>';

// triangolo c
echo "(c)<br>";
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= 10 - $i; $j++) {
        echo '&nbsp;';
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo '<br>';
}

echo '<br>';

// triangolo d
echo "(d)<br>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10 - $i; $j++) {
        echo '&nbsp;';
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo '<br>';
}
?>

</body>
</html>
