<?php
function color($red, $green, $blue){
     return ($converted = '#' . dechex($red) . dechex($green) . dechex($blue));
}

echo color(23,34,222);