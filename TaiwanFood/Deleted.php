<?php

include("title.php");

if($_GET["edit"]=='1')
{
$b = $_GET["pdid"];

$del ="DELETE FROM product WHERE pdid=\"".$b."\"";
//$del ="Select * FROM member WHERE userID=\"".$b."\"";

if(mysql_query($del))
	echo "new successful!!";
else
	echo "try again!!";

mysql_close($link);
}

else if ($_GET["edit"] == '2')
{

$b = $_GET["id"];
echo "Are you sure delete ".$b." ??<br>";
//echo "Are you sure delete ".$_GET[id]." ??<br>";


$del = "DELETE FROM food WHERE FId=\"".$b."\"";
//$del ="Select * FROM member WHERE userID=\"".$b."\"";

if(mysql_query($del))
	echo "new successful!!";
else
	echo "try again!!";

mysql_close($link);

//echo "edit=2";
}
header("location:DataManage.php");

?>