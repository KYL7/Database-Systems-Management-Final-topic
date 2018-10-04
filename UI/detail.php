<!DOCTYPE HTML>
<?php
    $get_id = $_GET['new'];
	include("../mysql_connect.php");
	$sql = "SELECT * FROM upload_sell WHERE `id`= ".$get_id;
	$result = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
	<head>
		<title>亞大二手拍賣網 - <?php echo $row['title']?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('link_css.php')?>
	</head>
	<body>
		<!-- Header -->
		<?php include('menubar.php');?>
		<?php include('pre_logo.php');?>
		<!-- Main -->
			<div id="preview">
				<div class="inner">
					<div class="image fit">
						<img src=<?php echo "../upload_button/img/".$row['pic_name']?> alt="" />

					</div>
					<div class="content" style="background: #FFFFFF;">
						<header>
							<h2><?php echo $row['title']?></h2>
						</header>
						<pre style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;">商品描述：<br><?php echo $row['description']?></pre>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "賣家名稱: ".$row['name']?></p>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "商品價格: ".$row['price']."$"?></p>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "商品地點: ".$row['location']?></p>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "聯絡方式: ".$row['phone']?></p>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "LINE: ".$row['line']?></p>
						<p style="font-family: LiGothic, FangSong, Arial, cursive;font-size: 20px;"><?php echo "發布時間：: ".$row['posttime']?></p>
						
					</div>
				</div>
			</div>
		<!-- Footer -->
			<?php include('footer.php')?>
	</body>
</html>