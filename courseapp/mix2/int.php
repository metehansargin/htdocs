<?php
$number1=10;
$number2=8;
$number3=5;

echo var_dump(is_int(5))."<br>";
echo var_dump(is_int(5.2))."<br>";


echo var_dump(is_float(5.2))."<br>";
echo var_dump(is_float(5))."<br>";

echo var_dump(is_numeric("a5"))."<br>";#numaratic olup olmadığını kontrol eder eğer string bir ifade varsa false değer döndürür

echo abs(-10)."<br>";#pozitif yapar
echo "<br>";
echo ceil(4.3)."<br>";
echo ceil(4.8)."<br>";#yukarı yuvarlar
echo "<br>";
echo round(4.4)."<br>";
echo round(4.8)."<br>";#sayıya göre yukarı veya aşağıya yuvarlar
echo "<br>";
echo sqrt(25)."<br>";#karekökünü alır
echo pow(5,3)."<br>";#ikinci sayı kadar üssünü alır
echo max(10,20,90)."<br>";#max olanı alır
echo min(8,5,-4)."<br>";#min olanı alır

const baglanti="metehan sargın programlama ogreniyorum";
#değiştirilemez değer const 
echo baglanti;


?>