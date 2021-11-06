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
   if ($login==TRUE) //如果login的值是ture
     echo "welcome!!"; //列印welcome
  else //否則
     echo "id/pwd wrong!!"; //列印id/pwd wrong!!
?>