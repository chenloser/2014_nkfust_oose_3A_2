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
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10744975_461173024020467_482029219_n.jpg?oh=eceb82879aa0ec8e5b6738da4268d3d5&oe=544898B3&__gda__=1414022446_8b7e082c62b05e7e1fc270d59fff88e8)
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
![](http://i.imgur.com/6QsHyep.jpg)

## 使用案例：地區縣市選擇 ##
![](http://i.imgur.com/OdUJoKs.jpg)

## 使用案例：查詢美食地點 ##
![](http://i.imgur.com/2McusTq.jpg)

## 使用案例：路徑分析 ##
![](http://i.imgur.com/y0WxE1Y.jpg)

# 整個系統例的初步類別圖 #
![](http://i.imgur.com/eqrecYr.jpg)


#<a name="8"/>使用案例主要成功情節之英文名稱事件對應#
##美食資料更動##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10744933_598522176919315_1113011491_n.jpg?oh=9d66522148642f3969f209a70f5d6dc6&oe=54494109&__gda__=1414143129_feec797eb55e12c919d8cca8359ff504)

##地區縣市選擇##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xfa1/v/t34.0-12/10723291_598522170252649_562784187_n.jpg?oh=e67c088d68cc1295a9616da5f86f776a&oe=54495E33&__gda__=1414096591_08aa91351fa73c6e4234886ddf555674)

##查詢美食地點##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10743760_598522180252648_1677887033_n.jpg?oh=4e74e1de5242fe2b73d747ec1c1e310f&oe=544921D0&__gda__=1414151872_5eea61ee151f1dd8f88c66bcc01e0dca)

## 路徑分析 ##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10733593_598522173585982_954795108_n.jpg?oh=39a84588d8d10d9fd7dad3835f989753&oe=544923D2&__gda__=1414085519_e55c072a320c2cb4b31a38b0ccd62c22)


#<a name="9"/>名稱事件之合約#
##美食資料更動##
![](https://scontent-a-lhr.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10647231_461379363999833_6595697421779013117_n.jpg?oh=e37a1759751f936d0076652824ea6a92&oe=54AC9710)
![](https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1904102_461379367333166_8479444051469631126_n.jpg?oh=4d67066216977676edbfd98d20ba6b04&oe=54BC0E6E&__gda__=1421411367_0d745e3a9b42b73c54983c338615ef42)
##地區縣市選擇##
![](https://scontent-b-lhr.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/1390748_461379373999832_1647936220460643682_n.jpg?oh=053ff75955bbce8904584287b57c33eb&oe=54BBFAF7)
##查詢美食地點##
![](https://scontent-b-lhr.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1654095_461379390666497_8308331603964769660_n.jpg?oh=bae02456c92e3b5afdbd7b9d0e6b9dee&oe=54BB948C)
## 路徑分析 ##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10736084_730074743752714_348764865_n.jpg?oh=ccab781fa1cd0be93b6822566bac970e&oe=54493EDA&__gda__=1414150087_d76b600b4a3a75113aa666564c300e24)

#<a name="10"/>使用案例之系統循序圖#
##美食資料更動##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10744688_875475382477621_758084392_n.jpg?oh=48b8cc741787fed7963b7fbe377a04ed&oe=544A38B8&__gda__=1414093541_6dbba428747b68526dc33e7c59947c31)
##地區縣市選擇##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10744752_875475619144264_379798260_n.jpg?oh=1f0cb5022a2a6cc680bea931b1e2526b&oe=544A3E2A&__gda__=1414087351_f602d35b30186e87d5ccf41fc29e3105)
##查詢美食地點##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10736097_875476235810869_1306044382_n.jpg?oh=e8bd6b24ed40e7f6954e74a24306af68&oe=544A36A0&__gda__=1414148400_83e2d4493f6946e7f4d9cdda6b5d1769)
## 路徑分析 ##
![](https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpf1/v/t34.0-12/10743563_875476942477465_1185499395_n.jpg?oh=9bd9e7624677729854c9e0a6042a3dee&oe=5449316E&__gda__=1414094654_26115320caa11697ba7a1066a906197a)


