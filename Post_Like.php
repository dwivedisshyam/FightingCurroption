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
$id=$_GET["id"];
include("Connection.php");
$query ="select like_status from post where pid=".$id;
$rs=mysql_query($query);
$rw=mysql_fetch_array($rs);
$i=0;
if($rw){
$rw[0]=$rw[0]+1;

$query ="update post set like_status=".$rw[0]." where pid=".$id;
}
$st=mysql_query($query);
if($st){
//echo $query;
header("Location:Show_Post.php");
}
else{
echo mysql_error();
}
?>