<?php
    session_start(); //啟動頁面的session功能
    unset($_SESSION["counter"]); //刪除counter的值
    echo "counter重置成功...."; //印出counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>"; //2秒後refresh 超連結到counter.php

?>