<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$cost_hamburger = 4.95;
$cost_milk_shake = 1.95;
$cost_coca_cola = 0.85;
$tax_cost = 0.075;
$tip_cost = 0.16;

$order_price = $cost_hamburger * 2 + $cost_milk_shake + $cost_coca_cola;
$tax = $order_price * $tax_cost;
$tip = $order_price * $tip_cost;

$all_cost = $order_price + $tax + $tip;

printf("<pre><p>%d x $%.2f hamburger    = $%.2f<p></pre>", 2, $cost_hamburger, $cost_hamburger * 2);
printf("<pre><p>%d x $%.2f milkshake    = $%.2f<p></pre>", 1, $cost_milk_shake, $cost_hamburger);
printf("<pre><p>%d x $%.2f coca-cola    = $%.2f<p></pre>", 1, $cost_coca_cola, $cost_coca_cola);
printf("<pre><p>Your check price       = $%.2f<p></pre>", $all_cost);
printf('<pre><p>------------------------------<p>');
printf("<pre><p>Your order without tax = $%.2f<p></pre>", $all_cost);

?>
</body>
</html>