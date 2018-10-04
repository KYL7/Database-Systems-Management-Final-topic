<!DOCTYPE HTML>
<?php
	include("../mysql_connect.php");
	$sql = "SELECT * FROM upload_sell ORDER BY posttime DESC";//讓資料由發布時間呈現新到舊
	$result = mysqli_query($link,$sql);
	$imginfo = array();
	while ($row_user = mysqli_fetch_assoc($result)){
   		$imginfo[] = $row_user;
	}
?>
<html>
	<head>
		<title>亞大二手拍賣網 - 全部商品</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('link_css.php')?>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/all_style.css">
	</head>
	<body>
	<!-- Header -->
		<?php include('menubar.php');?>
		<!-- Main -->
		<div style="background: #FFFFFF;margin: 5px;border-radius: 10px;">
			<table id="example1" class="table table-bordered table-striped">
			    <thead>
			    	<tr>
			            <th width="200px">商品標題</th>
			            <th width="200px">商品價格</th>
			            <th width="200px">商品地點</th>
			            <th width="200px">商品敘述</th>
			            <th width="200px">發布時間</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php foreach ($imginfo as $img) {?>
			    		<tr>
				    		<td onclick="location.href='<?php echo "detail.php?new=".$img['id'] ?>';"><?php echo $img['title']?></td>
				    		<td onclick="location.href='<?php echo "detail.php?new=".$img['id'] ?>';"><?php echo $img['price']?></td>
				    		<td onclick="location.href='<?php echo "detail.php?new=".$img['id'] ?>';"><?php echo $img['location']?></td>
				    		<td onclick="location.href='<?php echo "detail.php?new=".$img['id'] ?>';"><?php echo substr($img['description'],0,200)?></td>
				    		<td onclick="location.href='<?php echo "detail.php?new=".$img['id'] ?>';"><?php echo $img['posttime']?></td>
			    		</tr>
			    	<?php }?>
			    </tbody>
			    <tfoot>
			        <tr>
			            <th width="200px">商品標題</th>
			            <th width="200px">商品價格</th>
			            <th width="200px">商品地點</th>
			            <th width="200px">商品敘述</th>
			            <th width="200px">發布時間</th>
			        </tr>
			    </tfoot>
			</table>
		</div>
		<!-- Footer -->
			<?php include('footer.php')?>

		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
		<!-- page script -->
		<script>
		  $(function () {
		    $("#example1").DataTable();
		  });
		</script>
	</body>
</html>