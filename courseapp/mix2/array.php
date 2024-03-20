<?php
echo $renk=array("kırmızı,sarı,mavi,turuncu");
echo gettype($renk)."<br>";
echo str_split($rernk)."<br>";
echo $sayilar=array(23,45,1,56,90,4,6);

echo $sayilar[0]."<br>";
echo $sayilar[1]."<br>";
echo $sayilar[2]."<br>";
echo $sayilar[3]."<br>";

echo $renk[0]."<br>";

$sehirler=array("corum","trabzon","giresun","ankara","sinop");
$plakalar=array("19","61","28","06","57");

echo "$plakalar[0]:$sehirler[0] "."<br>";
echo "$plakalar[1]:$sehirler[1] "."<br>";
echo "$plakalar[2]:$sehirler[2] "."<br>";
echo "$plakalar[3]:$sehirler[3] "."<br>";
echo "$plakalar[4]:$sehirler[4] "."<br>";

$bilgi=array("19"=>"Çorum","27"=>"Gaziantep","34"=>"İstanbul");
echo $bilgi["19"]."<br>";
echo $bilgi["27"]."<br>";
echo $bilgi["34"]."<br>";

$telefonnum=array("ali"=>"24761274681","metehan"=>"8921489124812","seyithan"=>"67127830");
echo $telefonnum["ali"]."<br>";
echo $telefonnum["metehan"]."<br>";
echo $telefonnum["seyithan"]."<br>";


$ogrenciA=array("mehmet",array(20,30,40));
$ogrenciB=array("ali",array(10,20,90,32));

echo $ogrenciA[0]."<br>";
echo $ogrenciA[1][0]."<br>";
echo $ogrenciA[1][1]."<br>";
echo $ogrenciA[1][2]."<br>";

echo $ogrenciB[0]."<br>";

echo $ogrenciB[1][0]."<br>";
echo $ogrenciB[1][1]."<br>";
echo $ogrenciB[1][2]."<br>";
echo $ogrenciB[1][3]."<br>";


$ogrenciC=array("100"=>
array(
"ad"=>"EKREM",
"soyad"=>"İMARO",
"notlar"=>array(
    "matematik"=>array(50,70,100),
    "fizik"=>array(40,50,100),
    "kimya"=>array(40,50,90)
               )
),
"200"=>array(
"ad"=>"MURAT",
"soyad"=>"KURT",
"notlar"=>array(
    "matematik"=>array(30,20,100),
    "fizik"=>array(80,90,100),
    "kimya"=>array(90,90,90)
               )
)
);

echo $ogrenciC["100"]["ad"]."<br>";
echo $ogrenciC["100"]["soyad"]."<br>";
echo $ogrenciC["100"]["notlar"]["matematik"][0]." ";
echo $ogrenciC["100"]["notlar"]["matematik"][1]." ";
echo $ogrenciC["100"]["notlar"]["matematik"][2]." ";
echo $ogrenciC["100"]["notlar"]["fizik"][0]." ";
echo $ogrenciC["100"]["notlar"]["kimya"][0]." "."<br>";


echo $ogrenciC["200"]["ad"]."<br>";
echo $ogrenciC["200"]["soyad"]."<br>";
echo $ogrenciC["200"]["notlar"]["matematik"][0]." ";
echo $ogrenciC["200"]["notlar"]["matematik"][1]." ";
echo $ogrenciC["200"]["notlar"]["matematik"][2]." ";
echo $ogrenciC["200"]["notlar"]["fizik"][0]." ";
echo $ogrenciC["200"]["notlar"]["kimya"][0]." ";










?>