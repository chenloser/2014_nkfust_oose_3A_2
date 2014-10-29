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
![](http://i.imgur.com/b4GoEcC.jpg)

##<a name="2"/>事件及使用案例表##
|事件名稱|使用案例名稱|
|:--------------------:|:--------------------:|
|1.對美食資料做新增.修改.刪除|1.美食資料更動|
|2.查詢各縣市的美食資訊|2.地區縣市選擇|
|3.查詢使用者及各地區的美食位置|3.查詢美食地點|
|4.獲得拜訪各個美食地點的最佳路徑|4.路徑分析|


#<a name="3"/> 美食地圖使用案例圖 #
![](http://i.imgur.com/uwGVHak.jpg)


#<a name="4"/>個別使用案例#
![](http://i.imgur.com/Rur4SUP.jpg)

![](http://i.imgur.com/jcpfqO2.jpg)

![](http://i.imgur.com/6dGkA14.jpg)

![](http://i.imgur.com/EE9UmRC.jpg)

#<a name="5"/>個別使用案例圖#
##美食資料更動##
![](http://i.imgur.com/pL9Ulfj.jpg)
##地區縣市選擇##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-prn2/v/t34.0-12/10719284_455745554563214_642063535_n.jpg?oh=bebe350fcbfecc52b2a668e833403ccf&oe=5452A621&__gda__=1414754071_b13bad47575f52d2453da69506fed653)
##查詢美食地點##
![](http://i.imgur.com/lTDhlKM.jpg)
## 路徑分析 ##
![](http://i.imgur.com/FRCIWvN.jpg)


#<a name="6"/>使用案例的名詞與概念類別列舉表#
## 使用案例：美食資料更動 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|資料管理員|為本案例的操作者，輸入密碼後方可進入系統。|是|
|密碼|為資料管理員的屬性。|否|
|資料操作業面|系統需要建立美食地點的詳細資料。|是|
|美食資料|為資料操作頁面的屬性。|否|
|美食資料表|是資料庫中儲存美食地點的位置。|是|
|編號|為美食資料表的屬性。|否|
|所在縣市|為美食資料表的屬性。|否|
|所在區域|為美食資料表的屬性。|否|
|美食名稱|為美食資料表的屬性。|否|
|地址|為美食資料表的屬性。|否|
|類型|為美食資料表的屬性。|否|
|介紹連結|為美食資料表的屬性。|否|

## 使用案例：地區縣市選擇 ##
|名詞|原因|結果(是否為概念類別)|
|--------------------|--------------------|--------------------|
|一般使用者|為本案例的操作者。|是|
|台灣地圖|供選擇縣市及地區的網頁|是|
|縣市|所選擇的縣市，台灣地圖的屬性。|否|
|縣市地圖|顯示所選擇的縣市的地圖。|是|
|地區|所選擇的地區，縣市地圖的屬性。|否|
|美食資料表|是資料庫中儲存美食地點的位置。|是|
|編號|為美食資料表的屬性。|否|
|所在縣市|為美食資料表的屬性。|否|
|所在區域|為美食資料表的屬性。|否|
|美食名稱|為美食資料表的屬性。|否|
|地址|為美食資料表的屬性。|否|
|類型|為美食資料表的屬性。|否|
|介紹連結|為美食資料表的屬性。|否|


## 使用案例：查詢美食地點 ##
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
## 使用案例：美食資料更動 ##
![](http://i.imgur.com/SOFBt3l.jpg)

## 使用案例：地區縣市選擇 ##
![](http://i.imgur.com/ivDDICT.jpg)

## 使用案例：查詢美食地點 ##
![](http://i.imgur.com/zlgap5s.jpg)

## 使用案例：路徑分析 ##
![](http://i.imgur.com/WfWHkdL.jpg)

# 整個系統例的初步類別圖 #
![](http://i.imgur.com/2QXEeNC.jpg)



#<a name="8"/>使用案例主要成功情節之英文名稱事件對應#
##美食資料更動##
![](https://scontent-a.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/1743720_463946450409791_2765755268994869071_n.jpg?oh=b1d04d2454406a98b04760158b6ea337&oe=54F519C8)

##地區縣市選擇##

![](https://scontent-b.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/10153832_463946437076459_415340815525314658_n.jpg?oh=2a78359daa9f4a95042683435f3e6eb6&oe=54E559E1)
##查詢美食地點##

![](https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10689524_463947250409711_9175068468136918668_n.jpg?oh=24196dd964c329c11e8b7157b6c9811b&oe=54F4A1F5&__gda__=1420720717_f03e7db5bdc52c3421e75427261ed710)
## 路徑分析 ##
![](http://i.imgur.com/r6mgYy1.jpg)


#<a name="9"/>名稱事件之合約#
##美食資料更動##
![](https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10734164_463924020412034_4415443984984421406_n.jpg?oh=2dd6ced76b8b18164978c1fc5d73dbe4&oe=54EA9F43&__gda__=1424454907_d9959e864e673e41e63fdb5f6d3dd25a)

![](https://scontent-a.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/1800492_463924017078701_6520928117285934790_n.jpg?oh=57b8d07b7406acba4d8008db6bfe02e5&oe=54F8A016)
##地區縣市選擇##
![](https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10568946_463924027078700_5081906400226789118_n.jpg?oh=53054008d0c2f6852fdaa48cfa4bfa9c&oe=54E63ED1&__gda__=1424566715_df5185a5735ebcb679d6e53d426141e7)
##查詢美食地點##
![](https://scontent-b.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10409237_463924037078699_7693688335419793323_n.jpg?oh=5a6f89a1c7262f49e41ff3341768c410&oe=54B09965)
## 路徑分析 ##
![](http://i.imgur.com/XyzwZub.jpg)

#<a name="10"/>使用案例之系統循序圖#
##美食資料更動##
![](http://i.imgur.com/AdodkzR.jpg)
##地區縣市選擇##
![](http://i.imgur.com/v8iLSlk.jpg)
##查詢美食地點##
![](http://i.imgur.com/xDZp9Rx.jpg)
## 路徑分析 ##
![](http://i.imgur.com/EuWjqqH.jpg)



