<?php
    // asi se hace un comentario "//"
    /* asi se hace un comentario de varias
    lineas
    gg <bro></bro>*/
    $a = 8;
    $b = 3;
    echo "<h3>Operaciones Aritmeticas</h3>";
    echo "a = ".$a." y b = ".$b;
    echo "<br>La suma de a + b es ".($a+$b);
    echo "<br>La resta de a - b es" .($a-$b);
    echo "<br>La division de a / b es" .($a/$b);
    echo "<br>La multiplicacion de a *  b es " .($a*$b);
    echo "<br> a exponente b es " .($a**$b);
    echo "<br> a resto b es " .($a%$b);
?>
<?php
    $x = 8;
    $y = 3;
    echo "<h3>Operadores de comparacion. VACIO ES FALSE , 1 ES TRUE</h3>";
    echo "x = ".$x.", y = ".$y;
    echo "<br>x es igual a y? " .($x==$y);
    echo "<br> x es distinto a y?" .($x!=$y);
    echo "<br> x es menor a y? " .($x<$y);
    echo "<br> x es mayor a y ?" .($x>$y);
    echo "<br> x es mayor o igual a y?" .($x>=$y);
    echo "<br> x es menor o igual a y?" .($x<=$y);
?>
<?php
    echo "<h3>Operadores logicos Y, O, negacion</h3>";
    echo "<br>A es igual a B y X es mayor Y " .($a == $b && $x > $y);
    echo "<br>A es igual a B o X es igual a Y" .($a == $b || $x > $y);
    echo "<br>Negar (B es iguala X) ".!($b == $x);
?>


