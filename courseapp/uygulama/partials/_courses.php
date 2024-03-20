<?php foreach($kurslar as $key=>$kurs): ?>
        <?php  if($kurs["onay"]):?>

        <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurs["resim"] ;?>" alt=""  class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs["baslik"] ;?><h5>
                            <a href="<?php urlDuzenle($kurs["baslik"]);?>">
                            <?php echo $kurs1_altbaslik;?>
                        </a>

                        <p class="card-text">
                            <?php echo kisaAcıklama($kurs["altbaslik"]); ?>
                                
                        </p>
                        <p>
                            <?php if($kurs["begeni"]>0): ?>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs["begeni"] ;?>
                    
                        </span>
                        <?php else:?>
                                    <span class="badge rounded-pill text-bg-warning">
                            ilk defa sen beğen 
                                
                            </span>  
                        <?php endif?>
                        <?php if($kurs["yorum"]>0): ?>
                        <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs["yorum"] ;?>
                                
                            </span>
                            <?php else:?>
                                <span class="badge rounded-pill text-bg-warning">
                            ilk yorumu sen yap
                                
                            </span> 
                            <?php endif?>
                        </p>
                    
                    </div>
                </div>
                </div>
            </div>
        <?php endif?>
        <?php endforeach?>