<?php
header('Content-Type: text/html; charset=utf8');
session_start();

$link = mysql_connect("localhost", "root", "0124097");

mysql_select_db("taiwanfood", $link)  or die("mysql_select_db() cant connect");

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET_CLIENT='utf8'");
mysql_query("SET CHARACTER_SET_RESULTS='utf8'");


$ac = $_POST['ac'];
$pw = $_POST['pw'];

$result = mysql_query("SELECT * FROM fadvisor WHERE account='$ac' AND password='$pw'", $link);

$fdnum = mysql_num_fields($result);
$count = 0;

while( $row = mysql_fetch_array($result))  
{ 
		echo("<script>alert('歡迎光臨，".$row[name]."。');</script>");
		$_SESSION['username'] = $row[account];
		$count =  $count+1;

		echo "<script Language='JavaScript'>";
		echo "location.href='qqq.php'";
		echo "</script>";
}

if($count == 0)
{
echo "<script> alert('帳號或密碼錯誤') </script>";

echo "<script Language='JavaScript'>";
echo "location.href='login.html'";
echo "</script>";
}

?>