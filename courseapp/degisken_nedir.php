<?php
$mehmet=2000;
$ali=1000;
$samet=3000;

$vergiorani=0.27;
$kdvorani=0.18;

$sayi1=10;
$sayi2=19;

echo $sayi1." ".$sayi2;
echo "<br>";
$sayi1=90;

echo $sayi1."".$sayi2;
echo "<br>";

echo $mehmet -($mehmet*$vergiorani*$kdvorani);
echo "<br>";
echo $ali -($ali*$vergiorani*$kdvorani);
echo "<br>";
echo $samet -($samet*$kdvorani*$vergiorani);



?>