<?php

// while
$i = 1;

//comando alternativo
while ($i <= 10):
    echo "i = $i <br>";
    $i++;
endwhile;
echo "<hr>";

//escrita convencional
$i = 1;
while ($i <= 10){
    echo "i = $i <br>";
    $i++;
}
echo "<hr>";

//do while
$i = 0;
do{
    echo "i = $i <br>";
    $i++;
}while ($i <= 10);
echo "<hr>";