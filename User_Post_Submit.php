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

$query = "insert into post (text, date, time, like_status, solve_status, uid, solved) values('".$ar[0]."','".date("d/m/y")."','".date("h:i:sa")."',0,0,".$uid.",0)";
echo $query;
$st=mysql_query($query);
if($st){
 //header("Location:User_Login.php");
 echo "ok";
}
else{
echo mysql_error();
}
if($ar[2]){
$query = "select max(pid) from post";
$rs=mysql_query($query);
$rw=mysql_fetch_array($rs);
if($rw[0])
{
$pid=$rw[0];
}
$query = "insert into post_video (pid,vid_path ) values(".$pid.",'".$ar[2]."')";
echo $query;
$st=mysql_query($query);
}
?>