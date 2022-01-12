<?php
    error_reporting(0); //禁用錯誤報告
    session_start();//啟動頁面的session功能
    if (!$_SESSION["id"]) { //判斷id
        echo "please login first"; //印出please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>"; //3秒後refresh 超連結到login.html
    }
    else{
        
        $conn=mysqli_connect("localhost","root","","mydb"); //建立資料庫連結
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}"); //從資料庫查詢資料
        $row=mysqli_fetch_array($result); //從$result取得資料
        $checked1=""; //checked的值為空
        $checked2="";
        $checked3="";
        if ($row['type']==1) //判斷條件
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head> //網頁標題
            <body>
                <form method=post action=bulletin_edit.php> //POST用來傳遞資料，action向bulletin_edit.php發送資料
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br> //輸入內容為隱藏，內容取名為bid
                    標    題：<input type=text name=title value={$row['title']}><br> //輸入內容為文字，內容取名為title
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br> //輸入內容為文字輸入框，高度為20，寬度為20
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告  //輸入內容為按鈕，將內容取名為type，值為1
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊 //輸入內容為按鈕，將內容取名為type，值為2
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br> //輸入內容為按鈕，將內容取名為type，值為3
                    發布時間：<input type=date name=time value={$row['time']}><p></p> //輸入內容為日期，將內容取名為time
                    <input type=submit value=修改佈告> <input type=reset value=清除> //輸入欄位是按鈕，按下後會自動提交form;輸入欄位是按鈕，按下後會重置欄位
                </form>
            </body>
        </html>
        ";
    }
?>