<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { //如果post的id跟row的id一樣 and post的pwd跟row的pwd一樣
       $login=TRUE; //login值為ture
     }
   } 
   if ($login==TRUE) { //如果login值為ture
    session_start(); //啟動頁面的session功能
    $_SESSION["id"]=$_POST["id"]; //如果session的id跟post的id一樣
    echo "welcome!!"; //印出welcome
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>"; //3秒後refresh 超連結到bulletin.php
   }

  else{
    echo "id/pwd wrong!!"; //印出id/pwd wromg!!
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; // 3秒後refresh 超連結到login.html
  }
?>