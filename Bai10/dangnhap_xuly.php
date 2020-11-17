

<?php 
session_start();
ob_start();
include("connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
$sl="select * from user where Username='".$username."' and Pasword='".$password."'";
$kq=mysqli_query($connect,$sl);
$row=mysqli_fetch_array($kq);
if(mysqli_num_rows($kq)>0)
{ /*$d=mysql_fetch_array($kq);
echo "Chao ban ".$d['HoTen'];*/

$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['hoten']=$row['HoTen'];
echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='noidung.php';</script>";
}
else
{
echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='login.php';</script>";
}
?>