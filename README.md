# homework4

- 在login頁面當登入點下時，用$_Session的方式儲存userName textbox的值

- 用isset()查詢$_Session["uid"]也就是userName有沒有值，有的話就跳轉到login頁面，表示登入成功

- 新增Welcome Guest，當會員登入成功，Guest會變成會員名字

- 登入登出設定，設定登出signout=1

- 用$_GET抓取signout=1時會登出，並重新導向回index.php

- 用isset()查詢$_POST(btnHome)是否有值，有的話就回首頁。當使用者沒有輸入帳號和密碼就不能登入並顯示紅色提示字樣