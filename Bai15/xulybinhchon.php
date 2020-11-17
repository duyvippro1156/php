<?php ob_start();
require_once("connect.php");
$idPA=$_GET["idPA"];
$qr1="update binhchon set SoLanChon = SoLanChon+1 where idBC=1";
$qr="update phuongan set SoLanChon = SoLanChon+1 where idBC=1 and idPA=$idPA";

if(mysql_query($qr1) && mysql_query($qr))
header('location:ketquabinhchon.php');
else echo "That bai!";
?>
