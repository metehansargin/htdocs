<?php
$a=1;
$toplam=0;
while($a<=10){
$toplam+=$a;
$a++;
echo $toplam."<br>";

}

$ogrenciler=array("metehan","mehmet","fuat","kaan","bambam");

for($i=0;$i<count($ogrenciler);$i++){
    echo $ogrenciler[$i]."<br>";

}

$urunler=array(
    "100"=>array(
        "ürünAdi"=>"iphone 14",
        "fiyat"=>30000
    ),
    "101"=>array(
        "ürünAdi"=>"iphone 15",
        "fiyat"=>40000
    ),
    "102"=>array(
        "ürünAdi"=>"iphone 16",
        "fiyat"=>50000
    )
);

$keys=array_keys($urunler);

for($i=0;$i<count($urunler);$i++){

    echo $urunler[$keys[$i]]["ürünAdi"] ." ".$urunler[$keys[$i]]["fiyat"];

echo "<br>";
}

foreach ($urunler as $key => $value) {
    # code...
    echo $key." ".$value["ürünAdi"]." ".$value["fiyat"]."<br>";
}
?>