<?php
function gunaydin(){
    for($i=0;$i<4;$i++){
    echo "Günaydın Sabah Oldu"."<br>";
}
}
gunaydin();

function sene(){
return date('Y');
}
function saat(){
return date('h');
}
echo saat()."<br>";
echo sene()."<br>";
function selamlama(){
    if(saat() <12){
        return "günaydın"."<br>";
    }
    else{
        return "iyi günler"."<br>";
    }
    
    echo selamlama()."<br>";
}

function isimyazdirma($isim){
    echo "merhaba".$isim."<br>";

}
echo isimyazdirma(" ahmet");
echo isimyazdirma(" veli");

function yasHesaplama($dogumYili){
    return date("Y")-$dogumYili."<br>";
}

echo yasHesaplama(2002);
function emeklilgeKacSeneKaldi($dogumYili,$isim){
    $yas=yasHesaplama($dogumYili);
    $kalanSure=65-$yas;

    if($kalanSure >0){
    return " $isim, emekliliğe kalan sure $kalanSure";
    }
    else{
        return " $isim, zaten $kalanSure once emekli oldunuz";

    }

}
function kullanici($kelime,$adet){
    for($i=0;$i<$adet;$i++){
        echo $kelime."<br>";
    }

}
kullanici("Hobbit",10);

function dikdortgenalan($kisaKenar,$uzunKenar){
    $alan=$kisaKenar*$uzunKenar;
    echo $alan."<br>";

}
dikdortgenalan(10,20);

function yaziTura(){
    $yt=rand(1,100);
    if($yt<50){
        echo "tura";
    }
    else{
        echo "yazı";
    }
}
yaziTura()."<br>";
yaziTura()."<br>";
yaziTura();
echo "<br>";

function bolenSayisi($sayi){
    $tambolenler=array();
    for($a=2; $a < $sayi;$a++){

        if( $sayi % $a==0){
        array_push($tambolenler,$a)."<br>";
    }
}
    return$tambolenler;
}

print_r(bolenSayisi(50))."<br>";

?>