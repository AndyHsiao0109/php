<?php
    error_reporting(0); //禁用錯誤報告
    $conn=mysqli_connect("localhost","root","", "mydb"); //建立資料庫連結
    $result=mysqli_query($conn, "select * from bulletin"); //從資料庫查詢資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; //列印這些內容
    while ($row=mysqli_fetch_array($result)){ //如果還有資料能抓，就執行下面的程式
        echo "<tr><td>";  //tr(行) td(列)
        echo $row["bid"]; //列印bid
        echo "</td><td>";
        echo $row["type"]; //列印type
        echo "</td><td>"; 
        echo $row["title"]; //列印title
        echo "</td><td>";
        echo $row["content"]; //列印content
        echo "</td><td>"; 
        echo $row["time"]; //列印time
        echo "</td></tr>";
    }
    echo "</table>" //列印表格
?>
