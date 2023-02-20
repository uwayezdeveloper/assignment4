<?php

$size = 7;
$abc = ceil($size/2);

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= abs($abc-$i); $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $size - 2*abs($abc-$i); $k++) {
        echo "*";
    }
    echo "<br/>";
}

?>
