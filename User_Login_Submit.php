<?php
$str=$_POST["dt"];
$ar=explode(",",$str);
include("Connection.php");
$query = "select username,f_name,l_name,email,uid from user_info where email='".$ar[0]."' and pswd='".$ar[1]."'";
$rs=mysql_query($query);
$rw=mysql_fetch_array($rs);
if($rw[0])
{
session_start();
$_SESSION["username"]=$rw[0];
$_SESSION["f_name"]=$rw[1];
$_SESSION["l_name"]=$rw[2];
$_SESSION["email"]=$rw[3];
$_SESSION["uid"]=$rw[4];
echo "ok";
}
else{
echo "wrong";
}
?>