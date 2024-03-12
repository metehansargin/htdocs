<?php
const title="Popüler Kurslar";

$kategoriler=array("Programlama","Web Geliştirme","Veri Analizi","Ofis Programları");
//alfabetik sıralama
sort($kategoriler);
$kurslar=array(
"1"=>array(
    "baslik"=>"Php kursu",
    "altbaslik"=>"Sıfırdan ileri php programlama",
    "resim"=>"1.jpg",
    "yayınTarihi"=>"01.01.2023",
    "yorum"=>"100",
    "begeni"=>"300"
),
"2"=>array(
    "baslik"=>"python kursu",
    "altbaslik"=>"Sıfırdan ileri python programlama",
    "resim"=>"2.jpg",
    "yayınTarihi"=>"03.03.2023",
    "yorum"=>"200",
    "begeni"=>"400"
),
"3"=>array(
    "baslik"=>"Node.js kursu",
    "altbaslik"=>"Sıfırdan ileri Node.js programlama",
    "resim"=>"3.jpg",
    "yayınTarihi"=>"05.05.2023",
    "yorum"=>"300",
    "begeni"=>"300"
)


);
$yenifilm=array(
    "baslik"=>"Django kursu",
    "altbaslik"=>"Sıfırdan ileri Django programlama",
    "resim"=>"3.jpg",
    "yayınTarihi"=>"02.02.2023",
    "yorum"=>"100",
    "begeni"=>"100"
);
$kurslar["4"]=$yenifilm;


$kurs1_baslik="Php kursu";
$kurs1_altbaslik="Sıfırdan ileri php programlama";
$kurs1_resim="1.jpg";
$kurs1_yayinTarihi="01.01.2023";
$kurs1_yorum="100";
$kurs1_begeni="300";

$kurs2_baslik="python kursu";
$kurs2_altbaslik="Sıfırdan ileri pyhton programlama";
$kurs2_resim="2.jpg";
$kurs2_yayinTarihi="03.03.2023";
$kurs2_yorum="200";
$kurs2_begeni="400";

$kurs3_baslik="Node.js kursu";
$kurs3_altbaslik="Sıfırdan ileri Node.js programlama";
$kurs3_resim="IMG_3560.jpg";
$kurs3_yayinTarihi="05.05.2023";
$kurs3_yorum="300";
$kurs3_begeni="300";
$kurs1_altbaslik=ucfirst(strtolower($kurslar["1"]["altbaslik"]));
$kurs2_altbaslik=ucfirst(strtolower($kurslar["2"]["altbaslik"]));
$kurs3_altbaslik=ucfirst(strtolower($kurslar["3"]["altbaslik"]));

$kurs1_altbaslik=substr($kurs1_altbaslik,0,30)."...";
$kurs2_altbaslik=substr($kurs2_altbaslik,0,30)."...";
$kurs3_altbaslik=substr($kurs3_altbaslik,0,30)."...";

$kurs1_url=str_replace([" ",""],["-"],strtolower($kurslar["1"]["baslik"]));
$kurs2_url=str_replace([" ",""],["-"],strtolower($kurslar["2"]["baslik"]));
$kurs3_url=str_replace([" ",""],["-"],strtolower($kurslar["3"]["baslik"]));
?>

<!DOCTYPE htmre
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container my-3">

    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    <?php echo $kategoriler[0];?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[1];?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[2];?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[3];?>
                </a>
            </div>
        </div>
        <div class="col-9">
             <h1><?php echo title;?></h1>
                     <p class="lead">
                        <?php echo count($kategoriler);?> Kategoride <?php echo count($kurslar);?> Kurs listelenmiştir    
                     </p>

            <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["1"]["resim"] ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurslar["1"]["baslik"] ;?><h5>
                            <a href="<?php echo $kurs1_url;?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurslar["1"]["altbaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["1"]["begeni"] ;?>
                         </span>
                         <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["1"]["yorum"] ;?>
                                
                            </span>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["2"]["resim"] ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurslar["2"]["baslik"] ;?><h5>
                            <a href="<?php echo $kurs1_url;?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurslar["2"]["altbaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["2"]["begeni"] ;?>
                         </span>
                         <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["2"]["yorum"] ;?>
                                
                            </span>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["3"]["resim"] ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurslar["3"]["baslik"] ;?><h5>
                            <a href="<?php echo $kurs1_url;?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurslar["3"]["altbaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["3"]["begeni"] ;?>
                         </span>
                         <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["3"]["yorum"] ;?>
                                
                            </span>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["4"]["resim"] ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurslar["4"]["baslik"] ;?><h5>
                            <a href="<?php echo $kurs1_url;?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurslar["4"]["altbaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["4"]["begeni"] ;?>
                         </span>
                         <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurslar["4"]["yorum"] ;?>
                                
                            </span>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
</body>
</html>