<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0); //禁用錯誤報告
        session_start();//啟動頁面的session功能
        if (!$_SESSION["id"]) { //判斷id
            echo "請登入帳號"; //印出請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
        }
        else{   
            echo "<h1>使用者管理</h1> //印出下面內容
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("localhost","root","","mydb"); //建立資料庫連結
            $result=mysqli_query($conn, "select * from user"); //從資料庫查詢資料
            while ($row=mysqli_fetch_array($result)){ //如果還有資料能抓，就執行下面的程式
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>"; //列印表格
        }
    ?> 
    </body>
</html>