<?php 
include("conMysql.php");
if (!@mysql_select_db("what2eat")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	
	$sql_query = "DELETE FROM `restaurants_v` WHERE `rNo`=".$_POST["rNo"];
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: data_v.php");
}
$sql_db = "SELECT * FROM `restaurants_v` WHERE `rNo`=".$_GET["id"];
$result = mysql_query($sql_db);
$row_result=mysql_fetch_assoc($result);
?>

<html>
<head>
  <meta charset="utf-8">
  <title>刪除店家資料</title>
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
  <b><input class="w3-bar-item w3-button w3-light-blue w3-hover-black w3-large" type="button" value="普通店家列表" onclick="location.href='data.php'"></b>
  <b><input class="w3-bar-item w3-button w3-light-blue w3-hover-black w3-large" type="button" value="素食店家列表" onclick="location.href='data_v.php'"></b>
</div>
</nav>

<body>
<div class="w3-container" style="margin-left:15%">
<h1 align="center"><b>店家資料管理系統 - 刪除資料</b></h1>

<form action="" method="post" name="formDel" id="formDel">
  <table class="w3-table w3-centered w3-xlarge" border="1" align="center" cellpadding="4">
    <tr>
      <th class="w3-black">欄位</th><th class="w3-black">資料</th>
    </tr>
    <tr>
      <td>店名</td><td><?php echo $row_result["rName"];?></td>
    </tr>
    <tr>
      <td>地址</td><td><?php echo $row_result["rAddr"];?></td>
    </tr>
    <tr>
      <td>葷/素</td><td>
      <?php
      	if($row_result["rType"]=="葷"){
      		echo "葷";
      	}else{
      		echo "素";
      	}
   	  ?>
      </td>
    </tr>
    <tr>
      <td>價位</td><td><?php echo $row_result["rPrice"];?></td>
    </tr>
    <tr>
      <td>特色</td><td><?php echo $row_result["rFeature"];?></td>
    </tr>
    <tr>
      <td>評價</td><td><?php echo $row_result["rRating"];?></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center">
      <input name="rNo" type="hidden" value="<?php echo $row_result["rNo"];?>">
      <input name="action" type="hidden" value="delete">
      <b><input class="w3-button w3-light-blue w3-hover-red" type="submit" name="button" id="button" value="確定刪除這筆資料嗎？"></b>
      </td>
    </tr>
  </table>
</form>
</body>
</html>