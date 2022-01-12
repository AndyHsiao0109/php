<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);  //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{    
        echo "
            <form action=user_add.php method=post>  //將表單內容傳送到user_add.php
                帳號：<input type=text name=id><br> //輸入欄位是文字 ，將內容取名為id
                密碼：<input type=text name=pwd><p></p> //輸入欄位是文字，將內容取名為pwd
                <input type=submit value=新增> <input type=reset value=清除> //輸入欄位是按鈕，按下後會自動提交form;輸入欄位是按鈕，按下後會重置欄位
            </form>
        ";
    }
?>
    </body>
</html>