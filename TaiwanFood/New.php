<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		td{
			text-align: center;
			font-size: 25px;
			padding-top: 15px;   padding-bottom: 15px;    padding-left: 5px; padding-right: 5px;"
		}
		#input{
			font-size: 20px;
			padding:10px;
		}
	</style>
</head>
<body>
	</br>
  <div align="center">
    <div id="test">
      <div id="title">
        <?php
           include("title.php");
        ?>
      </div>

  </br></br></br>
    <div>
      <?php

		$max = 0;

		$result = mysql_query("SELECT MAX(FId) AS biggest FROM food", $link);

		while( $row = mysql_fetch_array($result)) 
		{
			$max = $row[biggest] + 1;
		}
		?>

	<table border="0" width="600" cellspacing="0" >
	<form action="Savedata.php?id=1" method="post">
	<tr><td>編號</td><td></td><td><input id="input" type="test" name="input_FId" value = "<?php echo $max; ?>"></td></tr>
	<tr><td>縣市</td><td></td><td><input id="input" type="test" name="input_City"></td></tr>
	<tr><td>分區</td><td></td><td><input id="input" type="test" name="input_Region" ></td></tr>
	<tr><td>名稱</td><td></td><td><input id="input" type="test" name="input_FName" ></td></tr>
	<tr><td>地址</td><td></td><td><input id="input" type="test" name="input_FAddr" ></td></tr>
	<tr><td>類別</td><td></td><td><input id="input" type="test" name="input_FClass" ></td></tr>
	<tr><td>網頁連結</td><td></td><td><input id="input" type="test\" name="input_Link" ></td></tr>
	<tr><td></td>
		<td><input type="submit" value="新增" style="font-size:22px; float:center; width:100px"></td>
		<td><input type="button" value="取消" onClick="history.go(-1)" style="font-size:22px; float:center; width:100px"></td>
	</tr>
	</form>

    </div>


  </div>
</div>
</body>
</html>































