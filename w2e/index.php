<?php 
	header("charset=utf-8");
	include("conMysql.php");//登入並連接資料庫
	$seldb = @mysql_select_db("what2eat");//從資料庫裡選擇名稱為what2eat的資料夾
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = 'SELECT @row := @row +1 AS ROW , rName,rAddr,rType,rPrice,rFeature,rRating FROM restaurants, (SELECT @row :=0)r UNION SELECT @row := @row +1 AS ROW , rName,rAddr,rType,rPrice,rFeature,rRating FROM restaurants_v, (SELECT @row :=0)r';
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>What 2 Eat</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.png"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">

	<style>
	.mySlides {display:none;}
	body,h1{
		position:middle;
		text-align:center;
		font-family: "Oswald";
	}
	
	.mid{
		height:70%;
		padding:40px;
	}
	.bot{
		height:10%;
		padding:10px;
		font-size: 30px;
	}
	div img{
    	width: 100%;
    	height: 80%;
    	object-fit:cover;
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

			<div class="w3-dropdown-hover w3-large w3-hover-amber" style="color:white">
				<button class="w3-button w3-black w3-hover-amber"><i class="fas fa-comments"></i> 意見</button>
				<div class="w3-dropdown-content w3-bar-block w3-black w3-card-4">
					<a href="rating.php" class="w3-bar-item w3-button w3-hover-amber w3-large"><i class="fas fa-comment-dots"></i> 給予餐廳評價</a>
					<a href="suggest.php" class="w3-bar-item w3-button w3-hover-amber w3-large"><i class="fas fa-thumbs-up"></i> 我有推薦</a>			
				</div>
			</div>
			
			<div class="w3-dropdown-hover w3-large w3-hover-amber w3-right" style="color:white">
				<button class="w3-button w3-black w3-hover-amber"><i class="fas fa-wrench" style="font-size:25px"></i></button>
				<div class="w3-dropdown-content w3-bar-block w3-black w3-card-4" style="right:0">
					<a href="data.php" class="w3-bar-item w3-button w3-hover-amber w3-large"><i class="fas fa-cogs"></i> 修改餐廳</a>		
				</div>
			</div>

		</div>
	</div>

	<div class="w3-content w3-bottombar w3-border-amber" style="max-width:2000px;"><!--圖片位置-->
			<div class="mySlides w3-display-container w3-center">
				<div class="w3-display-bottomleft w3-container w3-black w3-text-white w3-hover-amber w3-hover-text-black w3-padding-10 w3-opacity" style="bottom:10%;opacity:0.8;width:40%">
					<h1 class="w3-xxxlarge">What 2 Eat</h1>
				</div>
				<img src="food1.jpg" style="width:100%">
				<div class="w3-display-topright w3-container w3-text-black w3-padding-32 w3-hide-small" style="top:7%;transform:rotate(10deg);">
      				<h3 class="w3-animate-right"><b>不知道今天想吃什麼？</b></h3>   
    			</div>
			</div>
			<div class="mySlides w3-display-container w3-center">
				<div class="w3-display-bottomleft w3-container w3-black w3-text-white w3-hover-amber w3-hover-text-black w3-padding-10 w3-opacity" style="bottom:10%;opacity:0.8;width:40%">
					<h1 class="w3-xxxlarge">What 2 Eat</h1>
				</div>
				<img src="food2.jpg" style="width:100%">
  				<div class="w3-display-topright w3-container w3-text-white w3-padding-32 w3-hide-small" style="top:7%;transform:rotate(10deg);">
  					<h3 class="w3-animate-right"><b>你還在煩惱想吃什麼嗎？</b></h3>    
    			</div>
			</div>

			<div class="mySlides w3-display-container w3-center">
				<div class="w3-display-bottomleft w3-container w3-black w3-text-white w3-hover-amber w3-hover-text-black w3-padding-10 w3-opacity" style="bottom:10%;opacity:0.8;width:40%">
					<h1 class="w3-xxxlarge">What 2 Eat</h1>
				</div>
  				<img src="food3.jpg" style="width:100%"> 
  				<div class="w3-display-topright w3-container w3-text-black w3-padding-32 w3-hide-small" style="top:7%;transform:rotate(10deg);">
  					<h3 class="w3-animate-right" style="font-family: 'Oswald';"><b>趕快來試試What 2 Eat吧！</b></h3>    
    			</div>
			</div>

    	</div>
	</div>

	<script>
	var myIndex = 0;
	carousel();

	function carousel()//圖片自動播放公式
	{
  		var i;
 	 	var x = document.getElementsByClassName("mySlides");
 	 	for (i = 0; i < x.length; i++) {
   	 	x[i].style.display = "none";  
  		}
 		myIndex++;
 	 	if (myIndex > x.length) {myIndex = 1}    
 	 	x[myIndex-1].style.display = "block";  
 		 setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>

</header>

<body style="background: #E4F1F6;">
	<div class="mid w3-topbar w3-bottombar w3-border-amber">
		<span class="w3-jumbo"><b>開始抽取餐廳吧！</b></span><br><br>
		<a href="draw.php" class="button w3-round w3-jumbo w3-text-white w3-black w3-hover-text-black w3-hover-amber" style="position: absolute;right:600px;top:110%;height:150;width:300;"><span>抽取</span></a>
	</div>
</body>

<div class="w3-row w3-center w3-text-white w3-black w3-padding-16 w3-topbar w3-border-amber">
  	<div class="w3-quarter w3-section">
    	<span class="w3-xlarge"></span><br>
  	</div>
  	<div class="w3-quarter w3-section">
    	<span class="w3-xxxlarge"><?php echo $total_records;?></span><br>
    	<span class="w3-xlarge"><b>家餐廳</b></span>
 	 </div>
  	<div class="w3-quarter w3-section">
   		<span class="w3-xxxlarge"><?php 
   		$c=0;
   		while($row=mysql_fetch_assoc($result)){
   			if($row["rRating"]>3){
   				++$c;
   			}
      	}echo $c;?></span><br>
    	<span class="w3-xlarge"><b>家評分高於3的餐廳</b></span>
  	</div>
  	<div class="w3-quarter w3-section">
    	<span class="w3-xlarge"></span><br>
 	</div>
</div>

<footer>
	<div class="bot">
		<span class="w3-large">By Jason Lor</span>
	</div>
</footer>

</html>