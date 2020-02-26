<?php 
	header("charset=utf-8");
	include("conMysql.php");
	$seldb = @mysql_select_db("what2eat");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = 'SELECT * FROM `restaurants`';
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>店家資料管理系統</title>
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
		body,tr,td{
			text-align: center;
			font-family: "Oswald";
		}
	</style>
</head>

<header>
<div class="w3-top">
		<div class="w3-bar w3-black w3-card w3-hide-small">
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
      	<div class="w3-bar-item w3-large"></div>
      	<div class="w3-bar-item w3-large"></div>
      	<div class="w3-bar-item w3-large"></div>
      	<div class="w3-bar-item w3-large">What 2 Eat</div>
			<a href="index.php" class="w3-bar-item w3-button w3-large w3-hover-light-blue w3-right" style="color:white"><i class="fas fa-user-circle"></i> 登出</a>
		</div>
</div>
</header>

<nav>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item"><b>菜單</b></h3>
  <p align="center" class="w3-large"><b>目前資料筆數：<?php echo $total_records;?></b></p>
  <b><input class="w3-bar-item w3-button w3-light-blue w3-hover-black w3-large" type="button" value="素食店家列表" onclick="location.href='data_v.php'"></b>
  <b><input class="w3-bar-item w3-button w3-light-blue w3-hover-black w3-large" type="button" value="新增店家" onclick="location.href='add.php'"></b>
</div>
</nav>

<body>
	<div class="w3-container" style="margin-left:15%">
	<h2 align="center"><b>店家資料管理系統</b></h2>
	
<table class="w3-table w3-centered w3-xlarge" border="1" align="center">
  <!-- 表格表頭 -->
  <tr class="w3-black">
    <th>編號</th>
    <th>店名</th>
    <th>地址</th>
    <th>葷/素</th>
    <th>價位</th>
    <th>特色</th>
    <th>評價</th>
    <th>功能</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["rNo"]."</td>";
		echo "<td>".$row_result["rName"]."</td>";
		echo "<td>".$row_result["rAddr"]."</td>";
		echo "<td>".$row_result["rType"]."</td>";
		echo "<td>".$row_result["rPrice"]."</td>";
		echo "<td>".$row_result["rFeature"]."</td>";
		echo "<td>".$row_result["rRating"]."</td>";
		echo "<td><a class='w3-button w3-light-blue w3-hover-black' href='update.php?id=".$row_result["rNo"]."'><b>修改</b></a> ";
		echo "<a class='w3-button w3-text-black w3-red w3-hover-black' href='delete.php?id=".$row_result["rNo"]."'><b>刪除</b></a></td>";
		echo "</tr>";
	}
?>
</table>
</div>
</body>
</html>