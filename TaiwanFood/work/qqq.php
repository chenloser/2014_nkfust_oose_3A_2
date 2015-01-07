<html>
<head>
	<meta charset="UTF-8">
	<title>美食地圖-???</title>
	<link type="text/css" rel="stylesheet" href="countyWeb.css"></link>
	<link type="text/css" rel="stylesheet" href="food.css"></link>
	<script type="text/javascript" src="objTrigger.js"></script>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<style type="text/css">
 		*{ margin:0; padding:0;}
 			#maskLayer{ width:100%; height:100%; background-color:#000000; opacity:0.8; -moz-opacity:0.8; filter:alpha(opacity=50);}
	</style>

	<?php
 
  header('Content-Type: text/html; charset=utf8');

  $link = mysql_connect("localhost", "root", "0124097");

  mysql_select_db("taiwanfood", $link)  or die("mysql_select_db() cant connect");

  mysql_query("SET NAMES 'utf8'");
  mysql_query("SET CHARACTER_SET_CLIENT='utf8'");
  mysql_query("SET CHARACTER_SET_RESULTS='utf8'");


  ?>



    

	<script>

      /*var home = new google.maps.LatLng(22.6606396,120.3142565);
      var hospital = new google.maps.LatLng(22.6590233,120.313645);
      var school = new google.maps.LatLng(22.754484,120.332831);*/
      var directionsService = new google.maps.DirectionsService();
      var end ;
      locationArray = [];
      NameArray = [];
      locate = [];
      fn = [];
      link = [];

      var cnt = 0;
      var test = '';

      




      <?php
        session_start();
      ?>   

      function getRegion()
      {
        <?php
        if(is_array($_GET)&&count($_GET)>0)
        {
            if(isset($_GET["City"]))
            {
                $city = $_GET["City"];
                $_SESSION['City'] = $city;
            }
            else
            {
                $city = $_SESSION['City'];
            } 


            if(isset($_GET["region"]))
            {
                $region = $_GET["region"];
                $_SESSION['region'] = $region;
            }
            else
            {
                $region = $_SESSION['region'];
            } 

        }
        else
        {
                  $city = $_SESSION['City'] ;
                  $region = $_SESSION['reg'];   
                
        }
        ?>      
      }



      function getStart()
      {
      <?php
        if(is_array($_POST)&&count($_POST)>0)
        {
            if(isset($_POST["localstart"]))
            {
                  $_SESSION['START'] = $_POST["localstart"];
            }
            
        }
        

        if($_SESSION['START'] != null)
        {
            $start = $_SESSION['START'];
        }
        else
        {
          $result = mysql_query("SELECT * FROM region WHERE Rid='$region' and Cid ='$city'", $link);
          while( $row = mysql_fetch_array($result))
          {
            $start = $row[local];

          }
           //$start = '高雄市左營區大中一路502號';
        }
      ?>
      }


      <?php
        $addr_latlng_array2 = array();
        //$start = '高雄市左營區大中一路502號';

        $addr_str = $start;
        $addr_str_encode = urlencode($addr_str);
        $url = "http://maps.googleapis.com/maps/api/geocode/json"
            ."?sensor=true&language=zh-TW&region=tw&address=".$addr_str_encode;
        $geo = file_get_contents($url);
        $geo = json_decode($geo,true);
        $geo_status = $geo['status'];
    //echo "$addr_str $geo_status\n";
        if($geo_status=="OVER_QUERY_LIMIT"){ die("OVER_QUERY_LIMIT"); }
        if($geo_status!="OK") continue;
        
     
        $geo_address = $geo['results'][0]['formatted_address'];
        $num_components = count($geo['results'][0]['address_components']);
    //郵遞區號、經緯度
        $geo_zip = $geo['results'][0]['address_components'][$num_components-1]['long_name'];
        $geo_lat = $geo['results'][0]['geometry']['location']['lat'];
        $geo_lng = $geo['results'][0]['geometry']['location']['lng'];
        $geo_location_type = $geo['results'][0]['geometry']['location_type'];

 
        $addr_latlng_array2[0] = $geo_lat.','.$geo_lng;

        ?>

        var start = new google.maps.LatLng(<?php echo $addr_latlng_array2[0];?>);



     <?php
        $addr_latlng_array = array();
        $i = 0;

        foreach($_POST['checkbox'] as $val){

        $result = mysql_query("SELECT * FROM food WHERE FId='$val'", $link);
        while( $row = mysql_fetch_array($result))  
        {
            $val = $row[FAddr];
            $fname = $row[FName];
            $flink = $row[Link];
        }


        $addr_str = $val;
        $addr_str_encode = urlencode($addr_str);
        $url = "http://maps.googleapis.com/maps/api/geocode/json"
            ."?sensor=true&language=zh-TW&region=tw&address=".$addr_str_encode;
        $geo = file_get_contents($url);
        $geo = json_decode($geo,true);
        $geo_status = $geo['status'];
    //echo "$addr_str $geo_status\n";
        if($geo_status=="OVER_QUERY_LIMIT"){ die("OVER_QUERY_LIMIT"); }
        if($geo_status!="OK") continue;
     
        $geo_address = $geo['results'][0]['formatted_address'];
        $num_components = count($geo['results'][0]['address_components']);
    //郵遞區號、經緯度
        $geo_zip = $geo['results'][0]['address_components'][$num_components-1]['long_name'];
        $geo_lat = $geo['results'][0]['geometry']['location']['lat'];
        $geo_lng = $geo['results'][0]['geometry']['location']['lng'];
        $geo_location_type = $geo['results'][0]['geometry']['location_type'];

 
        $addr_latlng_array[$i] = $geo_lat.','.$geo_lng;

    
        ?>
        /*locationArray.splice(cnt,0,<?php echo $addr_latlng_array[$i]; ?>);
        NameArray.splice(cnt,0,<?php echo "'".$val."'"; ?>);*/
        locate[cnt] = new google.maps.LatLng(<?php echo $addr_latlng_array[$i];?>);
        fn.push("<?php echo $fname; ?>");
        link.push("<?php echo $flink; ?>");
        locationArray.push(locate[cnt]);
        NameArray.push(fn[cnt]);

        cnt = cnt + 1;
        <?php

        $i = $i + 1;
        }
        ?>

        
        
        



   		function Marked() {

  			var mapOptions = {
    			zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
		    	center: start
  			}	

        var rendererOptions = {
                suppressMarkers: true
        };
 
        directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

      
  	   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

       
      var startlocate = new google.maps.Marker({
            position: start,
            map: map,
            title: "起點" });

      var coord;
        for (coord in locationArray) {
          new google.maps.Marker({
            position: locate[coord],
            map: map,
            title: NameArray[coord] });
        }

        directionsDisplay.setMap(map);

		}


    function BestPath() {
 
        var waypts = [];
        //經過地點
        for (c in locationArray)
        {
            waypts.push({
                        location: locationArray[c],
                        stopover: true
                });
        }

        end = locate[cnt-1];
        
        //規畫路徑請求
        var request = {
                origin: start,
                destination: end,
                waypoints: waypts,
                optimizeWaypoints: true,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
         
        directionsService.route(request, function(response, status) {
                //規畫路徑回傳結果
                if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                }
        });
	}


    

    </script>



</head>
<body style="background:rgb(190,190,190);margin:0px" onload="getRegion();getStart();Marked();BestPath();">
	<div id="wrap">
		<div id="Btop">
			<table border="0" style="width:100%">
				<tr>
					<td style="width:34%"><br/></td>
					<?php
						$result = mysql_query("SELECT * FROM region WHERE Rid='$region' and Cid ='$city'", $link);
          				while( $row = mysql_fetch_array($result))
          				{
            				$reg = $row[RName];
          				}
					?>
					<td style="width:33%"><span class="Ttext" >現在位置: </span><a class="nowP" href="index.html">台灣</a><span class="Ttext">&nbsp;>&nbsp;</span><a class="nowP" href="l.html">高雄市</a><span class="Ttext">&nbsp;>&nbsp;</span><a class="nowP" href="#"></a></td>
					<td style="width:18%">
						<?php
						include("title.php");
						?>
					</td>
					<td style="width:15%"><br/></td>
				</tr>
			</table>
		</div>
	</div>

	<div style="height:94.6%">
		<div id="Main_">
			<div id="Map_">
				<div id="maskLayer">
      				<div id="map-canvas"></div>
    			</div>
			</div>
			<div id="user_" >
				<div id="where_">
					<form action="qqq.php" method="post">
    				所在位置: <input type="test" name="localstart" >
    				<input type="submit" value="確定">
    				</form>
    				</br>
				</div>
				<div id="foodOption">
					<form  action="qqq.php" method="post">
    				<table border="0" cellspacing="0" width="200">
    				<tr><td><h2>地區美食</h2></td></tr>
    				<?php
    				$result = mysql_query("SELECT * FROM food WHERE City='$city' and Region = '$region'", $link);
    				while( $row = mysql_fetch_array($result))  
    				{
      				?>
       				<tr><td id="flist"><input  type="checkbox" name="checkbox[]" value=<?php echo $row[FId]; ?> /> <?php  echo $row[FName]; ?></td></tr>
    				<?php
    				}
    				?>
    				</table>
    				</br>
    				<input type="submit" name="Submit" style="font-size:22px; float:center; width:100px" value="確定">
    				</form>
				</div>
				<div id="result_">
					<table border="0" cellspacing="0" width="300">
    				<tr><td><h2>所選1清單：</h2></td></tr> 
  					<script language="JavaScript">


      				for (i=0; i<cnt; i=i+1)
      				{
          				var count = i+1;
          				if((count%2) == 1)
          				{
              				document.write("<tr><td id=\"one\"><a href=\""+link[i]+"\" target=\"_blank\">"+count+". "+fn[i] + "</a></td></tr>");
          				}
         				else
          				{
              				document.write("<tr><td id=\"two\"><a href=\""+link[i]+"\" target=\"_blank\">"+count+". "+fn[i] + "</a></td></tr>");
          				    
                  }

      				}
   					</script>
  					</table>

				</div>
			</div>
		</div>
	</div>
</body>
</html>