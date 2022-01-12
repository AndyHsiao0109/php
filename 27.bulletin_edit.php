<?php

    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb"); #mysqli_connect() 建立資料庫連結
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){ //查詢字串
            echo "修改錯誤"; //印出修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表"; //印出修改成功，三秒鐘後回到佈告欄列表
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
        }
    }

?>