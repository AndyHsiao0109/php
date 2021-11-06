<?php
    session_start(); //啟動頁面的session功能
    unset($_SESSION["id"]); //刪除id的值
    echo "登出成功...."; //印出登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>"; //3秒後refresh 超連結到login.html

?>