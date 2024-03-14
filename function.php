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


?>