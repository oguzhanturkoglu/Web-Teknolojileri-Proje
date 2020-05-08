<?php

$kullaniciAdi = "b191210010@sakarya.edu.tr";
$sifre="123";
$ifade="Hoşgeldiniz $kullaniciAdi";
$ifade1="Girdiğiniz bilgileri kontrol ediniz!";
if($_POST['username']==$kullaniciAdi && ($_POST['password'])==$sifre)
{
	echo $ifade;
}
else
{
	echo $ifade1;
	header("Location:girisyap.html");
}
?>