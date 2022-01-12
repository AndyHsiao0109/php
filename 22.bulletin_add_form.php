<?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "請登入帳號"; //印出please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head> //網頁標題
            <body>
                <form method=post action=bulletin_add.php> //POST用來傳遞資料，action向bulletin_add.php發送資料
                    標    題：<input type=text name=title><br> //輸入內容為文字形式，將內容取名為title
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> //輸入內容為文字輸入框，高度為20，寬度為20
                    佈告類型：<input type=radio name=type value=1>系上公告 //輸入內容為按鈕，將內容取名為type，值為1
                            <input type=radio name=type value=2>獲獎資訊 //輸入內容為按鈕，將內容取名為type，值為2
                            <input type=radio name=type value=3>徵才資訊<br> //輸入內容為按鈕，將內容取名為type，值為3
                    發布時間：<input type=date name=time><p></p> //輸入內容為日期，將內容取名為time
                    <input type=submit value=新增佈告> <input type=reset value=清除> //輸入欄位是按鈕，按下後會自動提交form;輸入欄位是按鈕，按下後會重置欄位
                </form>
            </body>
        </html>
        ";
    }
?>