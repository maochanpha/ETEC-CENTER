<?php
$code = 101;
$name ="Product A";
$qty = 5;
$price = 10.0;


$total = $qty * $price;

if ($total > 0 && $total <= 10) {
    $discount = 10;
} elseif ($total <= 20) {
    $discount = 20;
} elseif ($total <= 30) {
    $discount = 30;
} elseif ($total <= 40) {
    $discount = 40;
} elseif ($total <= 50) {
    $discount = 50;
} elseif ($total <= 60) {
    $discount = 60;
} else {
    $discount = 70;
}


$payment = $total - ($total * $discount/100)  ;

echo "Code: $code<br>";
echo "Name: $name<br>";
echo "Quantity: $qty<br>";
echo "Price: $price$<br>";
echo "Total: $total<br>";
echo "Discount: $discount%<br>";
echo "Payment: $payment$<br>";
?>