<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("conMysql.php");
	if (!@mysql_select_db("what2eat")) die("資料庫選擇失敗！");
	$sql_query = "INSERT INTO `restaurants` (`rName` ,`rAddr` ,`rType` ,`rPrice` ,`rFeature` ,`rRating`) VALUES (";
	$sql_query .= "'".$_POST["rName"]."',";
	$sql_query .= "'".$_POST["rAddr"]."',";
	$sql_query .= "'".$_POST["rType"]."',";
	$sql_query .= "'".$_POST["rPrice"]."',";
	$sql_query .= "'".$_POST["rFeature"]."',";
	$sql_query .= "'".$_POST["rRating"]."')";
	mysql_query($sql_query);
	//重新導向回到主畫面
	header("Location: index.php");
}	
?>
<html>
<head>
  <meta charset="utf-8">
  <title>新增普通店家</title>
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

<body style="background: #E4F1F6;">
  <div class="w3-container">
  <h1 align="center"><b>新增普通店家</b></h1>
  
<form action="" method="post" name="formAdd" id="formAdd">
  <table class="w3-table w3-centered w3-xlarge w3-border-black" border="1" align="center" cellpadding="4">
    <tr>
      <th class="w3-black">欄位</th><th class="w3-black">資料</th>
    </tr>
    <tr>
      <td>店名</td><td><input type="text" name="rName" id="rName" size="20"></td>
    </tr>
     <tr>
      <td>地址</td><td><input type="text" name="rAddr" id="rAddr" size="40"></td>
    </tr>
    <tr>
      <td>葷/素</td><td>
      <input type="radio" name="rType" id="rType" value="葷" checked>葷
      <input type="radio" name="rType" id="rType" value="素">素
      </td>
    </tr>
     <tr>
      <td>價位</td><td>
      <input type="radio" name="rPrice" id="rPrice" value="低" checked>低
      <input type="radio" name="rPrice" id="rPrice" value="中">中
      <input type="radio" name="rPrice" id="rPrice" value="高">高
      </td>
    </tr>
    <tr>
      <td>特色</td><td><input type="text" name="rFeature" id="rFeature"></td>
    </tr>
    <tr>
      <td>評價</td><td><input type="number" name="rRating" id="rRating" min="1" max="5"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <b><input class="w3-button w3-amber w3-hover-red" type="submit" name="button" id="button" value="新增店家"></b>
      <b><input class="w3-button w3-amber w3-hover-red" type="reset" name="button2" id="button2" value="重新填寫"></b>
      </td>
    </tr>
  </table>
</form>
</div>
</body>

</html>