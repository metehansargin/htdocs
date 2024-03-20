<?php 
function filmEkleme( &$kurslar,string $baslik,string $altbaslik,string $resim,string $yayintarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true ){
    // global $kurslar;    //yukardaki end ile olan ifadeyi yazmamış olsaydık burasını mecbur yazıcaktık
$yeni_kurs[count($kurslar)+1]=array(
    "baslik"=>$baslik,
    "altbaslik"=>$altbaslik,
    "resim"=>$resim,
    "yayınTarihi"=>$yayintarihi,
    "yorum"=>$yorumSayisi,
    "begeni"=>$begeniSayisi,
    "onay"=>$onay
);
$kurslar=array_merge($kurslar,$yeni_kurs);
}
function urlDuzenle($baslik){
    return str_replace([" ",""],["-"],strtolower($baslik));
    
    }
    function kisaAcıklama($altBaslik){
        if(strlen($altBaslik)>50){
        return substr($altBaslik,0,50);
        }
        else{
            return $altBaslik;
        }       
    }
?>