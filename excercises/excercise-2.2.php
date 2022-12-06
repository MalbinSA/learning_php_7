<?php
$cost_hamburger = 4.95;
$cost_milk_shake = 1.95;
$cost_coca_cola = 0.85;
$tax_cost = 0.075;
$tip_cost = 0.16;

/*
 * formula has mistake - customer don't pay the tax from tips
$order_price = (($cost_hamburger*2) + $cost_milk_shake + $cost_coca_cola) * (1+$tip) * (1+$tax);
*/
$order_price = $cost_hamburger * 2 + $cost_milk_shake + $cost_coca_cola;
$tax = $order_price * $tax_cost;
$tip = $order_price * $tip_cost;

$all_cost = $order_price + $tax + $tip;

printf('Your order price is %.2f $',$all_cost);

