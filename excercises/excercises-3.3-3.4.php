<?php

//$fahrenheit = -50;
//
//while ($fahrenheit <= 50){
//    $celsius = (($fahrenheit - 32) * 5) / 9;
//    printf("Температура %d по фаренгейту равна температуре %d по целсию \n", $fahrenheit, $celsius);
//    $fahrenheit++;
//}

for ($fahrenheit = -50;$fahrenheit<=50;$fahrenheit++) {
    $celsius = (($fahrenheit - 32) * 5) / 9;
    printf("Температура %d по фаренгейту равна температуре %d по целсию \n", $fahrenheit, $celsius);
}