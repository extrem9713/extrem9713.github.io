<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/logo.png" type="image/png" sizes="72x72">
  <link rel="stylesheet" href="swiper/dist/css/swiper.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/red.css">
  <link rel="stylesheet" href="css/white.css">
  <link rel="stylesheet" href="css/green.css">
  <link rel="stylesheet" href="css/black.css">
  <link rel="stylesheet" href="css/curry.css">
  <link rel="stylesheet" href="css/sha.css">
  <link rel="stylesheet" href="css/chief.css">
  <link rel="stylesheet" href="css/potato.css">
  <link rel="stylesheet" href="css/red-b.css">
  <link rel="stylesheet" href="css/white-b.css">
  <link rel="stylesheet" href="css/green-b.css">
  <link rel="stylesheet" href="css/black-b.css">
  <link rel="stylesheet" href="css/curry-b.css">
  <link rel="stylesheet" href="css/sha-b.css">
  <link rel="stylesheet" href="css/soup.css">
  <link rel="stylesheet" href="css/desert.css">
  <link rel="stylesheet" href="css/portrait.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>小順豐訂餐系統</title>
</head>
<style media="screen">
#showbox{
  width:10vw;
  height:10vh;
}

</style>
<?php
    $file = 'order.txt'; //訂單資料檔
    $current = file_get_contents($file); //讀出舊資料
    date_default_timezone_set("Asia/Taipei"); //設定時區，要在php-log裏輸出時間，把時區調到Taipei
    if(isset($_POST['order'])){ //如果有傳進order的話
      $current .= $_POST['order']." ".date("Y-m-d h:i:sa")."\r\n"; //將除錯資訊加到檔後端
    }
    file_put_contents($file, $current); //輸出檔案
  ?>

<body>
  <dialog open>
    <div id="lunch">
      <div class="popup">
        <h3>小順豐 東海店</h3>
        <marquee style="color:red">10點後停止訂餐功能喔!</marquee>

        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">

              <div id="red">
                <h2>茄汁(燴飯or燴麵)</h2>

                <div class="meal-options">
                  <div class="meal-option">
                    <div class="meal-pic " id="茄汁_夏威夷蝦仁 70" style="background-color:#ff6347" onclick="addcheckmark('茄汁_夏威夷蝦仁 70');"></div>
                    <h5>夏威夷蝦仁  70</h5>
                  </div>
                  <div class="meal-option">
                    <div class="meal-pic " id="茄汁_海鮮 70" style="background-color:#ff6347" onclick="addcheckmark('茄汁_海鮮 70');"></div>
                    <h5>茄汁海鮮  70</h5>
                  </div>
                  <div class="meal-option">
                    <div class="meal-pic " id="茄汁_鱈魚 60" style="background-color:#ff6347" onclick="addcheckmark('茄汁_鱈魚 60');"></div>
                    <h5>茄汁鱈魚  60</h5>
                  </div>
                  <div class="meal-option">
                    <div class="meal-pic " id="茄汁_火腿鳳梨 50" style="background-color:#ff6347" onclick="addcheckmark('茄汁_火腿鳳梨 50');"></div>
                    <h5>火腿鳳梨  50</h5>
                  </div>
                  <div class="meal-option">
                    <div class="meal-pic " id="茄汁_里肌蘑菇 50" style="background-color:#ff6347" onclick="addcheckmark('茄汁_里肌蘑菇 50');"></div>
                     <h5>里肌蘑菇  50</h5>
                    </div>
                    <div class="meal-option">
                      <div class="meal-pic " id="茄汁_義大利肉醬 45" style="background-color:#ff6347" onclick="addcheckmark('茄汁_義大利肉醬 45');"></div>
                      <h5>義大利肉醬  45</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="茄汁_玉米燻雞 45" style="background-color:#ff6347" onclick="addcheckmark('茄汁_玉米燻雞 45');"> </div>
                        <h5>玉米燻雞  45</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="茄汁_鮭魚 70" style="background-color:#ff6347" onclick="addcheckmark('茄汁_鮭魚 70');"> </div>
                          <h5>鮭魚 70</h5>
                          </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="茄汁_日式雞腿 65" style="background-color:#ff6347"onclick="addcheckmark('茄汁_日式雞腿 65');"></div>
                          <h5>日式雞腿  65</h5>
                          </div>
                          <div class="meal-option">
                            <div class="meal-pic " id="茄汁_唐揚雞 65" style="background-color:#ff6347" onclick="addcheckmark('茄汁_唐揚雞 65');"></div>
                            <h5>唐揚雞  65</h5>
                            </div>

                            <div class="meal-selection">
                              <div class="meal-type">
                                <div class="type" id="燴飯_茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('燴飯_茄汁');"></div>
                                <h5>燴飯</h5>
                                </div>
                                <div class="meal-type">
                                  <div class="type " id="燴麵_茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('燴麵_茄汁');"> </div>
                                  <h5>燴麵</h5>
                                  </div>
                            </div>


                    </div>

                  </div>

                </div>
                <div class="swiper-slide">
                  <div id="white">
                    <h2>奶油(燴飯or燴麵)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic" id="奶油_煙燻德國香腸 65" style="background-color:#FFBB00" onclick="addcheckmark('奶油_煙燻德國香腸 65');"></div>
                        <h5>煙燻德國香腸  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic" id="奶油_雞肉鮮菇 50" style="background-color:#FFBB00" onclick="addcheckmark('奶油_雞肉鮮菇 50');"></div>
                        <h5>雞肉鮮菇  50</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_泡菜海鮮 80" style="background-color:#FFBB00" onclick="addcheckmark('奶油_泡菜海鮮 80');"></div>
                        <h5>泡菜海鮮  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_泡菜雞肉 60" style="background-color:#FFBB00" onclick="addcheckmark('奶油_泡菜雞肉 60');"></div>
                        <h5>泡菜雞肉  60</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_泡菜豬肉 60" style="background-color:#FFBB00" onclick="addcheckmark('奶油_泡菜豬肉 60');"></div>
                        <h5>泡菜豬肉  60</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_鮭魚 70" style="background-color:#FFBB00" onclick="addcheckmark('奶油_鮭魚 70');"></div>
                        <h5>鮭魚 70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_日式雞腿 65" style="background-color:#FFBB00" onclick="addcheckmark('奶油_日式雞腿 65');"></div>
                        <h5>日式雞腿  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_唐揚雞 65" style="background-color:#FFBB00" onclick="addcheckmark('奶油_唐揚雞 65');"></div>
                        <h5>唐揚雞 65</h5>
                      </div>


                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="燴飯_奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('燴飯_奶油');"></div>
                          <h5>燴飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="燴麵_奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('燴麵_奶油');"> </div>
                            <h5>燴麵</h5>
                            </div>
                      </div>


                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                  <div id="green">
                    <h2>羅勒(燴飯or燴麵)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_海鮮 75" style="background-color:#00db00" onclick="addcheckmark('羅勒_海鮮 75');"></div>
                        <h5>羅勒海鮮  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_蝦仁 75" style="background-color:#00db00" onclick="addcheckmark('羅勒_蝦仁 75');"></div>
                        <h5>羅勒蝦仁  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_鱈魚 65" style="background-color:#00db00" onclick="addcheckmark('羅勒_鱈魚 65');"></div>
                        <h5>羅勒鱈魚  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_雞肉 55" style="background-color:#00db00" onclick="addcheckmark('羅勒_雞肉 55');"></div>
                        <h5>羅勒雞肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_豬肉 55" style="background-color:#00db00" onclick="addcheckmark('羅勒_豬肉 55');"></div>
                        <h5>羅勒豬肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_鮭魚 70" style="background-color:#00db00" onclick="addcheckmark('羅勒_鮭魚 70');"></div>
                        <h5>鮭魚 70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_日式雞腿 65" style="background-color:#00db00" onclick="addcheckmark('羅勒_日式雞腿 65');"></div>
                        <h5>日式雞腿  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_唐揚雞 65" style="background-color:#00db00" onclick="addcheckmark('羅勒_唐揚雞 65');"></div>
                        <h5>唐揚雞 65</h5>
                      </div>

                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="燴飯_羅勒" style="background-color:#00db00" onclick="addtypecheckmark('燴飯_羅勒');"></div>
                          <h5>燴飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="燴麵_羅勒" style="background-color:#00db00" onclick="addtypecheckmark('燴麵_羅勒');"> </div>
                            <h5>燴麵</h5>
                            </div>
                      </div>

                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                  <div id="black">
                    <h2>黑胡椒(燴飯or燴麵)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_海陸 75" style="background-color:#804040" onclick="addcheckmark('黑胡椒_海陸 75');"></div>
                        <h5>黑胡椒海陸  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_雞肉 55" style="background-color:#804040" onclick="addcheckmark('黑胡椒_雞肉 55');"></div>
                        <h5>黑胡椒雞肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_豬肉 55" style="background-color:#804040" onclick="addcheckmark('黑胡椒_豬肉 55');"></div>
                        <h5>黑胡椒豬肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_鮭魚 70" style="background-color:#804040" onclick="addcheckmark('黑胡椒_鮭魚 70');"></div>
                        <h5>鮭魚 70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_日式雞腿 65" style="background-color:#804040" onclick="addcheckmark('黑胡椒_日式雞腿 65');"></div>
                        <h5>日式雞腿  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_唐揚雞 65" style="background-color:#804040" onclick="addcheckmark('黑胡椒_唐揚雞 65');"></div>
                        <h5>唐揚雞 65</h5>
                      </div>

                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="燴飯_黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('燴飯_黑胡椒');"></div>
                          <h5>燴飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="燴麵_黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('燴麵_黑胡椒');"> </div>
                            <h5>燴麵</h5>
                            </div>
                        </div>

                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                  <div id="curry">
                    <h2>咖哩(燴飯or燴麵)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_蝦仁 75" style="background-color:#daa520" onclick="addcheckmark('咖哩_蝦仁 75');"></div>
                        <h5>咖哩蝦仁  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_鱈魚 65" style="background-color:#daa520" onclick="addcheckmark('咖哩_鱈魚 65');"></div>
                        <h5>咖哩鱈魚  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_雞肉 50" style="background-color:#daa520" onclick="addcheckmark('咖哩_雞肉 50');"></div>
                        <h5>咖哩雞肉  50</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_豬肉 50" style="background-color:#daa520" onclick="addcheckmark('咖哩_豬肉 50');"></div>
                        <h5>咖哩豬肉  50</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_鮭魚 70" style="background-color:#daa520" onclick="addcheckmark('咖哩_鮭魚 70');"></div>
                        <h5>鮭魚 70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_日式雞腿 65" style="background-color:#daa520" onclick="addcheckmark('咖哩_日式雞腿 65');"></div>
                        <h5>日式雞腿  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_唐揚雞 65" style="background-color:#daa520" onclick="addcheckmark('咖哩_唐揚雞 65');"></div>
                        <h5>唐揚雞 65</h5>
                      </div>

                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="燴飯_咖哩" style="background-color:#daa520" onclick="addtypecheckmark('燴飯_咖哩');"></div>
                          <h5>燴飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="燴麵_咖哩" style="background-color:#daa520" onclick="addtypecheckmark('燴麵_咖哩');"> </div>
                            <h5>燴麵</h5>
                            </div>
                        </div>


                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                  <div id="sha">
                    <h2>沙茶(燴飯or燴麵)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_雞肉 55" style="background-color:#4D3900" onclick="addcheckmark('沙茶_雞肉 55');"></div>
                        <h5>沙茶雞肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_豬肉 55" style="background-color:#4D3900" onclick="addcheckmark('沙茶_豬肉 55');"></div>
                        <h5>沙茶豬肉  55</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_鱈魚 65" style="background-color:#4D3900" onclick="addcheckmark('沙茶_鱈魚 65');"></div>
                        <h5>沙茶鱈魚  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_海鮮 75" style="background-color:#4D3900" onclick="addcheckmark('沙茶_海鮮 75');"></div>
                        <h5>沙茶海鮮  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_德式香腸 65" style="background-color:#4D3900" onclick="addcheckmark('沙茶_德式香腸 65');"></div>
                        <h5>沙茶德式香腸  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_蝦仁 75" style="background-color:#4D3900" onclick="addcheckmark('沙茶_蝦仁 75');"></div>
                        <h5>沙茶蝦仁  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_鮭魚 70" style="background-color:#4D3900" onclick="addcheckmark('沙茶_鮭魚 70');"></div>
                        <h5>鮭魚 70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_日式雞腿 65" style="background-color:#4D3900" onclick="addcheckmark('沙茶_日式雞腿 65');"></div>
                        <h5>日式雞腿  65</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_唐揚雞 65" style="background-color:#4D3900" onclick="addcheckmark('沙茶_唐揚雞 65');"></div>
                        <h5>唐揚雞 65</h5>
                      </div>

                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="燴飯_沙茶" style="background-color:#4D3900" onclick="addtypecheckmark('燴飯_沙茶');"></div>
                          <h5>燴飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="燴麵_沙茶" style="background-color:#4D3900" onclick="addtypecheckmark('燴麵_沙茶');"> </div>
                            <h5>燴麵</h5>
                            </div>
                        </div>

                    </div>
                  </div>

                </div>

                <div class="swiper-slide">
                  <div id="chief">
                    <h2>焗烤漢堡排</h2>
                    <div class="meal-options">

                      <div class="meal-option">
                        <div class="meal-pic " id="茄汁_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('茄汁_焗烤漢堡排  80');"></div>
                        <h5>茄汁  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('奶油_焗烤漢堡排  80');"></div>
                        <h5>奶油  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('羅勒_焗烤漢堡排  80');"></div>
                        <h5>羅勒  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('咖哩_焗烤漢堡排  80');"></div>
                        <h5>咖哩  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('黑胡椒_焗烤漢堡排  80');"></div>
                        <h5>黑胡椒  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_焗烤漢堡排  80" style="background-color:#cccc4d" onclick="addcheckmark('沙茶_焗烤漢堡排  80');"></div>
                        <h5>沙茶  80</h5>
                      </div>

                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="飯" style="background-color:#cccc4d" onclick="addtypecheckmark('飯');"></div>
                          <h5>飯</h5>
                          </div>
                          <div class="meal-type">
                            <div class="type " id="麵" style="background-color:#cccc4d" onclick="addtypecheckmark('麵');"> </div>
                            <h5>麵</h5>
                            </div>
                        </div>

                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                    <div id="potato">
                      <h2>義式起司洋芋</h2>
                      <div class="meal-options">
                        <div class="meal-option">
                         <div class="meal-pic " id="綜合起司洋芋 60" style="background-color:#e69966" onclick="addcheckmark('綜合起司洋芋 60');"></div>
                         <h5>綜合起司  60</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="德式香腸洋芋 55" style="background-color:#e69966" onclick="addcheckmark('德式香腸洋芋 55');"></div>
                         <h5>德式香腸  55</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="香腸起司洋芋 45" style="background-color:#e69966" onclick="addcheckmark('香腸起司洋芋 45');"></div>
                         <h5>香腸起司  45</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="培根起司洋芋 50" style="background-color:#e69966" onclick="addcheckmark('培根起司洋芋 50');"></div>
                         <h5>培根起司  50</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="燻雞起司洋芋 50" style="background-color:#e69966" onclick="addcheckmark('燻雞起司洋芋 50');"></div>
                         <h5>燻雞起司  50</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="火腿起司洋芋 40" style="background-color:#e69966" onclick="addcheckmark('火腿起司洋芋 40');"></div>
                         <h5>火腿起司  40</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="玉米起司洋芋 40" style="background-color:#e69966" onclick="addcheckmark('玉米起司洋芋 40');"></div>
                         <h5>玉米起司  40</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="雙層起司洋芋 45" style="background-color:#e69966" onclick="addcheckmark('雙層起司洋芋 45');"></div>
                         <h5>雙層起司  45</h5>
                       </div>
                       <div class="meal-option">
                         <div class="meal-pic " id="花椰菜起司洋芋 50" style="background-color:#e69966" onclick="addcheckmark('花椰菜起司洋芋 50');"></div>
                         <h5>花椰菜起司  50</h5>
                       </div>
                      </div>
                    </div>





                </div>
                <div class="swiper-slide">

                  <div id="red-b">
                    <h2>茄汁(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤茄汁_夏威夷蝦仁 90" style="background-color:#ff6347" onclick="addcheckmark('焗烤茄汁_夏威夷蝦仁 90');"></div>
                        <h5>夏威夷蝦仁  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤茄汁_培根蘑菇 70" style="background-color:#ff6347" onclick="addcheckmark('焗烤茄汁_培根蘑菇 70');"></div>
                        <h5>培根蘑菇  70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤茄汁_洋蔥里肌 70" style="background-color:#ff6347" onclick="addcheckmark('焗烤茄汁_洋蔥里肌 70');"></div>
                        <h5>洋蔥里肌  70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤茄汁_香腸鳳梨 70" style="background-color:#ff6347" onclick="addcheckmark('焗烤茄汁_香腸鳳梨 70');"></div>
                        <h5>香腸鳳梨  70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤茄汁_玉米燻雞 70" style="background-color:#ff6347" onclick="addcheckmark('焗烤茄汁_玉米燻雞 70');"></div>
                        <h5>玉米燻雞  70</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type " id="飯_焗烤茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('飯_焗烤茄汁');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('麵_焗烤茄汁');"> </div>
                            <h4>麵</h4>
                            </div>
                            <div class="meal-type">
                              <div class="type" id="洋芋_焗烤茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('洋芋_焗烤茄汁');"> </div>
                              <h4>洋芋</h4>
                              </div>
                              <div class="meal-type">
                                <div class="type" id="小披薩_焗烤茄汁" style="background-color:#ff6347" onclick="addtypecheckmark('小披薩_焗烤茄汁');"> </div>
                                <h4>小披薩</h4>
                                </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="swiper-slide">
                  <div id="white-b">
                    <h2>奶油(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_海鮮總匯 90" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_海鮮總匯 90');"></div>
                        <h5>海鮮總匯  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_蝦仁 90" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_蝦仁 90');"></div>
                        <h5>奶油蝦仁  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_鱈魚 80" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_鱈魚 80');"></div>
                        <h5>鱈魚  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_煙燻德國香腸 80" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_煙燻德國香腸 80');"></div>
                        <h5>煙燻德國香腸  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_雞肉鮮菇 70" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_雞肉鮮菇 70');"></div>
                        <h5>雞肉鮮菇  70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_鮪魚玉米 70" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_鮪魚玉米 70');"></div>
                        <h5>鮪魚玉米  70</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_泡菜海鮮 100" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_泡菜海鮮 100');"></div>
                        <h5>泡菜海鮮  100</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_泡菜雞肉 80" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_泡菜雞肉 80');"></div>
                        <h5>泡菜雞肉  80</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤奶油_泡菜豬肉 80" style="background-color:#FFBB00" onclick="addcheckmark('焗烤奶油_泡菜豬肉 80');"></div>
                        <h5>泡菜豬肉  80</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('飯_焗烤奶油');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('麵_焗烤奶油');"> </div>
                            <h4>麵</h4>
                            </div>
                            <div class="meal-type">
                              <div class="type" id="洋芋_焗烤奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('洋芋_焗烤奶油');"> </div>
                              <h4>洋芋</h4>
                              </div>
                              <div class="meal-type">
                                <div class="type" id="小披薩_焗烤奶油" style="background-color:#FFBB00" onclick="addtypecheckmark('小披薩_焗烤奶油');"> </div>
                                <h4>小披薩</h4>
                                </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="swiper-slide">




                  <div id="green-b">
                    <h2>羅勒(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_海鮮 95" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_海鮮 95');"></div>
                          <h5>羅勒海鮮  95</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_蝦仁 95" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_蝦仁 95');"></div>
                          <h5>羅勒蝦仁  95</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_鱈魚 85" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_鱈魚 85');"></div>
                          <h5>羅勒鱈魚  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_雞肉 75" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_雞肉 75');"></div>
                          <h5>羅勒雞肉  75</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_豬肉 75" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_豬肉 75');"></div>
                          <h5>羅勒豬肉  75</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="焗烤羅勒_素食鮮菇 80" style="background-color:#00db00" onclick="addcheckmark('焗烤羅勒_素食鮮菇 80');"></div>
                          <h5>素食鮮菇  80</h5>
                        </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤羅勒" style="background-color:#00db00" onclick="addtypecheckmark('飯_焗烤羅勒');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤羅勒" style="background-color:#00db00" onclick="addtypecheckmark('麵_焗烤羅勒');"> </div>
                            <h4>麵</h4>
                            </div>
                            <div class="meal-type">
                              <div class="type" id="洋芋_焗烤羅勒" style="background-color:#00db00" onclick="addtypecheckmark('洋芋_焗烤羅勒');"> </div>
                              <h4>洋芋</h4>
                              </div>
                              <div class="meal-type">
                                <div class="type" id="小披薩_焗烤羅勒" style="background-color:#00db00" onclick="addtypecheckmark('小披薩_焗烤羅勒');"> </div>
                                <h4>小披薩</h4>
                                </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">

                  <div id="black-b">
                    <h2>黑胡椒(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤黑胡椒_海陸 95" style="background-color:#804040" onclick="addcheckmark('焗烤黑胡椒_海陸 95');"></div>
                        <h5>黑胡椒海陸  95</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤黑胡椒_雞肉 75" style="background-color:#804040" onclick="addcheckmark('焗烤黑胡椒_雞肉 75');"></div>
                        <h5>黑胡椒雞肉  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤黑胡椒_豬肉 75" style="background-color:#804040" onclick="addcheckmark('焗烤黑胡椒_豬肉 75');"></div>
                        <h5>黑胡椒豬肉  75</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('飯_焗烤黑胡椒');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('麵_焗烤黑胡椒');"> </div>
                            <h4>麵</h4>
                            </div>
                            <div class="meal-type">
                              <div class="type" id="洋芋_焗烤黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('洋芋_焗烤黑胡椒');"> </div>
                              <h4>洋芋</h4>
                              </div>
                              <div class="meal-type">
                                <div class="type" id="小披薩_焗烤黑胡椒" style="background-color:#804040" onclick="addtypecheckmark('小披薩_焗烤黑胡椒');"> </div>
                                <h4>小披薩</h4>
                                </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="swiper-slide">

                  <div id="curry-b">
                    <h2>咖哩(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤咖哩_蝦仁 95" style="background-color:#daa520" onclick="addcheckmark('焗烤咖哩_蝦仁 95');"></div>
                        <h5>咖哩蝦仁  95</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤咖哩_雞肉 75" style="background-color:#daa520" onclick="addcheckmark('焗烤咖哩_雞肉 75');"></div>
                        <h5>咖哩雞肉  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤咖哩_豬肉 75" style="background-color:#daa520" onclick="addcheckmark('焗烤咖哩_豬肉 75');"></div>
                        <h5>咖哩豬肉  75</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤咖哩" style="background-color:#daa520" onclick="addtypecheckmark('飯_焗烤咖哩');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗焗烤咖哩" style="background-color:#daa520" onclick="addtypecheckmark('麵_焗焗烤咖哩');"> </div>
                            <h4>麵</h4>
                            </div>
                            <div class="meal-type">
                              <div class="type" id="洋芋_焗烤咖哩" style="background-color:#daa520" onclick="addtypecheckmark('洋芋_焗烤咖哩');"> </div>
                              <h4>洋芋</h4>
                              </div>
                              <div class="meal-type">
                                <div class="type" id="小披薩_焗烤咖哩" style="background-color:#daa520" onclick="addtypecheckmark('小披薩_焗烤咖哩');"> </div>
                                <h4>小披薩</h4>
                                </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="swiper-slide">

                  <div id="sha-b">
                    <h2>沙茶(焗烤)</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_雞肉 75" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_雞肉 75');"></div>
                        <h5>沙茶雞肉  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_豬肉 75" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_豬肉 75');"></div>
                        <h5>沙茶豬肉  75</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_鱈魚 85" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_鱈魚 85');"></div>
                        <h5>沙茶鱈魚  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_海鮮 95" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_海鮮 95');"></div>
                        <h5>沙茶海鮮  95</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_德式香腸 85" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_德式香腸 85');"></div>
                        <h5>沙茶德式香腸  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="焗烤沙茶_蝦仁 95" style="background-color:#4D3900" onclick="addcheckmark('焗烤沙茶_蝦仁 95');"></div>
                        <h5>沙茶蝦仁  95</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤沙茶" style="background-color:#4D3900" onclick="addtypecheckmark('飯_焗烤沙茶');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤沙茶" style="background-color:#4D3900" onclick="addtypecheckmark('麵_焗烤沙茶');"> </div>
                            <h4>麵</h4>
                            </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="swiper-slide">

                  <div id="sha-b">
                    <h2>焗烤鮭魚</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="茄汁_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('茄汁_焗烤鮭魚 90');"></div>
                        <h5>茄汁  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('奶油_焗烤鮭魚 90');"></div>
                        <h5>奶油  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('羅勒_焗烤鮭魚 90');"></div>
                        <h5>羅勒  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('黑胡椒_焗烤鮭魚 90');"></div>
                        <h5>黑胡椒  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('咖哩_焗烤鮭魚 90');"></div>
                        <h5>咖哩  90</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_焗烤鮭魚 90" style="background-color:#FA8072" onclick="addcheckmark('沙茶_焗烤鮭魚 90');"></div>
                        <h5>沙茶  90</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤鮭魚" style="background-color:#FA8072" onclick="addtypecheckmark('飯_焗烤鮭魚');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤鮭魚" style="background-color:#FA8072" onclick="addtypecheckmark('麵_焗烤鮭魚');"> </div>
                            <h4>麵</h4>
                            </div>

                      </div>
                    </div>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div id="sha-b">
                    <h2>焗烤日式雞腿</h2>
                    <div class="meal-options">
                        <div class="meal-option">
                          <div class="meal-pic " id="茄汁_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('茄汁_焗烤日式雞腿 85');"></div>
                          <h5>茄汁  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="奶油_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('奶油_焗烤日式雞腿 85');"></div>
                          <h5>奶油  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="羅勒_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('羅勒_焗烤日式雞腿 85');"></div>
                          <h5>羅勒  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="黑胡椒_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('黑胡椒_焗烤日式雞腿 85');"></div>
                          <h5>黑胡椒  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="咖哩_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('咖哩_焗烤日式雞腿 85');"></div>
                          <h5>咖哩  85</h5>
                        </div>
                        <div class="meal-option">
                          <div class="meal-pic " id="沙茶_焗烤日式雞腿 85" style="background-color:#996B1F" onclick="addcheckmark('沙茶_焗烤日式雞腿 85');"></div>
                          <h5>沙茶  85</h5>
                        </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤日式雞腿" style="background-color:#996B1F" onclick="addtypecheckmark('飯_焗烤日式雞腿');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤日式雞腿" style="background-color:#996B1F" onclick="addtypecheckmark('麵_焗烤日式雞腿');"> </div>
                            <h4>麵</h4>
                            </div>

                      </div>
                    </div>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div id="sha-b">
                    <h2>焗烤唐揚雞</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="茄汁_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('茄汁_焗烤唐揚雞 85');"></div>
                        <h5>茄汁  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('奶油_焗烤唐揚雞 85');"></div>
                        <h5>奶油  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="羅勒_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('羅勒_焗烤唐揚雞 85');"></div>
                        <h5>羅勒  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="黑胡椒_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('黑胡椒_焗烤唐揚雞 85');"></div>
                        <h5>黑胡椒  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="咖哩_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('咖哩_焗烤唐揚雞 85');"></div>
                        <h5>咖哩  85</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="沙茶_焗烤唐揚雞 85" style="background-color:#d26900" onclick="addcheckmark('沙茶_焗烤唐揚雞 85');"></div>
                        <h5>沙茶  85</h5>
                      </div>



                      <div class="meal-selection">
                        <div class="meal-type">
                          <div class="type" id="飯_焗烤唐揚雞" style="background-color:#d26900" onclick="addtypecheckmark('飯_焗烤唐揚雞');"></div>
                          <h4>飯</h4>
                          </div>
                          <div class="meal-type">
                            <div class="type" id="麵_焗烤唐揚雞" style="background-color:#d26900" onclick="addtypecheckmark('麵_焗烤唐揚雞');"> </div>
                            <h4>麵</h4>
                            </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="swiper-slide">

                  <div id="soup">
                    <h2>濃湯</h2>
                    <div class="meal-options">
                      <div class="meal-option">
                        <div class="meal-pic " id="雞蓉玉米濃湯 20" style="background-color:#E6B800" onclick="addsoupcheckmark('雞蓉玉米濃湯 20');"></div>
                        <h5>雞蓉玉米濃湯  20</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="奶油海鮮濃湯 20" style="background-color:#E6B800" onclick="addsoupcheckmark('奶油海鮮濃湯 20');"></div>
                        <h5>奶油海鮮濃湯  20</h5>
                      </div>

                    </div>
                  </div>

                </div>


                <div class="swiper-slide">

                  <div id="desert">
                    <h2>沙拉與甜點</h2>
                    <div class="meal-options">

                      <div class="meal-option">
                        <div class="meal-pic " id="主廚綜合沙拉(和風醬) 40" style="background-color:#FFB7DD" onclick="addsaladcheckmark('主廚綜合沙拉(和風醬) 40');"></div>
                        <h5>和風醬沙拉  40</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic " id="主廚綜合沙拉(千島醬) 40" style="background-color:#FFB7DD" onclick="addsaladcheckmark('主廚綜合沙拉(千島醬) 40');"></div>
                        <h5>千島醬沙拉  40</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic meal-pic-m" id="重口味起司蛋糕 35" style="background-color:#FFB7DD" onclick="adddesertcheckmark('重口味起司蛋糕 35');"></div>
                        <h5>起司蛋糕  35</h5>
                      </div>
                      <div class="meal-option meal-pic-m">
                        <div class="meal-pic meal-pic-m" id="紅豆奶酪 20" style="background-color:#FFB7DD" onclick="adddesertcheckmark('紅豆奶酪 20');"></div>
                        <h5>紅豆奶酪  20</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic meal-pic-m" id="手工鮮奶布丁 20" style="background-color:#FFB7DD" onclick="adddesertcheckmark('手工鮮奶布丁 20');"></div>
                        <h5>手工鮮奶布丁  20</h5>
                      </div>
                      <div class="meal-option">
                        <div class="meal-pic meal-pic-m" id="提拉米蘇 30" style="background-color:#FFB7DD" onclick="adddesertcheckmark('提拉米蘇 30');"></div>
                        <h5>提拉米蘇  30</h5>
                      </div>

                      <div id="selection-mode">
                        <button id="desert-ms" class="button " type="button" value="0" name="desert-ms"  onclick="desertselectionmode();">多選甜點 off</button>

                      </div>




                    </div>
                  </div>

                </div>


              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

            <div id="submit-meal">
              <h2>學號或姓名:</h2>
              <div>
                <textarea name="order" id="order" class="font" autofocus></textarea>
              </div>
              <div id="send"><img src="images/send.png" onclick="submitorder();" class="sendpic"></div>
              <a href="#" onclick="ordercheck()"><p style="font-size:calc(7px + 1.2vw);">訂單查詢</p></a>
              <a href="#" onclick="javascript:window.location.reload()"><pre style="font-family:dfkai-sb; font-size:calc(7px + 1.2vw"> 重置</pre></a>
            </div>
              <div id="showbox"></div>

          </div>
        </div>
  </dialog>
  <script src="../swiper/dist/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop:true,
      pagination: {
        el: '.swiper-pagination',
          dynamicBullets: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    function ajax(object){
      var request = new XMLHttpRequest();
      request.open("POST", "index.php");
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      request.send(objectToString(object));
    }


    function objectToString(object){
      let str = "";
      Object.keys(object).forEach(function(key){
          str += key;
          str += `=${object[key]}&`;
      });
      console.log(str)
      return str;
    }




    var foodchoice='';
    function addcheckmark(meal_name){
      //刪除原有checkmark
      var checkmarks=document.getElementsByClassName("checkmark");
      for(i=0;i<checkmarks.length;i++){
        checkmarks[i].parentNode.removeChild(checkmarks[i]);
      }
      foodchoice=meal_name;


     //增加checkmark
      var mealpics=document.getElementsByClassName("meal-pic");
      for(i=0;i<mealpics.length;i++){
        if(mealpics[i].id==meal_name){
          mealpics[i].innerHTML="<i class='fas fa-check checkmark'></i>";
        }
      }
    }

  //soup
    var soupchoice='';
    function addsoupcheckmark(soup_name){
      //刪除原有checkmark
      var soups=document.getElementsByClassName("soup");
      for(i=0;i<soups.length;i++){
        soups[i].parentNode.removeChild(soups[i]);
      }
      soupchoice=soup_name;


     //增加checkmark
      var mealpics=document.getElementsByClassName("meal-pic");
      for(i=0;i<mealpics.length;i++){
        if(mealpics[i].id==soup_name){
          mealpics[i].innerHTML="<i class='fas fa-check checkmark soup'></i>";
        }
      }
    }
//salad
    var saladchoice='';
    function addsaladcheckmark(salad_name){
      //刪除原有checkmark
      var salads=document.getElementsByClassName("salad");
      for(i=0;i<salads.length;i++){
        salads[i].parentNode.removeChild(salads[i]);
      }
     saladchoice=salad_name;


     //增加checkmark
      var mealpics=document.getElementsByClassName("meal-pic");
      for(i=0;i<mealpics.length;i++){
        if(mealpics[i].id==salad_name){
          mealpics[i].innerHTML="<i class='fas fa-check checkmark salad'></i>";
        }
      }
    }




    //desert 單選
    var desertchoice='';
        function adddesertcheckmark_s(desert_name){
          //刪除原有checkmark
          var deserts=document.getElementsByClassName("desert");
          for(i=0;i<deserts.length;i++){
            deserts[i].parentNode.removeChild(deserts[i]);
          }
         desertchoice=desert_name;


         //增加checkmark
          var mealpics=document.getElementsByClassName("meal-pic");
          for(i=0;i<mealpics.length;i++){
            if(mealpics[i].id==desert_name){
              mealpics[i].innerHTML="<i class='fas fa-check checkmark desert'></i>";
            }
          }
        }

        //desert多選

        function adddesertcheckmark_m(desert_name){

          //加上勾選的顯示，實現"多選"特色
            var mealpics=document.getElementsByClassName("meal-pic-m");
            var deserts=document.getElementsByClassName("desert");

          for (let i = 0; i < mealpics.length; i++){  //整個食物選項走訪一遍，這個for迴圈的目的在於走訪一遍食物選項
            if (mealpics[i].id == desert_name) { //此段程式實現：若選項已經被勾選，再按一次，取消勾選…
              if (mealpics[i].childNodes[0]) { //如果點選的色塊裏有"<i class='fas fa-check checkmark'></i>"節點的話，也就是非空值的話
                mealpics[i].childNodes[0].parentNode.removeChild(mealpics[i].childNodes[0]); //移除掉勾選的字串
              }
              else mealpics[i].innerHTML = "<i class='fas fa-check checkmark desert'></i>"; //沒有勾選字串的話，加上勾選字串
            }
          }
          desertchoice = "";
          for (let i = 0; i < mealpics.length; i++){ //整個食物選項走訪一遍
            if (mealpics[i].childNodes[0]) { //如果點選的色塊裏有"<i class='fas fa-check checkmark'></i>"節點的話，也就是非空值的話
              // console.log(foodOptions[i].id);
              desertchoice = desertchoice+mealpics[i].id + ","; //將有勾選的色塊id加到food_choice，該id有記錄食物名字
            }
          }
          desertchoice = desertchoice.substring(1, desertchoice.length/2-1); //去除多餘
        }


        //type
        var typechoice='';
        function addtypecheckmark(type_name){
          //刪除原有checkmark
          var mealtypes=document.getElementsByClassName("mealtype");
          for(i=0;i<mealtypes.length;i++){
            mealtypes[i].parentNode.removeChild(mealtypes[i]);
          }
          typechoice=type_name;


         //增加checkmark
          var type=document.getElementsByClassName("type");
          for(i=0;i<type.length;i++){
            if(type[i].id==type_name){
              type[i].innerHTML="<i class='fas fa-check checkmark mealtype'></i>";
            }
          }
        }

        var NowDate=new Date();

        var h=NowDate.getHours();
        var min=NowDate.getMinutes();

    function submitorder(){
      const orderpeople=document.getElementById("order").value;
      if(orderpeople==""){
        alert("學號或姓名不能空白喔!");
        return;
      }

      if((foodchoice=="") && (soupchoice=="") && (saladchoice=="") && (desertchoice=="")){
        alert("您尚未選擇任何餐點喔!");
        return;
      }


      if((typechoice!="") && (foodchoice=="")){
        alert("記得選擇主餐喔!");
        return;
      }

      if(NowDate.getHours()>=10){
        alert('目前非點餐時間!');
        return;
      }


      var ok=confirm(orderpeople+"您好\n"+"請確認您的餐點:" + "\n\n" +foodchoice+""+typechoice + "\n" +soupchoice + "\n" + saladchoice + "\n" + desertchoice)
      if(ok==true){
        alert("您的訂單已送出!")
        order_text = orderpeople + "," + foodchoice+","+typechoice+","+soupchoice+","+saladchoice+","+desertchoice;
        console.log(order_text);
        ajax({order:order_text});
      }
      else
      {
        alert("您的訂單已取消!");
        return;
      }
    }
    // desert多選單選切換
    var selectionmode=document.getElementById("desert-ms");

    function desertselectionmode(){

      if(selectionmode.value=="0"){
        selectionmode.value="1";
        selectionmode.style.backgroundColor='#0066FF';
        selectionmode.innerHTML="多選甜點 on";

      }

      else{
        selectionmode.value="0";
        selectionmode.style.backgroundColor='#ff6347';
        selectionmode.innerHTML="多選甜點 off";

      }
      console.log(selectionmode.value);
    }

    function adddesertcheckmark(desert_name){
      if(selectionmode.value=="0"){

        adddesertcheckmark_s(desert_name);
      }
      if(selectionmode.value=="1"){
        adddesertcheckmark_m(desert_name);
      }
    }

    function ordercheck(){
      window.open("./order.txt","ordercheck",config="height=700 , width=800 ,top=20 ,left=20");
    }








  </script>
</body>

</html>
