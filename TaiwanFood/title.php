<html >
<head>
    <meta charset="UTF-8">
    <title>台灣地瓜球</title>

	 <style>
	 *{ margin:0; padding:0;}
 #maskLayer{ width:100%; height:100%; background-color:#000000; opacity:0.8; -moz-opacity:0.8; filter:alpha(opacity=50);}

      html, body {
        height: 100%;
        width : 100%;
        padding: 0px
      }

      #map-canvas{
		height: 100%;
        width : 100%;
        padding: 0px;
        margin: 0px auto;
      	
      }

    #box{
        height: 500px;
        width : 700px;
        float : left;
        margin-right: 10px;
    }

   a{
    color:white;
   }

    #test{
      width : 1050px;
    }

    #list{
      text-align: left;
      float : right;

    }

    #flist{
      padding-top: 5px;
      padding-bottom: 5px;
    }

    #slist{
      text-align: left;
      float : right;
    }


    #one{
      background-color: #d3d3d3;    
      padding-top: 10px;
      padding-bottom: 10px; 
      padding-left: 20px;
    }

    #two{
      background-color: #f0f8ff;
      padding-top: 10px;
      padding-bottom: 10px; 
      padding-left: 20px;
    }

  
    </style>

</head>
<body >
<?php
session_start();
header('Content-Type: text/html; charset=utf8');

$link = mysql_connect("localhost", "root", "0124097");

mysql_select_db("taiwanfood", $link)  or die("mysql_select_db() cant connect");

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET_CLIENT='utf8'");
mysql_query("SET CHARACTER_SET_RESULTS='utf8'");


if($_SESSION['username'] != null)
{
    $ac = $_SESSION['username'];
    $result = mysql_query("SELECT * FROM FAdvisor WHERE account='$ac'", $link);
    while( $row = mysql_fetch_array($result))  
    { 
        echo "  <div style=\"float:right; text-align:right \"><font size=\"4\">".$row[name]."</font>";
        echo "  <a href=\"DataManage.php\" >&nbsp&nbsp資料管理&nbsp&nbsp</a>";
        echo "  <a href=\"logout.php\" >登出</a></div>";
    }
}
else
{
          echo "<div style=\"float:right; text-align:right\"><a href=\"Login.html\" style=\"color:white;\">登入</a></font></div>";
}





?>