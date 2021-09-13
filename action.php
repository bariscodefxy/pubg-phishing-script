<?php

//error_reporting(0);

if(!$_POST || !$_POST['email'] || !$_POST['password'] || !$_POST['hesap_turu']) 
{
  header('Location:/index.php?notice=EKSIK_BILGI');
  return;
}
$dosya = fopen('kullanicilar.txt', 'a');
$email = $_POST['email'];
$password = $_POST['password'];
$hesapturu = $_POST['hesap_turu'];
$write = "
Eposta => {$email},
Şifre  => {$password},
Hesap Türü => {$hesapturu}
";
fwrite($dosya, $write);
fclose($dosya);
header('location:/index.php?notice=success');

?>