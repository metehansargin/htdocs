<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Rectangle</title>
    <style>
        .blue-rectangle {
            background-color: #0000FF;
            padding: 25px;
            text-align: center;
            box-sizing: border-box;
        }
        body{
            background-color: #C0C0C0;
        }
        .header{
            width:300px;
            height:300px;
            padding:5px;
            color:#000;
            text-align:justify;
            position: absolute;
            left: 20px;
            top: -4px;
        }
        #kutu {
            width:600px;
            height:600px;
            padding:5px;
            color:#000;
            text-align:justify;
            position: absolute;
            left: 20px;
            margin: 250px 0;
        }
        #kutu2 {
            width:200px;
            height:100px;
            padding:5px;
            color:#000;
            text-align:justify;
            position: absolute;
            right: 60px;
            margin: 100px 0;
        }
        #buton{
            width:200px;
            height:100px;
            padding:20px;
            color:#000;
            text-align:justify;
            position: absolute;
            right: 100px;
            top: 10px;
            margin: 500px 0;
        }
    </style>
</head>
<body>
    <div class="blue-rectangle" class="col-12">
        
    <form align="right" method="POST">
        <h1></h1>
    <form id="form1" name="form1" method="POST" >
    <input height=""  type="text" name="metehan" id="">
    <input type="password" name="sargın" id="">
    <button  type="sumbit">Log In</button>
    </form>
    </form>
    </div>
    <div class="header">
    <h2 align="left">Cirsus Analysis</h2>
    <h3 align="left">Sumbit log in </h3>
    </div>

    

    <div class="left-content" id="kutu">
        Hello...Welcome to Circuit Analysis Platform... 
        This platform serves tha wdjawdjköa mnsmdneıeıgknnmsfnsdmöfnwenfjnjajd
        awdawdawdaw <pre></pre>
        The ajwdnjawkdnjwaw dawkna awndjawnd awndjawndj awndjawnd jawndjawa
        ajwndjawndjaw <pre></pre>
        This platform serves tha wdjawdjköa mnsmdneıeıgknnmsfnsdmöfnwenfjnjajd
        awdawdawdaw <pre></pre>
        The ajwdnjawkdnjwaw dawkna awndjawnd awndjawndj awndjawnd jawndjawa
        ajwndjawndjaw <pre></pre>

    </div>
    <div class="right-content" id="kutu2">
        <h1>Sign Up</h1>
        <h2>its quick and easy</h2>
    </div>
    <div class="" id="buton">
    <input height="" type="text" name="" id="" size="40px"><pre></pre>
    <input height="" width="10px" type="text" name="" id="" size="40px"><pre></pre>
    <input height="" type="text" name="" id="" size="40px"><pre></pre>
    <input height="" type="text" name="" id="" size="40px"><pre></pre>
    <br></br>
    <button  type="sumbit"  >Log In</button>

    </div>
    
    
</body>


<?php
/*
$baglanti = new mysqli("localhost", "root", "", "veritaban");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

$sorgu = $baglanti->query("SELECT * FROM email");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

$cikti = $sorgu->fetch_array();

echo "Adı: " . $cikti["email"] . "<br /> " . $cikti["password"] . "<br />  " . $cikti["job"];

$sorgu->close();
$baglanti->close();
*/


$connect=mysqli_connect("localhost","root","","veritaban");
if (!$connect) {
    echo "baglanmadı";
}
else{
echo "baglandi";
}
$quer="select * from email";

$sonuc=mysqli_query($connect,$quer);
$checkM="";
$checkM=@$_POST["metehan"];
$checkP="";
$checkP=@$_POST["sargın"];


while($row=mysqli_fetch_array($sonuc)){
    if($checkM==$row["email"]&&$checkP==$row["password"]){
        header("Location:yeni1.php");
    }
    else{

    }
echo "</br>";
echo $row["email"]." ".$row["password"]." ".$row["job"];
echo "<br>"."email:".$row["email"];
}

mysqli_close($connect);
?>