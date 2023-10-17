<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <?php
        $dia[0] = "Domingo";
        $dia[1] = "lunes";
        $dia[2] = "Martes";
        $dia[3] = "Miercoles";
        $dia[4] = "Jueves";
        $dia[5] = "Viernes";
        $dia[6] =  "Sabado";

        $mes = array("enero","febrero","marzo");
        //mostrar el Viernes
        echo "el quinto dia es el ". $dia[5];
        echo "<br>";
        //imprimir febrero
        echo "el mes del carnaval es $mes[1]";
        echo "<br>";
    ?>
<?php
$autos = array("volvo","BMW","Toyota");
$arraylongitud = count($autos);
for($x = 0; $x < $arraylongitud; $x++) {
    echo $autos[$x];
    echo "<br>";
}
?>
    
</body>
</html>