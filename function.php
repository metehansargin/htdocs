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

function defaultParametre($name="Bünyamin",$saat=10)
{
echo "$name kalk sabah  saat $saat olmuş"."<br>";
}
defaultParametre();

$say=array(10,19,81,12);
function cokluParametre($say){
$toplam=0;
foreach($say as $coklu){
    $toplam +=$coklu;
}
echo  $toplam."<br>";
}
cokluParametre($say);

function intro(){
$parametreSayisi=func_num_args();
    if($parametreSayisi==0){
        echo "parametre yok";
    }
    else{
        $parametreler=func_get_args();
        foreach($parametreler as $param){
            echo $param."<br>";
        }
    }
}
intro("Türkiye","Almanya","Avusturya");

 //declare(strict_types=1);
function toplama(int $num1,int $num2,bool $isActive,array $arr,int $num3){

    echo $num1+$num2."<br>";
}
toplama(11,19,true,[19,19],12);
?>