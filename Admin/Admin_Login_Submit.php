
<?php
$str=$_POST["dt"];
$ar=explode(",",$str);
include("Connection.php");
$query = "select Ad_Name from admin_login where Ad_Name='".$ar[0]."' and password='".$ar[1]."'";
$rs=mysql_query($query);
$rw=mysql_fetch_array($rs);
if($rw[0])
{
session_start();
$_SESSION["username"]=$rw[0];
echo "ok";
}
else{
echo "wrong";
}
?>