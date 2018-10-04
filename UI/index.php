<!DOCTYPE HTML>
<?php
	include("../mysql_connect.php");
	$sql = "SELECT * FROM upload_sell ORDER BY id DESC LIMIT 16  ";
	$result = mysqli_query($link,$sql);
	$imginfo = array();

	while ($row_user = mysqli_fetch_assoc($result)){
   		$imginfo[] = $row_user;
	}
?>
<html>
	<head>
		<title>亞大二手拍賣網</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('link_css.php')?>
	</head>
	<body>
	<!-- Header -->
		<?php include('menubar.php');?>
		<header id="header">
			<div class="inner">
				<div class="content">
					<h1>資料庫系統</h1>
					<h2>期末專題<br />
					<i class="fab fa-optin-monster fa-3x"></i>孫培元<br />
					<i class="fab fa-grav fa-3x"></i>賴冠宇<br />
					<i class="fas fa-paw fa-3x"></i>張健生</h2>
					<a href="#" class="button big alt"><span><i class="fab fa-angellist fa-3x"></i></span></a>
				</div>
				<a href="#" class="button hidden"><span><i class="fab fa-angellist fa-3x"></i></span></a>
			</div>
		</header>

		<!-- Main -->
			<div id="main">
				<div class="inner">
					<div class="columns">
						<!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[0]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[0]['pic_name']?> alt=""/>
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[0]['title']."<br /> 價格:".$imginfo[0]['price'] ?></h3>
								</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[4]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[4]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[4]['title']."<br /> 價格:".$imginfo[4]['price'] ?></h3>
								</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[8]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[8]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[8]['title']."<br /> 價格:".$imginfo[8]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[12]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[12]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[12]['title']."<br /> 價格:".$imginfo[12]['price'] ?></h3>
	  							</a>
							</div>

						<!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[1]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[1]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[1]['title']."<br /> 價格:".$imginfo[1]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[5]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[5]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[5]['title']."<br /> 價格:".$imginfo[5]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[9]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[9]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[9]['title']."<br /> 價格:".$imginfo[9]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[13]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[13]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[13]['title']."<br /> 價格:".$imginfo[13]['price'] ?></h3>
	  							</a>
							</div>

						<!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[2]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[2]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[2]['title']."<br /> 價格:".$imginfo[2]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[6]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[6]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[6]['title']."<br /> 價格:".$imginfo[6]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[10]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[10]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[10]['title']."<br /> 價格:".$imginfo[10]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[14]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[14]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[14]['title']."<br /> 價格:".$imginfo[14]['price'] ?></h3>
	  							</a>
							</div>

						<!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[3]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[3]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[3]['title']."<br /> 價格:".$imginfo[3]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[7]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[7]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[7]['title']."<br /> 價格:".$imginfo[7]['price'] ?></h3>
	  							</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[11]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[11]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[11]['title']."<br /> 價格:".$imginfo[11]['price'] ?></h3>
  								</a>
							</div>
							<div class="image fit">
								<a href="<?php echo "detail.php?new=".$imginfo[15]['id'] ?>"><img src=<?php echo "../upload_button/img/".$imginfo[15]['pic_name']?> alt="" />
	  							<h3 class="img__description" style="color:#FF5511;"><?php echo $imginfo[15]['title']."<br /> 價格:".$imginfo[15]['price'] ?></h3>
								</a>
							</div>
					</div>
				</div>
			</div>
		<!-- Footer -->
		<?php include('footer.php')?>
	</body>
</html>