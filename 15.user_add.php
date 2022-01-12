<?php

error_reporting(0); //禁用錯誤報告
session_start();//啟動頁面的session功能
if (!$_SESSION["id"]) { //判斷id
    echo "請登入帳號"; //印出請登入帳號
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) { //查詢字串
     echo "新增命令錯誤"; //印出新增命令錯誤
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁"; //印出新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
   }
}
?>