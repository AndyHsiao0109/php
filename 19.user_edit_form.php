<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");  #mysqli_connect() 建立資料庫連結
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); #mysqli_query() 從資料庫查詢資料
        $row=mysqli_fetch_array($result); //從$result取得資料
        echo "
        <form method=post action=user_edit.php>  //將表單內容傳送到user_edit.php
            <input type=hidden name=id value={$row['id']}> //輸入欄位為隱藏 
            帳號：{$row['id']}<br>  //帳號是從id取得
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> //輸入欄位是文字，將內容取名為pwd
            <input type=submit value=修改> //輸入欄位是按鈕，按下後提交form
        </form>
        ";
    }
    ?>
    </body>
</html>