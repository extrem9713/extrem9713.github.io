-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 10 月 04 日 15:24
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `fattystore`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`pid` int(11) NOT NULL COMMENT '商品id',
  `name` varchar(20) NOT NULL COMMENT '商品名',
  `ename` varchar(100) NOT NULL COMMENT '英文名',
  `type` tinyint(4) NOT NULL COMMENT '1:蛋糕2:禮盒3:麵包',
  `price` int(11) NOT NULL COMMENT '價格',
  `desort` tinyint(1) NOT NULL DEFAULT '1' COMMENT '優先順序',
  `descript` varchar(200) NOT NULL COMMENT '商品說明',
  `img` varchar(20) NOT NULL COMMENT '商品圖片檔名',
  `content` varchar(100) NOT NULL COMMENT '商品內容物',
  `psize` varchar(8) NOT NULL COMMENT '商品規格',
  `vm` varchar(10) NOT NULL COMMENT '葷素',
  `storage` varchar(10) NOT NULL COMMENT '儲存方式',
  `deadline` varchar(30) NOT NULL COMMENT '保存期限'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`pid`, `name`, `ename`, `type`, `price`, `desort`, `descript`, `img`, `content`, `psize`, `vm`, `storage`, `deadline`) VALUES
(1, '鮮芒夏洛特', 'Mango Charlotte', 1, 820, 1, '香氣濃郁甘甜的愛文芒果，充滿夏天該有的陽光心情。膨鬆酥香的手指餅乾搭配軟綿的泡芙蛋糕、滑順的奶霜與新鮮芒果，鮮甜宜人。', 'pr1-c', '手指餅乾/熱帶水果/芒果奶霜/泡芙蛋糕', '7吋', '蛋奶素', '冷藏', '冷藏2天內食用完畢'),
(2, '芒果奶霜', 'Mango Cream', 1, 820, 1, '在欉黃愛文芒果的濃郁果香與北海道奶霜融合，口口清爽，鮮嫩香甜；隱藏其中的白巧克力酥菠蘿增加了咀嚼的口感與餘韻。', 'pr2-c', '熱帶水果/北海道奶霜/白巧克力酥菠蘿', '6吋', '蛋奶素', '冷藏', '冷藏3天內食用完畢'),
(3, '盛夏果園', 'Midsummer Orchard', 1, 780, 1, '蛋糕是新鮮的蓬鬆感，柔軟裡有微微Q彈，沒有被水果丁浸濕的痕跡，清爽的蛋糕裡隱藏著芒果果泥豐腴飽滿的香氣和細緻的滑順感，大夥一塊分享美味的同時，也留下值得回味的盛夏軌跡。', 'pr3-c', '熱帶水果/芒果果泥/法國鮮奶油/海綿蛋糕', '6吋', '蛋奶素', '冷藏', '冷藏2天內食用完畢'),
(4, '森林野莓', 'Mix Berry Chocolate Cake', 1, 780, 1, '用浪漫紫色鋪上優雅外衣，一朵朵恰似花苞的裝飾帶點淡淡果香，選用法國果園野莓，天然的酸甜風味與巧克力蛋糕相互交疊，口感清爽不濕膩，內餡均勻分佈的野莓顆粒自然地呈現莓果及奶霜最單純的奢華滋味。', 'pr4-c', '北海道奶霜/巧克力泡芙蛋糕體/法國鮮奶油/綜合野莓', '6吋/8吋', '蛋奶素', '冷藏', '冷藏2天內食用完畢'),
(5, '雪藏草莓芝士', 'Strawberry Cheese Cake', 1, 920, 1, '融合了優格與草莓芝士不同層次的酸甜風味，讓紮實醇厚的芝士吃在嘴裡顯得爽口與滑順，搭配著碎餅乾的酥香，捨不得離開的美好滋味。', 'pr5-c', '新鮮草莓/奶油乳酪/優格/碎餅乾', '8吋', '蛋奶素', '冷凍', '冷凍4~6天內食用完畢'),
(6, '甜心提拉', 'Super Tiramisu', 1, 720, 1, '道地來自於義大利馬斯卡邦起司。\r\n100%使用義大利馬斯卡邦起司，比面霜更加細膩的滑順質感搭配開啟味蕾的苦味可可粉，清爽的奶香、咖啡香、酒香不徐不疾地釋放出來，入口即化的香滑溼軟，令人心醉！', 'pr6-c', '北海道奶霜/法國鮮奶油/瑪斯卡邦起司慕斯/巧克力蛋糕/巧克力酥餅(此商品含酒)', '6吋/ 8吋', '葷食', '冷藏', '冷藏2天內食用完畢'),
(7, '焦糖玫瑰鹽', 'Salted Caramel Pie', 1, 690, 1, '焦糖奶霜、北海道奶、霜焦糖卡士達及巧克力酥波蘿，一層層堆疊出豐富口感，充滿濃郁的焦糖牛奶糖風味，尾韻是頂級玫瑰鹽高雅的鹹味', 'pr7-c', '北海道奶霜/焦糖奶霜/焦糖卡士逹/巧克力蛋糕/巧克力酥波蘿/杏仁奶油塔', '8吋', '蛋奶素', '冷藏', '冷藏3~4天內食用完畢'),
(8, '芋花園', 'Taro Tart', 1, 588, 1, '香酥塔皮上有著淡淡的紫色花瓣綻放，是純芋泥融入北海道奶霜的原色，口感輕盈。\r\n接著是香醇濃郁帶有顆粒的芋泥餡、奶霜與泡芙蛋糕，豐富的層次讓人一口接著一口。', 'pr8-c', '北海道奶霜/芋泥/泡芙蛋糕/奶油塔皮', '8吋', '蛋奶素', '冷藏', '冷藏2~3天內食用完畢'),
(9, '粉紅露比', 'Ruby Chocolate Pie', 1, 810, 1, 'Ruby巧克力，天然新種巧克力，無添加色素，天然粉紅色澤，完全顛覆巧克力的想像，融合北海道奶霜，清拂一抹微酸、微甜的莓果質調。底部派塔厚實酥脆，暗藏酥菠蘿增加咀嚼口感，與泡芙蛋糕、覆盆莓奶霜、卡士達交疊著多層次迷人滋味。', 'pr9-c', '北海道奶霜/Ruby巧克力甘納許/泡芙蛋糕/覆盆莓卡士達/酥菠蘿/派塔', '6吋', '葷食', '冷藏', '冷藏2~3天內食用完畢'),
(10, '酥菠蘿蘋果派', 'Apple Pie', 1, 520, 1, '青蘋果、糖和法國奶油拌炒過後讓蘋果的味道顯得軟綿、芳醇，搭配酥菠蘿獨特的香酥口感和香脆餅皮形成外酥內軟的口感，在尾韻輕飄散出來的肉桂香氣，自然芬芳不嗆鼻，是價格不斐的進口頂級錫蘭天然肉桂粉。', 'pr10-c', '炒蘋果/酥菠蘿/錫蘭肉桂粉/杏仁奶油派塔', '6吋', '蛋奶素', '冷藏', '冷藏3~4天內食用完畢'),
(11, '25度N檸檬派', 'Lemon Pie', 1, 570, 1, '嚴選屏東九如直輸無毒綠檸檬，新鮮現榨綠檸檬奶油餡，搭配細膩軟綿的炙燒檸檬蛋白霜與酥脆派皮，清新迷人的酸與甜平衡著味蕾，口感絕佳！', 'pr11-c', '酥菠蘿/新鮮檸檬奶油餡/檸檬蛋白霜/奶油派塔', '8吋', '蛋奶素', '冷藏', '冷藏2~3天內食用完畢'),
(12, ' 德國黑森林', 'Black Forest Cake', 1, 690, 1, '大人小孩都喜愛\r\n蛋糕膨鬆柔軟也很濕潤，有很濃的巧克力香氣。遇上夾層中的碎櫻桃鮮奶油餡後，整個口感更加輕盈，鼻間飄散著很輕很輕的櫻桃酒香。一點也不甜膩。', 'pr12-c', '巧克力泡芙蛋糕/酒釀碎櫻桃奶油/北海道奶霜/糖漬櫻桃', '6吋/ 8吋', '蛋奶素，含酒', '冷藏', '冷藏2天內食用完畢'),
(13, '沐嵐望月', 'Cool Breeze Moon Light', 2, 980, 1, '展開呈現猶如一幅水彩畫，四顆月餅展開後宛如層層山巒，金色的月亮在山的另一頭發出優雅光芒，月兔在彼端遙望，這次日式典雅設計以台灣山巒作為主題，中秋賞月與綿延的山景相互輝映出一幅珍貴的金色時光。', 'pr1-b', '芝麻×1/紅豆蛋黃×1/金鑽鳳梨×1/桂圓×1', '4入/盒', '葷食', '冷藏', '冷藏4~6天內食用完畢'),
(14, '藝術月餅禮盒', 'Art MoonCake', 2, 880, 1, '設計大奬的越南著名設計師明幸聯合推出獨家刺繡禮盒，一針一線刺繡出一幅畫作，讓現代及傳統藝術文化互相結合。禮盒以牡丹花為主，牡丹花象徵著富貴榮華，還有一隻青鳥象徵著幸福快樂。', 'pr2-b', '紅棗燕窩×1/鮑魚蓮子燉雞×2/彩虹月餅×2/如意小兔×2/晶沙酥×1', '8入/盒', '葷食', '冷藏', '冷藏4~6天內食用完畢'),
(15, '花樣手工餅乾禮盒', 'Handmade Cookie Collection', 2, 598, 1, '設計成「一小口」的餅乾，讓餅乾迷們更方便享用，小巧可愛的餅乾造型和包裝罐非常適合放在包包裡，隨時隨地來一片，享受片刻的療癒。', 'pr3-b', '高達起司×2+兔兔×1+捲餅乾×1+愛心糖霜×1+巧克力核桃×1', '6入/盒', '蛋奶素', '常溫', '常溫30天'),
(16, '法式手工餅乾禮盒', 'Handmade Biscuit', 2, 795, 1, '純手工製成\r\n特別挑選法國產區限定Isigny發酵奶油\r\n無論是香氣或口感都相當厚實，充滿著奶油獨特的芳香。', 'pr4-b', '義大利巧克力脆餅/瑪庫倫/杏仁瓦片/巧克力豆餅/燕麥葡萄餅/脆杏仁餅', '24片/盒', '蛋奶素', '常溫', '保存效期：30天'),
(17, '蝴蝶酥禮盒', 'Palmier Sucres', 2, 340, 1, '運用麵粉和法國產區限定Isigny發酵奶油揉合成層層堆疊的派皮，再佐糖粒一起經過高溫烘烤，形成略帶焦糖味的酥脆派餅，香酥爽口，甜而不膩。能同時享受到細緻的奶油香氣及糖粒帶來的層次口感。', 'pr5-b', '原味×5/香蒜×3/咖哩×2', '10片/盒', '葷食', '常溫', '常溫30天'),
(18, '喜Q餅禮盒', 'Traditional Taiwanese Flavor', 2, 350, 1, '5種鹹甜層次　緊緊抓住你的味蕾\r\n革新傳統手法，重新拿捏鹹甜平衡的絕佳比例。\r\n一口咬下，濃郁的芝麻香帶出內層甜中帶鹹的獨特滋味，肉質纖維與Ｑ彈麻糬交錯的層次口感，每一口都緊緊抓住你的味蕾！', 'pr6-b', '肉脯/萬丹紅豆/鹹鴨蛋蛋黃/日式麻糬/芋頭', '5入/盒', '葷食', '常溫', '常溫21天'),
(19, '春霓之美', 'Beauty Of Spring', 2, 1080, 1, '繡球花-希望和玫瑰-愛為設計主體， 透過水彩獨有的筆韻，描繪出春的淡雅綻放、春的玉枝粉蕊、和春的窈窕娟娟。', 'pr7-b', '檸檬餅乾/阿拉比卡咖啡/巧克力燕麥/黑芝麻/牛奶砂糖/巧克力/玉米片/檸檬球', '40片/盒', '蛋奶素', '常溫', '常溫28天'),
(20, '沐禾禮盒', 'Kiri Wooden', 2, 850, 1, '桐樹要能成為製品需要經過時間的淬鍊，最終製成堅而不摧的木盒寶盒，故在日本多將它做成盒子來保存貴重物品或寶物。所以KIRI(桐)木盒也象徵著：「存放於盒內的,無非是非常珍貴且重要的東西」。', 'pr8-b', '原味雪茄蛋捲 ×5、雙層白巧克力薄片 ×12', '17片/盒', '蛋奶素', '常溫', '常溫30天'),
(21, '至愛之美', 'Beauty Of Love', 2, 1460, 1, '彷彿一場盛大的饗宴，喜鵲飛舞齊唱，花朵嬌艷齊放，爭妍點綴，沿著醇粹彤紅的喜悅相互環繞，一齊歡慶馥郁的浪漫時刻。', 'pr9-b', '咖啡/巧克力燕麥/黑芝麻/牛奶砂糖/巧克力/玉米片/檸檬/檸檬球/香草愛心/巧克力愛心', '70片/盒', '蛋奶素', '常溫', '常溫30天'),
(22, '秋沐', 'Autumn Afternoon', 2, 550, 1, '以秋季午後為發想，夕陽般的橘紅色為底搭配著盛開的金黃月見草，點綴金色弧線劃過其中，將畫面停留在夕陽閃耀落下的瞬間。', 'pr10-b', '咖啡/巧克力燕麥/黑芝麻/牛奶砂糖/巧克力/玉米片/檸檬/檸檬球', '20片/盒', '蛋奶素', '常溫', '常溫30天'),
(23, '秋嵐', 'Autumn Arashi', 2, 680, 1, '靜謐帶點涼爽的午夜時分，火紅的楓葉自空中緩緩飄落，松果也在葉堆中悄悄滾動著，森林已為迎接秋季的來臨做好了準備。', 'pr11-b', '巧克力燕麥/黑芝麻/牛奶砂糖/巧克力/玉米片/檸檬', '38片/盒', '蛋奶素', '常溫', '常溫30天'),
(24, '老公公老婆婆', 'Grandpa And Grandma', 2, 1150, 1, '經典陶瓷罐，可愛的老公公婆婆造型，裝着各種口味的手工餅乾，食用完畢還可作為儲物罐或擺飾，送禮自用皆是優質選擇。', 'pr12-b', '咖啡/巧克力燕麥/黑芝麻/牛奶砂糖/巧克力/玉米片/檸檬', '42片/盒', '蛋奶素', '常溫', '常溫30天'),
(25, '泡菜維納斯', 'Kimuchi Venus', 3, 70, 1, '辣、甜、鹹在口中交織出全新滋味', 'pr1-p', '維也納香腸/韓式泡菜/乳酪絲/日式美乃滋/雞蛋/牛奶/澳洲奶油', '3入/包', '葷食', '冷藏', '冷藏1~2天內食用完畢'),
(26, '小可頌', 'Little Croissant', 3, 60, 1, '精選最香醇的天然奶油、雞蛋、牛奶和日製麵粉攪勻，經過十六層的反覆延壓，以低溫長時間發酵，完整釋放麥香。烘烤後再以蜂蜜點綴，外酥內軟、層次分明、奶香濃郁、蜜香四溢。', 'pr2-p', '蜂蜜/雞蛋/牛奶/澳洲奶油', '5入/包', '蛋奶素', '冷藏', '冷藏1~2天內食用完畢'),
(27, '經典可頌', 'Classic Croissant', 3, 50, 1, '精選可頌配上滿滿火腿與起司，給予一天所需能量', 'pr3-p', '火腿/起士/蜂蜜/日式美乃滋/雞蛋/牛奶/澳洲奶油', '單一個販賣', '葷食', '冷藏', '冷藏1~2天內食用完畢'),
(28, '波蘿鹽可頌', 'Pineapple  Salt Croissant', 3, 50, 1, '日式波蘿皮酥鬆甜香，與鹽可頌的天然麥香，融合出絕妙平衡的鹹甜滋味，底層經烘烤後的波蘿皮，更是有著如同現烤餅乾的獨特口感，越嚼越香。', 'pr4-p', '雞蛋/澳洲奶油/波蘿皮/海鹽', '單一個販賣', '蛋奶素', '冷藏', '冷藏1~2天內食用完畢'),
(29, '明太子法國', 'Mentaiko Baguette', 3, 55, 1, '將日本進口的珍貴鱈魚卵與澳洲天然奶油、日式美乃滋，調製成明太子醬，滿滿地抹在新鮮出爐的法國麵包上。鮮香、好吃、順口、有嚼勁，加熱後香氣滿溢，更是酥香誘人。', 'pr5-p', '日本鱈魚卵/洋香菜/日式美乃滋/澳洲奶油', '單一個販賣', '葷食', '冷藏', '冷藏1~2天內食用完畢'),
(30, '法式蛋汁燒', 'French Toast', 3, 60, 1, '經典法式吐司鹹甜口味，為一天帶來滿滿活力', 'pr6-p', '北海道牛奶麵包、雞蛋、澳洲奶油', '3入/包', '蛋奶素', '冷藏', '冷藏1~2天內食用完畢'),
(31, '法國香蒜', 'Baguette With  Garlic sauce', 3, 40, 1, '單純無添加的法式麵包，出爐後於內外皆塗抹上厚厚的自家特製香蒜醬，再進一次烤爐去除蒜頭嗆辣並逼出蒜香氣味，鹹香不膩口。', 'pr7-p', '自製香蒜醬/澳洲奶油', '單一個販賣', '葷食', '冷藏', '冷藏1~2天內食用完畢'),
(32, '黑旋風吐司', 'Oreo Toast', 3, 80, 1, '軟綿滑順的巧克力蛋糕，遇上濕柔Q彈的嫩吐司，中間佈滿著OREO餅乾的醇香；細緻迷人的巧克力絲滑香濃，於唇齒間輕巧地化開、流竄，芳香的可可擁抱著味蕾，讓口、舌、喉、鼻…全面浸潤在巧克力甘甜醉人的世界裏!', 'pr8-p', 'OREO餅乾/可可粉/雞蛋/牛奶/澳洲奶油', '3厚片/包', '蛋奶素', '冷藏', '冷藏4~5天內食用完畢'),
(33, '紅寶石吐司', 'Ruby Toast', 3, 80, 1, '蛋香四溢的戚風蛋糕和杏仁片出席了Q嫩吐司的聚會!舌尖在雪白綿柔的吐司中尋寶，猶如紅寶石般的蔓越莓不斷地驚喜出現，酸酸甜甜的果香，搭上酥脆甜香的自製特調奶酥餡，一口奶甜、一口微酸、一口細綿、一口香嫩。', 'pr9-p', '優鮮沛蔓越莓/自製奶酥/杏仁片/雞蛋/澳洲奶油', '3厚片/包', '蛋奶素', '冷藏', '冷藏4~5天內食用完畢'),
(34, '抹茶戀人', 'Matcha Strawberry Toast', 3, 100, 1, '果紅、茶綠相間，外型洋溢著盎然青春氣息。清新芬芳的抹茶蛋糕，搭上被滿滿草莓果醬包圍、淪陷的Q嫩吐司，果香甜潤、香柔馥郁，靜岡抹茶粉微帶苦味的茶香，搭配自家熬煮卡士達，中和了草莓果醬的甜。', 'pr10-p', '靜岡抹茶粉/草莓醬/卡士達/雞蛋/牛奶/澳洲奶油', '3厚片/包', '蛋奶素', '冷藏', '冷藏2~3天內食用完畢'),
(35, '藍莓乳酪', 'Blueberry Cheese', 3, 40, 1, '帶有微微發酵酸味的澳洲天然乳酪，搭配莓果香味濃郁的野生小藍莓。特殊低溫烘焙的技法，口感Q軟又帶著一點嚼勁，搭配爆多乳酪的濃滑細綿，酷愛奶酸味的你一定會愛上它。', 'pr11-p', '野生小藍莓/澳洲乳酪/雞蛋/澳洲奶油', '單一個販賣', '蛋奶素', '冷藏', '冷藏2~3天內食用完畢'),
(36, '熔岩卡士達', 'Lava Caska', 3, 60, 1, '不同於傳統卡士達麵包的作法，在內餡中加入更高比例的牛奶，並以特殊技法將雙倍內餡包覆其中。體積小巧，但內裏飽滿紮實，咬入口中即有香濃奶香飄散口中，宛如品嘗著包覆了滿滿冰淇淋的爆漿小餐包。', 'pr12-p', '雞蛋/牛奶/澳洲奶油', '3入/包', '蛋奶素', '冷藏', '冷藏6~7天內食用完畢');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;