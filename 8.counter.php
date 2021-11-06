<?php
    session_start(); //啟動頁面的session功能
    if (!isset($_SESSION["counter"]))  //isset是判斷變數
        $_SESSION["counter"]=1; //counter值為1
    else
        $_SESSION["counter"]++; //counter值+1

    echo "counter=".$_SESSION["counter"]; //印出counter值
    echo "<br><a href=reset_counter.php>重置counter</a>"; //超連結reset_counter.php。到印重製
?>