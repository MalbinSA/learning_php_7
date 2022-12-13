<?php
$flavors = array('Japanes' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
    'Chinese' => array('hot' => 'mustard', 'pepper-salty' => 'prickly ash'));

foreach ($flavors as $culture => $culture_flavors){
    foreach ($culture_flavors as $flavor => $example){
        echo "A $culture $flavor flavor is $example.\n";
    }
}
//---------------------------------------------------------------------------------
$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
                    array('Chestnut Salad', 'Walnut Salad', 'Peanut Salad') );
for ($i=0, $nut_specials = count($specials); $i < $nut_specials; $i++){
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++){
        echo "Element [$i][$m] is " . $specials[$i][$m] . ".\n";
    }
}