<?php
$name="Metehan";
$surname="Sargın";
$years=22;

$message="my name is ".$name." surname is ".$surname." years ".$years;

echo $message."<br>";

echo strlen($message)."<br>";#kapladığı alanı gösterir
echo str_replace("Metehan","Sargın",$message)."<br>";#seçilen karakterlerin yerini değiştirir
echo str_word_count($message)."<br>";#kaç kelime varsa yazar
echo strtolower($message)."<br>";#butun hepsini buyuk harfle yazar
echo strtoupper($message)."<br>";#butun hepsini kucuk harfle yazar
echo ucfirst($message)."<br>";#dizideki ilk kelimenin ilk harfini büyük yapar
echo ucwords($message)."<br>";#dizideki kelimelerin ilk harfini büyük yapar

echo substr($message,0,5)."<br>";#0-5 arası olan kodları alır bosluk dahil

echo mb_substr($message,0,13,"UTF-8")."<br>";#belirlenen aralıktaki son aralık dahil utf 8 koduna gore alır
echo substr_count($message,"a")."<br>";#istenen harf kaç efa geçmiş onu sayıyor
echo wordwrap($message,5,",")."<br>";#dizideki karakterler arasına boşluk koyuyo
echo strpbrk($message,"a")."<br>";#a harfini gördüğü yerden itibaren devam ediyor
echo strpbrk($message,"ei")."<br>";#en uzun hangisi ise onu kullanıyor
?>