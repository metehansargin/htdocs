
<?php
ob_start();
echo '<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <button type="submit" name="login">Log In</button>
    </form>
</body>
</html>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    header("Location: index.php");
    
}
echo '<a href="http://localhost/courseapp/ders%20uygulama/index.php">CİKİS YAP</a>';
unset($_COOKIE['kullanici']);
unset($_COOKIE['sifre']);
ob_end_flush();
?>