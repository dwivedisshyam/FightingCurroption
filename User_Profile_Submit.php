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

$query = "update user_info set f_name='".$ar[0]."', l_name='".$ar[1]."', phone='".$ar[2]."' ,city='".$ar[3]."' where uid=".$uid;
echo $query;
$st=mysql_query($query);
if($st){
 echo "ok";
}
else{
echo mysql_error();
}
?>