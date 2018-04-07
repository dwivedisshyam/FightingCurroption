<?php
$cn=mysql_connect("localhost","root","");
if(!$cn)
{
echo "Hey Ramkant Fail To Connect";
}
else
{
mysql_select_db("fighting_corruption",$cn);
}
?>