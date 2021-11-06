<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))  //如果接收到的id為john，pwd為john1234
        echo "Welcome"; //回應 Welcome
    else
        echo "fail login"; //回應 fail login
?>
