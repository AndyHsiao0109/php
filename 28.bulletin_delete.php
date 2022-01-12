<?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號";  //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb"); #mysqli_connect() 建立資料庫連結
        $sql="delete from bulletin where bid='{$_GET[bid]}'"; #新增資料SQL命令
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //判斷字串
            echo "佈告刪除錯誤"; //印出佈告刪除錯誤
        }else{
            echo "佈告刪除成功"; //印出佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
    }
?>