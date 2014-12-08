#  專題小組 第二組
##組員:##

###0124089 陳冠宏 
###0124503 鄭世玄  
###0124101 張朝雄  
###0124097 梁漸民  
###0124023 鄭元傑　

##概論#
隨著時代的進步，以及經濟的成長。台灣近年來的生活品質逐漸提升；
就連飲食或者普通的吃頓飯，也都足以已讓人傷透腦筋；如何在眾多的
美食中找到一個自己中意的食物，委實不容易。其中每個人的喜好不同
，有追求物美價廉、有人在意金錢的價位、更有許多人在意這項美食的
評價。因此針對這樣的情形我們因眾多需求者之請託，撰寫一支可以解
決類似情形的程式，用以解決問題。我們大致歸類了台灣區域美食，以
及評價，供廣大的消費族群參考。可以依照個人的喜好做決定，並且運
用googlemap的API做簡易的導航之用。相信這個系統程式，可以替需求
者解決相關的問題以及相關應用。

**定義需求**

發現需求: 成千上萬的饕客。以及肚子餓的人。

功能需求: 行程規劃、美食簡介、路線規劃.......etc

非功能性需求:可靠性、可用性。
###詳細描述專題的內容(含圖表)###
使用工具OR功能: javascript,phonegap,google map API

* [1.利害關係人目標表](#1)
* [2.事件與使用案例對照表](#2)
* [3.個別使用案例的描述](#3)
* [4.系統使用案例圖](#4)
* [5.個別使用案例活動圖](#5)
* [6.每個使用案例的名詞與概念類別列舉表](#6)
* [7.系統的初步類別圖](#7)
* [8.使用案例主要成功情節之英文名稱事件對應](#8)
* [9.名稱事件之合約](#9)
* [10.使用案例之系統循序圖](#10)








#<a name="1"/> 利害關係人 #
![](http://i.imgur.com/Q8HptnT.jpg)

##<a name="2"/>事件及使用案例表##
|事件名稱|使用案例名稱|
|--------------------|--------------------|
|1.美食顧問輸入密碼登入系統|1.登入|
|2.對美食資料做新增.修改.刪除|2.美食資料更動|
|3.查詢使用者及各地區的美食清單|3.查詢美食清單|
|4.獲得拜訪各個美食地點的最佳路徑|4.路徑分析|


#<a name="3"/> 美食地圖使用案例圖 #
![](http://i.imgur.com/WvF1Dh4.jpg)


#<a name="4"/>個別使用案例#
##登入##
![](http://i.imgur.com/IHT1eyG.jpg)
##美食資料更動##
![](http://i.imgur.com/AEIrI5e.jpg)
##查詢美食清單##
![](http://i.imgur.com/vidEGk6.jpg)
## 路徑分析 ##
![](http://i.imgur.com/ZOltg9s.jpg)

#<a name="5"/>個別使用案例圖#
##登入##
![](http://i.imgur.com/VJIfoYe.jpg)

##美食資料更動##
![](http://i.imgur.com/4daHaUh.jpg)

##查詢美食清單##
![](http://i.imgur.com/RvUOALD.jpg)

## 路徑分析 ##
![](http://i.imgur.com/a6xZjQx.jpg)


#<a name="6"/>使用案例的名詞與概念類別列舉表#
## 登入 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|美食顧問|為本案例的操作者，輸入密碼後方可進入系統。|是|
|姓名|為美食顧問的屬性|否|
|密碼|為美食顧問的屬性|否|
|會員資料表|資料庫中紀錄美食顧問的帳號及密碼的關連表|是|

## 使用案例：美食資料更動 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|資料操作業面|系統需要建立美食地點的詳細資料。|是|
|美食資料|為資料操作頁面的屬性。|否|
|資料新增頁面|為資料操作頁面的方法之一，用於刪除資料。|否|
|資料修改頁面|為資料操作頁面的方法之一，用於刪除資料。|否|
|資料刪除|為資料操作頁面的方法之一，用於刪除資料。|否|
|美食資料表|是資料庫中儲存美食地點的位置。|是|
|編號|為美食資料表的屬性。|否|
|所在縣市|為美食資料表的屬性。|否|
|所在區域|為美食資料表的屬性。|否|
|美食名稱|為美食資料表的屬性。|否|
|地址|為美食資料表的屬性。|否|
|類型|為美食資料表的屬性。|否|
|介紹連結|為美食資料表的屬性。|否|

## 使用案例：查詢美食清單 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|一般使用者|為本案例的操作者。|是|
|縣市|使用者所選擇的縣市。|是|
|區域|使用者所選擇的區域。|是|
|美食清單|該區域中包含的美食列表。|是|
|美食地圖|顯示地圖及標記美食的所在位置|是|
|美食資料表|是資料庫中儲存美食地點的位置。|是|
|編號|為美食資料表的屬性。|否|
|所在縣市|為美食資料表的屬性。|否|
|所在區域|為美食資料表的屬性。|否|
|美食名稱|為美食資料表的屬性。|否|
|地址|為美食資料表的屬性。|否|
|類型|為美食資料表的屬性。|否|
|介紹連結|為美食資料表的屬性。|否|
|選擇清單|顯示使用者所選擇的美食清單|是|

## 使用案例：路徑分析 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|一般使用者|為本案例的操作者。|是|
|美食清單|該區域中包含的美食列表。|是|
|路徑地圖|顯示地圖及標記美食的所在位置|是|
|起始點|路徑判斷的起始點，為路徑地圖的屬性。|否|
|選擇點|美食清單所選擇的路徑判斷中須經過的個點，為路徑地圖的屬性。|否|

#<a name="7"/> 使用案例的初步類別圖 #
# 使用案例：登入 #
![](http://i.imgur.com/yB7zled.jpg)
![](http://i.imgur.com/NqTr2QX.jpg)

# 使用案例：美食資料更動 #
![](http://i.imgur.com/Q9pITuz.jpg)
![](http://i.imgur.com/xQdTDCy.jpg)

# 使用案例：查詢美食清單 #
![](http://i.imgur.com/NPNI22I.jpg)
![](http://i.imgur.com/9vFjQHq.jpg)

# 使用案例：路徑分析 #
![](http://i.imgur.com/AsxTG0y.jpg)
![](http://i.imgur.com/VKTdy79.jpg)

# 整個系統例的初步類別圖 #
## Boundary ##
![](http://i.imgur.com/P1rgvNs.jpg)

## Control ##
![](http://i.imgur.com/yglcu10.jpg)

## Entity ##
![](http://i.imgur.com/xM9as36.jpg)

![](http://i.imgur.com/u81Hi8c.jpg)



#<a name="8"/>使用案例主要成功情節之英文名稱事件對應#
##登入##
![](http://i.imgur.com/iRFcHtO.jpg)

##美食資料更動##
![](http://i.imgur.com/kqZ0wjI.jpg)

##查詢美食清單##
![](http://i.imgur.com/4mN5NfA.jpg)

## 路徑分析 ##
![](http://i.imgur.com/WcjGOlL.jpg)


#<a name="9"/>名稱事件之合約#
##登入##
![](http://i.imgur.com/QJL8VJQ.jpg)

##美食資料更動##
![](http://i.imgur.com/fuAAaUc.jpg)

##查詢美食清單##
![](http://i.imgur.com/r46sgfA.jpg)

## 路徑分析 ##
![](http://i.imgur.com/TZvvKMG.jpg)

#<a name="10"/>使用案例之系統循序圖#
##登入##
![](http://i.imgur.com/OBdkafk.jpg)
##美食資料更動##
![](http://i.imgur.com/uqrw4I1.jpg)
##查詢美食清單##
![](http://i.imgur.com/UttFYvc.jpg)
## 路徑分析 ##
![](http://i.imgur.com/OSTmqJ9.jpg)



