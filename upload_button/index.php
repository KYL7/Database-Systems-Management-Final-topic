<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>HTML5 File Uploader</title>

        <?php include('../UI/link_css.php')?>
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form_style.css">
        <link rel="stylesheet" href="../UI/assets/css/menubar_style.css">
    </head>

    <body>

        
        <?php include('../UI/menubar.php');?>

        <div class="container">
                <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
                    
                    <input type="text" class="name field-in font" placeholder="賣方姓名" name="name"/>
                  
                    <input type="text" class="email field-in font" placeholder="賣方電話" name="phone"/>

                    <input type="text" class="line field-in font" placeholder="賣方LINE" name="line"/>

                    <input type="text" class="name field-in font" placeholder="商品價格" name="price"/>
                  
                    <input type="text" class="email field-in font" placeholder="商品標題" name="title"/>

                    <textarea class="message field-in font" placeholder="商品敘述" name="description" onkeyup="autogrow(this);"></textarea> 
                  
                    <input type="text" class="email field-in font" placeholder="商品地點" name="location"/>

                    <div class="file-upload">
                        <input type="file"  name="image_file" id="image_file" onchange="fileSelected();"/>
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <!-- <div id="filetype"></div>
                        <div id="filedim"></div> -->
                        <div id="fileok"></div>
                    </div>
                    <div id="error">只能上傳圖片檔案。</div>
                    <div id="error2">上傳檔案時發生錯誤。</div>
                    <div id="abort">上傳被取消或是連線中斷。</div>
                    <div id="warnsize">圖片檔案過大，請選擇檔案更小的圖片。</div>
                    <div id="fileexist">圖片名稱已存在，請重新命名。</div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            <div id="speed">&nbsp;</div>
                            <div id="remaining">&nbsp;</div>
                            <div id="b_transfered">&nbsp;</div>
                            <div class="clear_both"></div>
                        </div>
                        <div id="upload_response"></div>
                    </div>
                    <img id="preview" />

                    <div>
                        <input id="upload_ok" type="submit" value="送出"/>
                    </div>
                </form>
        </div>
    <script  src="js/index.js"></script>
    </body>
</html>
