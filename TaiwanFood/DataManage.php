<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="countyWeb.css"></link>
  <link type="text/css" rel="stylesheet" href="food.css"></link>
  <title>Document</title>
  <style>
  th{
    padding-top: 8px;   padding-bottom: 8px;    padding-left: 5px; padding-right: 5px;
    font-size: 20px;
  }
  </style>
</head>
<body style="background:rgb(190,190,190);margin:0px">

  <div id="wrap">
    <div id="Btop">
      <table border="0" style="width:100%">
        <tr>
          <td style="width:35%"><br/></td>
          
          <td style="width:25%"></td>
          <td style="width:25% color:white;"><font color="white" size="4">
            <?php
            include("title.php");
            ?>
          </font></td>
          <td style="width:15%"><br/></td>
        </tr>
      </table>
    </div>
  </div>

  <div align="center">
    <div id="test">
      

  </br></br></br>
    <div style="text-align:center; ">
      <?php
      if(is_array($_GET)&&count($_GET)>0)
      {
            if(isset($_GET["page"]))
            {
                $page = $_GET["page"];
            }
            else
            {
                $page = 1;
            } 
      }
      else
      {
        $page = 1;
      }

      $result = mysql_query("SELECT count(*) FROM food", $link);
      while( $row = mysql_fetch_array($result)) 
      {
          $fcount = $row[0];
          $maxpage = ceil($fcount / 10) ;
      }

      $min = 10 * ($page -1) + 1;
      $max = 10 * $page;
      ?>
      <table border="0" width="1000" cellspacing="0">
            <tr>
              <td style="text-align:center;"><?php echo '第'.$page.'頁'; ?></td>
            </tr>
      </table>
      
      <?php

      $result = mysql_query("SELECT * FROM food WHERE FId >= $min AND FId <= $max", $link);
      $fdnum = mysql_num_fields($result);
      ?>
      <div>
          <table border="0" width="1000" cellspacing="0">
              <tr><td style="width:25%"></td>
              <td style="width:25%">
                <?php 
                if($page > 1)
                {
                ?>
                <a href='DataManage.php?page=<?php echo $page - 1;?>' style="color:black;">上一頁</a>
                <?php          } ?>
               </td>
              <td style="width:25%">
                <?php
                if($page < $maxpage)
                {
                ?>
                <a href='DataManage.php?page=<?php echo $page + 1;?>' style="color:black;">下一頁</a>
                <?php          } ?>
              </td>
              <td style="width:25%"></td></tr>
          </table>

          <table border="0" width="1000" cellspacing="0">
            <tr>
              <td style="width:20%"></td>
              <td style="width:60%; text-align:center; ">
                <?php
                  for($i=1;$i<=$maxpage;$i++)
                  {
                    echo '<a href=\'DataManage.php?page='.$i.'\' style="padding-left: 10px; color:black; padding-right: 10px;"> '.$i.' </a>';
                  }
                ?>
              </td>
              <td style="width:20%"></td>
            </tr>
          </table>
      </div>
      <table border="0" width="1000" cellspacing="0" >
      <tr style="background-color: #778899;"><th width="45">編號</th><th width="45">縣市</th><th width="45">區域</th><th width="165">名稱</th><th width="275">地址</th><th width="45">類別</th><th width="310">網站連結</th><th width="40"></th><th width="40"></th></tr>
      <?php
      $co = 0;
      while( $row = mysql_fetch_array($result))  
      {  
        $co = $co + 1;
        if($co % 2 == 1)
          echo "<tr id=\"one\">";
        else
          echo "<tr id=\"two\">";
        
        for($i=0;$i<$fdnum;$i++)
        {
          ?>

          <td style="padding-top: 15px;   padding-bottom: 15px;    padding-left: 5px; padding-right: 5px;"><?php echo $row[$i] ;?></td>
           
          <?php
          if($i == $fdnum-1)
          {
            echo  "<td style=\"padding-top: 5px;   padding-bottom: 5px;    padding-left: 10px; padding-right: 10px;\"><a href=\"Modify.php?edit=1&FId=".$row[FId]."&City=".$row[City]."&Region=".$row[Region]."&FName=".$row[FName]."&FAddr=".$row[FAddr]."&FClass=".$row[FClass]."&Link=".$row[Link]."\" style=\"color:black;\"> 修改 </a></td>"; //&userID=".$row[userID]."
            echo  "<td style=\"padding-top: 5px;   padding-bottom: 5px;    padding-left: 10px; padding-right: 10px;\"><a href=\"#\" onclick=\"if(window.confirm('確定要刪除')) location.href='Deleted.php?edit=2&id=".$row[FId]."';\" style=\"color:black;\">刪除</a></td>";
          }
        } ?>

        </tr>
      <?php
      }  
      ?>

      </table>
      </br>

      <div align="center"><table border=0 width=300 >
        <form action="New.php?edit=2" method="post">
        <tr>
          <td><input type="submit" value="新   增" style="font-size:22px; float:center; width:100px"></td>
          <td></td>
          <td><input type="button" value="取   消" onClick="location.href='qqq.php'" style="font-size:22px; float:center; width:100px"></td>
        </tr>
        </form>
      </table></div>
  
    </div>
  </div>
</div>
   
</body>
</html>
