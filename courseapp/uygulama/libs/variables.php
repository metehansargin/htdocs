<?php const title="Popüler Kurslar";

$kategoriler=array(    
    array("Kategori_adi"=>"Programlama","aktif"=>true),
    array("Kategori_adi"=>"Ofis Programları","aktif"=>true),
    array("Kategori_adi"=>"Mobil Uygulama","aktif"=>true),
    array("Kategori_adi"=>"Web Geliştirme","aktif"=>true),
    array("Kategori_adi"=>"Veri Analizi","aktif"=>true)
);
//alfabetik sıralama
sort($kategoriler);
$kurslar=array(
"1"=>array(
    "baslik"=>"Php kursu",
    "altbaslik"=>"Sıfırdan ileri php programlama",
    "resim"=>"1.jpg",
    "yayınTarihi"=>"01.01.2023",
    "yorum"=>0,
    "begeni"=>10,
    "onay"=>true
),
"2"=>array(
    "baslik"=>"python kursu",
    "altbaslik"=>"Sıfırdan ileri python programlama",
    "resim"=>"2.jpg",
    "yayınTarihi"=>"03.03.2023",
    "yorum"=>10,
    "begeni"=>0,
    "onay"=>true
),
"3"=>array(
    "baslik"=>"Node.js kursu",
    "altbaslik"=>"Sıfırdan ileri Node.js programlama",
    "resim"=>"3.jpg",
    "yayınTarihi"=>"05.05.2023",
    "yorum"=>10,
    "begeni"=>20,
    "onay"=>true
)


);
$yenifilm=array(
    "baslik"=>"Django kursu",
    "altbaslik"=>"Sıfırdan ileri Django programlama",
    "resim"=>"3.jpg",
    "yayınTarihi"=>"02.02.2023",
    "yorum"=>0,
    "begeni"=>0,
    "onay"=>true
);
$kurslar["4"]=$yenifilm;
?>