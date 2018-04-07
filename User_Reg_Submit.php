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
$query = "insert into user_info (username,pswd,f_name,l_name,gender,dob,email,phone,created_on,updated_on,active,blocked,photo,city,country) values('".$ar[0]."','".$ar[1]."','".$ar[2]."','".$ar[3]."','".$ar[4]."','".$ar[5]."','".$ar[6]."','".$ar[7]."','".date("d/m/y")."','".date("d/m/y")."',1,0,'".$ar[8]."','".$ar[9]."','".$ar[10]."')";
$st=mysql_query($query);
if($st){
 //header("Location:User_Login.php");
 echo "ok";
}
else{
echo mysql_error();
}
?>