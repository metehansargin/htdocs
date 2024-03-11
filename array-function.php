<?php
$plakalar=array("41"=>"Kocaeli","27"=>"Gaziantep","19"=>"Çorum","61"=>"Trabzon");
$notlar=array(20,80,80,40,19,45,97,167);

//değerlerin sayısını gösterme

print_r(array_count_values($notlar))."<br>";

echo "<br>";

//değerle indisin yerini değiştirme

print_r(array_flip($plakalar))."<br>";
echo"<br>";
echo "<br>";

echo "<br>";
$indexes=array_rand($notlar,2);

print_r($notlar)."<br>";

echo $notlar[$indexes[0]]."<br>";
echo $notlar[$indexes[1]]."<br>";

echo "<br>";
echo "<br>";



//eleman ekleme
array_push($notlar,61);
echo "<br>";
print_r($notlar)."<br>";

//elemanı başa ekleme
array_unshift($notlar,11);
echo"<br>";
print_r($notlar)."<br>";
echo"<br>";

//eleman silme -sondan
array_pop($notlar);
echo"<br>";
print_r($notlar)."<br>";


//eleman silme-baştan
array_shift($notlar);
echo"<br>";
print_r($notlar)."<br>";

//sıralama-artan
sort($notlar)."<br>";
echo"<br>";
print_r($notlar)."<br>";

asort($plakalar)."<br>";
print_r($plakalar)."asort  value sıralama"."<br>";
ksort($plakalar)."<br>";
print_r($plakalar)."ksort keye gore sıralama"."<br>";

echo "<br>";

//sıralama-azalan
rsort($notlar);
echo"<br>";
print_r($notlar)."rsort azalan sıralama"."<br>";
arsort($plakalar)."arsort value sıralama"."<br>";
krsort($plakalar)."key azalana gore sıralama"."<br>";


//string to array

$str="ankara,06";
$arr=explode(",",$str);
print_r($arr)."<br>";
echo "<br>";

//array to string 

$arr=array("msargin1986","@gmail.com");
$str=implode(",",$arr);

echo"<br>";

print($arr)."<br>";
echo $str."<br>";


echo count($notlar)."<br>";
echo count($plakalar)."<br>";


print_r($notlar)."<br>";
echo "<br>";
print_r($plakalar)."<br>";


?> 