<?php
	header("charset=utf-8");
	include("conMysql.php");
	$seldb = @mysql_select_db("what2eat");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = 'SELECT * FROM `restaurants_v`';
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>今日推薦餐廳</title>
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

			<div class="w3-dropdown-hover w3-large w3-hover-amber" style="color:white">
				<button class="w3-button w3-black w3-hover-amber"  style="color:white"><i class="fa fa-bars"></i> 菜單</button>
				<div class="w3-dropdown-content w3-bar-block w3-black w3-card-4">	
					<a href="draw_v.php" class="w3-bar-item w3-button w3-hover-amber"><i class="fas fa-child"></i> 抽取素食餐廳</a>
					<a href="alldata.php" class="w3-bar-item w3-button w3-hover-amber"><i class="fas fa-search"></i> 查看所有餐廳</a>
					<a href="data_v_show.php" class="w3-bar-item w3-button w3-hover-amber"><i class="fas fa-search-plus"></i> 查看素食餐廳</a>	
				</div>
			</div>

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

<body style="background: #E4F1F6;">
	<div class="w3-container">
	<h1 align="center"><b>今日推薦餐廳</b></h1>

	<table class="w3-table w3-xlarge w3-centered w3-border-black" border="1" align="center">
		<span class="w3-left w3-tag w3-xxlarge w3-padding w3-text-black w3-green w3-animate-left" style="transform:rotate(-5deg)">RECOMMENDED TODAY</span>
	<?php
		$draw=rand(1,$total_records);
		while($row=mysql_fetch_assoc($result)){
			if($row["rNo"]==$draw){
				echo "<tr><td class='w3-black w3-text-white'>店名</td><td class='w3-green w3-text-black'>".$row["rName"]."</td></tr>";
				echo "<tr><td class='w3-black w3-text-white'>地址</td><td class='w3-green w3-text-black'>".$row["rAddr"]."</td></tr>";
				echo "<tr><td class='w3-black w3-text-white'>葷/素</td><td class='w3-green w3-text-black'>".$row["rType"]."</td></tr>";
				echo "<tr><td class='w3-black w3-text-white'>價位</td><td class='w3-green w3-text-black'>".$row["rPrice"]."</td></tr>";
				echo "<tr><td class='w3-black w3-text-white'>特色</td><td class='w3-green w3-text-black'>".$row["rFeature"]."</td></tr>";
				echo "<tr><td class='w3-black w3-text-white'>評價</td><td class='w3-green w3-text-black'>".$row["rRating"]."</td></tr>";
			}
		}
	?>
	</table>

	<br>
	<p>
	<a href="draw_v.php" class="w3-button w3-circle w3-xlarge w3-text-white w3-black w3-hover-text-black w3-hover-green" style="height:120;width:120;padding:37px;">重抽</a>
	</p>
	</div>

</body>
</html>