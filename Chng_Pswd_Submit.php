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
$query = "update user_info set pswd='".$ar[1]."'  where uid=".$uid;

$st=mysql_query($query);
if($st){
 echo "ok";
}
else{
echo mysql_error();
}
?>