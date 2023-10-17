<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>tabla de multiplicar</title>
</head>
<body>
    <?php
    // imprimir una tabla de multiplicaer con for()
    //luego mejorar para imprimir todas las tablas del 1 al 10

for($x = 0 ; $x <=10 ; $x++){
    echo "<h2>Tabla del $x</h2>";
    for($y=0; $y <=10; $y++){
        echo "$x x $y=" .($x*$y)."<div>";
    }
}

    ?>
</body>
</html>