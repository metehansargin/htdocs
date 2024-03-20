<?php

$sayi1=10;
$sayi2=2;

$mezuniyet="lise";
$yas=18;

$username="MetehanSargın";
echo ++$sayi1;
echo"<br>";
echo $sayi1++;
echo "<br>";
echo--$sayi1;
echo"<br>";
echo $sayi1;

echo $sayi1+$sayi2;
echo"<br>";
echo $sayi1.=$sayi2; //a=a**b;

$ad="Metehan";
$soyad="Sargın";

echo $ad.=$soyad;

$sonuc=($username==="MetehanSargın");#hepsinin eşit olup olmadığına bakılır 
$sonuc=($sayi1!=$sayi2);
$sonuc=($sayi1<=>$sayi2);#biri diğerinden fazlaysa 1 eşitse 0 azsa -1 değer döndürür

echo $sonuc;
echo"<br>";
echo var_dump($sonuc);

/*    and operatörü
    f-f=f
    t-f=f
    t-t=t

*/

$sonuc=($yas==18)and ($mezuniyet=="lise"); 
/*
    or operatörü
    t-f=t
    t-t=t
    f-f=f
*/
$sonuc=($yas==18 or $yas==21)and ($mezuniyet=="lise"or $mezuniyet=="üniversite"); 

/*   xor operatörü
    t-f=t
    t-t=f
    f-f=f

*/
$sonuc=($yas==18) xor ($mezuniyet=="üniversite" and $ad="Metehan"); 

echo"<br>";
echo"<br>";
echo"<br>";

$a=10;
$b=20;
$c=5;
//1-)a,b çarpımı ile a,b,c toplamının farkı nedir ?
$sonuc=($a*$b)-($a+$b+$c);
echo $sonuc."<br>";
//2-) a,b,c toplamının mod 3 ü nedir?
$sonuc=($a+$b+$c)%3;
echo $sonuc."<br>";
//3-)b'nin c'ninci kuvveti ?
echo $b.=$c."<br>";
//4-)a için 50-100 arasında kontrolu yapınız
$sonuc=($a>50)and($a<100);
echo var_dump($sonuc)."<br>";
//5-)a için pozitif çift kontrolü yapınız
$sonuc=($a>0 and $a%2==0);
echo var_dump($sonuc)."<br>";
//6-)username ile password ile uygulama giriş kontrolu yapınız
$sonuc=($ad=="Metehan" and $soyad=="Sargın");
echo "Giriş Durumu.".$sonuc."<br>";
//7-)a,b,c için büyüklük kontrolü yapınız
$sonuc=($a>$b and $a>$c);
echo "a en büyük".$sonuc."<br>";
$sonuc=($b>$a and $b>$c);
echo " b en büyük".$sonuc."<br>";
$sonuc=($c>$a and $c>$b);
echo "c en büyük".$sonuc."<br>";
//8-) 2 vize (%60) ve final(%40)nota göre ortalama hesaplayınız 
       $vize1=60;
       $vize2=60;
       $final=70;

       $ortalama=((($vize1+$vize2)/2 )*0.6)+(70 *0.4);
       echo"ortalamanız".$sonuc."<br>";
       
//    a-eğer ort 50 üzeri ise geçti yazdırın
      $gecmeDurumu=($ortalama>=50);
       echo "gecme durumunuz".$gecmeDurumu."<br>";
//    b-geçmek için ort 50 olsa bile final notu en az 50 olmalıdır
       $gecmeDurumu2=($ortalama>=50 and $final>=50);
       echo "gecme durumu".(int)$gecmeDurumu2."<br>";
//    c-geçmek için finalden 70 aldığında ortalamanın bi önemi olmasın 
       $gecmeDurumu3=($final>=70);
       echo "gecme durumu".(int)$gecmeDurumu3."<br>";




?>