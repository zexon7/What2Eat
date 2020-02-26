<?php 
	header("charset=utf-8");
	include("conMysql.php");
	$seldb = @mysql_select_db("what2eat");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = 'SELECT rNo,rName,rAddr,rType,rPrice,rFeature,ROUND(AVG(tRating),1) FROM restaurants,ratings WHERE rNo=tNo GROUP BY rNo';
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
	$vege = 'SELECT rNo,rName,rAddr,rType,rPrice,rFeature,ROUND(AVG(vRating),1) FROM restaurants_v,vratings WHERE rNo=vNo GROUP BY rNo';
	$result_v = mysql_query($vege);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>給予餐廳評價</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.png"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<style>
		body{
			text-align: center;
			font-family: "Oswald";
			padding-top:50px;
		}
		tr,td{
			text-align: center;
			font-family: "Oswald";
		}
	</style>

</head>

<header>
	<div class="w3-top">
		<div class="w3-bar w3-black w3-card w3-hide-small">
			<a href="index.php" class="w3-bar-item w3-button w3-large w3-hover-amber" style="color:white"><i class="fa fa-home"></i> 主頁</a>

			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large"></div>
			<div class="w3-bar-item w3-large">What 2 Eat</div>

		</div>
	</div>

</header>

<body style="background-color: #E4F1F6">
	<div class="w3-container">
	<h1 align="center"><b>給予餐廳評價</b></h1>
	
	<table class="w3-table w3-xlarge w3-centered w3-border-black" border="1" align="center">
  		<!-- 表格表頭 -->
  		<tr class="w3-black">
    	<th>店名</th>
    	<th>特色</th>
    	<th>評價</th>
    	<th>點評</th>
  		</tr>
  		<!-- 資料內容 -->
  	<?php
		while($row=mysql_fetch_assoc($result)){
			echo "<td>".$row["rName"]."</td>";
			echo "<td>".$row["rFeature"]."</td>";
			echo "<td>".$row["ROUND(AVG(tRating),1)"]."</td>";
			echo "<td><a href='giverating.php?id=".$row["rNo"]."' class='w3-button w3-round-xlarge w3-large w3-amber w3-hover-red'><b>點評</b></a></td></tr> ";
			}
		while($row_v=mysql_fetch_assoc($result_v)){
			echo "<td>".$row_v["rName"]."</td>";
			echo "<td>".$row_v["rFeature"]."</td>";
			echo "<td>".$row_v["ROUND(AVG(vRating),1)"]."</td>";
			echo "<td><a href='giverating_v.php?id=".$row_v["rNo"]."' class='w3-button w3-round-xlarge w3-large w3-green w3-text-black w3-hover-red'><b>點評</b></a></td></tr> ";
			}	
	?>
	</table>
	</div>

</body>

</html>