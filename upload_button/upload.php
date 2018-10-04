<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>亞大二手拍賣網 - 上傳商品</title>
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form_style.css">
    <link rel="stylesheet" href="../UI/assets/css/main.css">
    <link rel="stylesheet" href="../UI/assets/css/header_style.css">
</head>
<body>  
    
<?php 
	include("../UI/menubar.php");
	include("../mysql_connect.php");
	include("./method.php");

	$name = substr(strip_tags(addslashes(trim($_POST['name']))),0,10);
	$phone = substr(strip_tags(addslashes(trim($_POST['phone']))),0,10);
	$line = substr(strip_tags(addslashes(trim($_POST['line']))), 0,31);
	$price = substr(strip_tags(addslashes(trim($_POST['price']))),0,7);
	$title = substr(strip_tags(addslashes(trim($_POST['title']))),0,51);
	$description = htmlspecialchars(substr(strip_tags(addslashes(trim($_POST['description']))),0,2001));
	$location = substr(strip_tags(addslashes(trim($_POST['location']))),0,51);
	$date = date("Y-m-d H:i:s", time());
	$bug_count = 0;
	echo "<div class='content' style='background: #FFFFFF;'>";

	#驗證姓名
	if($name == null){
		echo "姓名: ".$name;
		echo "姓名不能為空，請返回<br />";
		$bug_count =1;
	}else if(!content_filter($name)){
		echo "姓名不能包含特殊符號，請返回<br />";
		$bug_count =1;
	}

	#驗證手機號碼
	if(!preg_match("/^09[0-9]{8}$/", $phone)){
	   	echo "輸入的手機號碼: ".$phone."<br />";
	   	echo "手機號碼錯誤，請返回<br />";
		$bug_count =1;
	}

	#驗證LINE
        if($line == null){
        echo "Line: ".$line;
        echo "Line帳號不能為空，請返回<br />";
        $bug_count =1;
    }else if(!content_filter($line)){
		echo "Line帳號不能包含特殊符號，請返回<br />";
		$bug_count =1;
	}

	#驗證商品價格
	if($price == null){
		echo "商品價格: ".$price;
		echo "商品價格不能為空，請返回<br />";
		$bug_count =1;
	}else if($price>=999999){
		echo "商品價格: ".$price;
		echo "商品價格不可大於999999，請返回<br />";
		$bug_count =1;
	}else if(!is_numeric($price)){
		echo "商品價格: ".$price;	
		echo "商品價格只能輸入數字，請返回<br />";
		$bug_count =1;
	}

	#驗證商品標題
	if($title == null){
		echo "標題: ".$title;
		echo "商品標題不能為空，請返回<br />";
		$bug_count =1;

	}else if (strlen($title)>=50){
		echo "標題: ".$title;
		echo "商品標題不能超過50字，請返回<br />";
		$bug_count =1;
	}else if(!content_filter($title)){
		echo "商品標題不能包含特殊符號，請返回<br />";
		$bug_count =1;
	}

	#驗證商品敘述
	if($description == null){
		echo "敘述: ".$description;
		echo "商品敘述不能為空，請返回<br />";
		$bug_count =1;

	}else if (strlen($description)>=2000){
		echo "敘述: ".$description;
		echo "商品敘述不能超過2000字，請返回<br />";
		$bug_count =1;
	}

	#驗證商品地點
	if($location == null){
		echo "地點: ".$location;
		echo "商品地點不能為空，請返回<br />";
		$bug_count =1;

	}else if (strlen($location)>=50){
		echo "地點: ".$location;
		echo "商品地點不能超過50字，請返回<br />";
		$bug_count =1;
	}else if(!content_filter($location)){
		echo "商品地點不能包含特殊符號，請返回<br />";
		$bug_count =1;
	}

	#驗證商品圖片
	if($_FILES['image_file']['name'] == null){
		echo "商品圖片不能為空，請返回<br />";
		$bug_count =1;
	}


	echo "</div>";

	#中斷程式
	if($bug_count!=0){
		return;
	}

	#####上傳檔案#####

	#檔案路徑
	$uploaddir = './img/';
	#檔案名稱
	$uploadfilename = basename($_FILES['image_file']['name']);
	#檔案格式
	$uploadfiletype = $_FILES["image_file"]["type"];
	#檔案大小 KB
	$uploadfilesize = $_FILES["image_file"]["size"]/1024;
	#檔案
	$uploadfile = $uploaddir.$uploadfilename;

	#####上傳檔案結束#####

	# 檢查檔案是否上傳成功
	if ($_FILES['image_file']['error'] === UPLOAD_ERR_OK){

	    if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadfile)) {
	    	$sql = "INSERT INTO upload_sell (name, phone, line, price, title, description, location, pic_name, pic_type , pic_size , posttime) VALUES ('$name','$phone','$line','$price','$title','$description','$location','$uploadfilename','$uploadfiletype','$uploadfilesize','$date')";
			$result = mysqli_query($link,$sql);
			echo "<div class='content' style='background: #FFFFFF;'>";
		    echo "上傳成功<br />";
		    echo "</div>";
		    echo '<meta http-equiv=REFRESH CONTENT=1;url=../UI/index.php>';
		} else {
			echo "<div class='content' style='background: #FFFFFF;'>";
	        echo "上傳失敗<br />";
		    echo "</div>";
	    }
	} else {
		echo '錯誤代碼：' . $_FILES['image_file']['error'] . '<br/>';
	}
?>
</body>
</html>