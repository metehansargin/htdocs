<?php
const title="Popüler Kurslar";
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
$kurs1_altbaslik=ucfirst(strtolower($kurs1_altbaslik));
$kurs2_altbaslik=ucfirst(strtolower($kurs2_altbaslik));
$kurs3_altbaslik=ucfirst(strtolower($kurs3_altbaslik));

$kurs1_altbaslik=substr($kurs1_altbaslik,0,30)."...";
$kurs2_altbaslik=substr($kurs2_altbaslik,0,30)."...";
$kurs3_altbaslik=substr($kurs3_altbaslik,0,30)."...";

$kurs1_url=str_replace([" ",""],["-"],strtolower($kurs1_altbaslik));
$kurs2_url=str_replace([" ",""],["-"],strtolower($kurs2_altbaslik));
$kurs3_url=str_replace([" ",""],["-"],strtolower($kurs3_altbaslik));
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
        <h1><?php echo title;?></h1>
            <div class="card mb-3">
                <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik ;?><h5>
                            <a href="<?php echo $kurs1_url;?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurs1_altbaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs1_begeni ;?>
                         </span>
                         <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs1_yorum ;?>
                                
                            </span>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs2_baslik;?></h5>
                        <a href="<?php echo $kurs2_url;?>">
                            <?php echo $kurs2_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurs2_altbaslik;?></p>
                    <p>
                    <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs2_begeni ;?>
                            </span>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs2_yorum;?>
                            </span>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs3_baslik;?></h5>
                        <a href="<?php echo $kurs3_url;?>">
                            <?php echo $kurs3_altbaslik;?>
                        </a>
                        <p class="card-text"><?php echo $kurs3_altbaslik;?></p>
                        <p>
                        <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs3_begeni ;?>
                            </span>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs3_yorum;?>
                            </span>
                        </p>
                    </div>
                </div>
                </div>
            </div>
    </div>
</body>
</html>