<?php
                session_start();
                if(!isset($_SESSION["username"]))
			 	  {
				  header('Location:User_Login.php');
                 }
                 else{
                   $unm=$_SESSION["username"];
                   $uid=$_SESSION["uid"];
                 }
                 ?>
<?php
$str=$_POST["dt"];
$ar=explode(",",$str);
include("Connection.php");
date_default_timezone_set("Asia/Kolkata");

$query = "insert into report (uid, discreption, pid, date, time) values(".$uid.",'".$ar[1]."',".$ar[0].",'".date("d/m/y")."','".date("h:i:sa")."')";
echo $query;
$st=mysql_query($query);
if($st){
 //header("Location:User_Login.php");
 echo "ok";
}
else{
echo mysql_error();
}
?>