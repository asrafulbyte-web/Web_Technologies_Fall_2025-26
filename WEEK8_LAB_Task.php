1.
<?php
$length = 30;
$width = 10;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: $length <br>";
echo "Width: $width <br>";
echo "Area of Rectangle: " . $area . "<br>";
echo "Perimeter of Rectangle: " . $perimeter . "<br>";
?>

2.
<?php
$amount = 2500;
$vat = $amount * 0.15;
$total = $amount + $vat;

echo "Amount: " . $amount . "<br>";
echo "VAT (15%): " . $vat . "<br>";
echo "Total Amount (Including VAT): " . $total;
?>
<br>

3.
<?php
$number = 55;

if ($number % 2 == 0) {
    echo $number . " is an Even number.";
} else {
    echo $number . " is an Odd number.";
}
?>
<br>

4.
<?php
$a = 20;
$b = 45;
$c = 30;

if ($a >= $b && $a >= $c) {
    echo $a . " is the largest number.";
} elseif ($b >= $a && $b >= $c) {
    echo $b . " is the largest number.";
} else {
    echo $c . " is the largest number.";
}
?>
<br>
5.

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}
?>