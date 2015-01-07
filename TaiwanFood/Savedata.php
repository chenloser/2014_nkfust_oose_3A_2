<?php

include("title.php");

if($_GET[id] == '2')
{
$a = $_POST['input_FId'];
$b = $_POST['input_City'];
$c = $_POST['input_Region'];
$d = $_POST['input_FName'];
$e = $_POST['input_FAddr'];
$f = $_POST['input_FClass'];
$g = $_POST['input_Link'];

$sql ="UPDATE  food SET City='$b',Region='$c',FName='$d',FAddr='$e',FClass='$f',Link='$g'  WHERE FId='$a'";

if(mysql_query($sql))
	echo "new successful!!";
else
	echo "try again!!";

mysql_close($link);
}


else if ($_GET[id] == '1')
{
$a = $_POST['input_FId'];
$b = $_POST['input_City'];
$c = $_POST['input_Region'];
$d = $_POST['input_FName'];
$e = $_POST['input_FAddr'];
$f = $_POST['input_FClass'];
$g = $_POST['input_Link'];

echo $a." ".$b." ".$c." ".$d." ".$e." ".$f." ".$g;
echo "<br>";
$insert = " INSERT INTO food(FId,City,Region,FName,FAddr,FClass,Link)value('$a','$b','$c','$d','$e','$f','$g') " or die(mysql_error());
if(mysql_query($insert))
	echo "new successful!!";
else
	echo "try again!!";

mysql_close($link); //關閉資料庫連結

}
header("location: DataManage.php");


?>