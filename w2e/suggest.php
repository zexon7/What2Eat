<?php 
	header("charset=utf-8");
	include("conMysql.php");
	$seldb = @mysql_select_db("what2eat");
	if (!$seldb) die("資料庫選擇失敗！");
?>

<html>
<head>
	<meta charset="utf-8">
	<title>所有素食餐廳</title>
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
		.button{
			font-size: 28px;
 			padding: 20px;
  			width: 200px;
  			transition: all 0.5s;
  			cursor: pointer;
  			margin: 5px;
		}
		.button span {
  			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}
		.button span:after {
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}
		.button:hover span {
  			padding-right: 25px;
		}
		.button:hover span:after {
  			opacity: 1;
  			right: 0;
		}

		.container {
  			position: relative;
  			width: 50%;
		}
		.image {
  			display: block;
  			width: 100%;
  			height: 135%;
		}
		.overlayright {
  			position: absolute;
  			bottom: 0;
  			left: 100%;
  			right: 0;
  			background-image:url("vege.jpg");
  			background-size:cover;
  			overflow: hidden;
  			width: 0;
  			height: 100%;
  			transition: .5s ease;
		}
		.container:hover .overlayright {
  			width: 100%;
  			left: 0;
		}
		.overlayleft {
  			position: absolute;
 			bottom: 0;
  			left: 0;
  			right: 0;
  			background-image:url("normal.jpeg");
  			background-size:cover;
  			overflow: hidden;
  			width: 0;
  			height: 100%;
  			transition: .5s ease;
		}	
		.container:hover .overlayleft {
  			width: 100%;
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

<body style="background: #E4F1F6;">
	<div class="w3-container">
	<h1 align="center"><b>選擇推薦的餐廳類型</b></h1>
	</div>

	<div class="w3-cell-row" style="padding:10px;">

		<div class="container w3-half">
  		<img src="normal.jpg" class="image">
 			<div class="overlayleft">
    			<a href="add.php">
				<div class="button w3-half w3-xxxlarge w3-black w3-hover-amber" style="position: absolute;opacity:0.8;right:10;bottom:10%;">
					<span>普通</span>
				</div>
				</a>
  			</div>
		</div>

		<div class="container w3-half">
  		<img src="vegebg.jpg" class="image">
 			<div class="overlayright">
    			<a href="add_v.php">
				<div class="button w3-half w3-xxxlarge w3-black w3-hover-green w3-hover-text-black" style="position: absolute;opacity:0.8;right:10;bottom:10%;">
					<span>素食</span>
				</div>
				</a>
  			</div>
		</div>

	</div>

</body>


</html>