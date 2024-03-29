## HelloBlog 好部落格

### 概述
本專案為一部落格系統，提供使用者發佈檢視文章，使用者權限分為管理員及一般使用者。以laravel + mysql作為後端開發，並以頁面渲染方式整合前後端。
![image](https://github.com/catlookatyou/HelloBlog/blob/master/helloblog.JPG)
![image](https://github.com/catlookatyou/HelloBlog/blob/master/h3.JPG)
![image](https://github.com/catlookatyou/HelloBlog/blob/master/h2.JPG)

### 功能介紹
1.	會員註冊、登入、登出 (支援Google帳戶登入)
2.	文章的CRUD (使用者可刪除及修改個人文章，管理員可刪除任一文章)
3.	文章分類的CRUD (新增、修改、刪除為管理員權限)
4.	文章留言的發佈及刪除 (使用者可刪除個人留言，管理員可刪除任一留言)
5.	搜尋文章
6.	收藏文章 (可至「喜歡的文章」觀看)
7.	使用者可更改頭貼、名稱
8.	聊聊系統 (點擊任使用者頭貼後按「開始聊聊!」後，即會將該使用者加入個人聊天室並可開始對話)
9.	通知系統 (若自己發佈的文章下有新的留言，則會寄送email及更新通知)
10.	商店系統 (可將商品加入購物車，確定購買後可送出訂單)

### 學到的技術
1.	Laravel MVC架構開發(路由及controller撰寫、migrate、model及seeder撰寫、blade語法、composer及php artisan指令、debug等) 
2.	Laravel Broadcasting、Redis、Socket.io、event的使用(使用者可即時發出、收到訊息)
3.	Session的使用(購物車系統)、Redis儲存Session
4.	第三方API串接(Google OAuth)
5.	Laravel notifications、queue 的使用
