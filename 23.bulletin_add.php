<?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb"); #mysqli_connect() 建立資料庫連結
        $sql="insert into bulletin(title, content, type, time)  #mysqli_query() 從資料庫查詢資料
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
        if (!mysqli_query($conn, $sql)){ //查詢字串
            echo "新增命令錯誤"; //印出新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁"; //印出新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
        }
    }
    
    ?>
    