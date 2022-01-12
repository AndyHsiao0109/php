<?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb"); //建立資料庫連結
        $sql="delete from user where id='{$_GET[id]}'";  #新增資料SQL命令：刪除id
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //查詢字串
            echo "使用者刪除錯誤"; //印出使用者刪除錯誤
        }else{
            echo "使用者刪除成功"; //印出使用者刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>"; //3秒後refresh 超連結到user.php
    }
?>