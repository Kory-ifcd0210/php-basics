<?php
$arr = array(1,2,3,4,5,6,7,8,9);
echo "Iterator For <br>";
    for ($i=0; $i < count($arr) ; $i++) {
        echo "The position is: $i <br>";
    }

    echo "<hr>";
    echo "Iterator ForEach <br>";
    foreach ($arr as &$valor) {
        echo " {$valor} - ";
    }

    echo "<hr>";
    echo "Iterator While <br>";
    $x = 0;

    while($x <= 100) {
        echo "The number is: $x <br>";
        $x+=10;
    }

    echo "<hr>";
    echo "Iterator doWhile <br>";
    do{
        echo "The number is: $x <br>";
    } while($x <= 100);

?>