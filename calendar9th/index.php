<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/current_day_info.css">
  <link rel="stylesheet" href="css/calendar.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/portrait.css">
  <link rel="icon" href="images/icon1.png" type="image/png" sizes="72x72">
  <title>My calendar</title>
</head>
<style media="screen">


</style>

<body>
  <?php
    $connection = mysqli_connect("localhost", "wda1907_test", "extrem9713", "wda1907_calendar");
    if(!$connection){
        die("no connection!");
    }
    function db_updateTheme($newTheme){
        global $connection;
        $query = "UPDATE theme SET cur_theme = '$newTheme' WHERE id = 1";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query failed: " . mysqli_error($connection));
          }
        }
    if(isset($_POST['color'])){
      db_updateTheme($_POST['color']);
    }

    function settheme(){
    global $connection;
    $query = "SELECT * FROM theme";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("owada");
    }
    while($row = mysqli_fetch_assoc($result)){
        return $row['cur_theme'];
    }
}


?>


  <div id="current-day-info" class="color">
    <h1 id="app-name-landscape" class="off-color default-cursor center">My Calendar</h1>
    <div>
      <h2 id="cur-year" class="default-cursor center current-day-heading">2019</h2>
    </div>
    <div class="">
      <h1 id="cur-day" class="default-cursor center current-day-heading">Wednesday</h1>
      <h1 id="cur-month" class="default-cursor center current-day-heading">May</h1>
      <h1 id="cur-date" class="default-cursor center current-day-heading">14</h1>
    </div>
    <div class="">
      <button id="theme-landscape" class="button font color" onclick="opencolor();">Change Theme</button>
    </div>
  </div>
  <div id="calendar">
    <h1 id="app-name-portrait" class="center off-color">My Calendar</h1>
    <table>
      <thead class="color">
        <tr>
          <th colspan="7" class="border-color">
            <h4 id="cal-year">2019</h4>
            <div>
              <i class="fas fa-caret-left icon" onclick="premonth()"></i>
              <h3 id="cal-month">May</h3>
              <i class="fas fa-caret-right icon" onclick="nextmonth()"></i>
            </div>
          </th>
        </tr>
        <tr>
          <th class="weekday border-color">Sun</th>
          <th class="weekday border-color">Mon</th>
          <th class="weekday border-color">Tue</th>
          <th class="weekday border-color">Wed</th>
          <th class="weekday border-color">Thu</th>
          <th class="weekday border-color">Fri</th>
          <th class="weekday border-color">Sat</th>
        </tr>
      </thead>
      <tbody id="table-body" class="border-color">
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">5</td>
        </tr>
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
        </tr>
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
        </tr>
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
        </tr>
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
        </tr>
        <tr>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
          <td onclick="dayclicked(this);">1</td>
        </tr>
      </tbody>
    </table>
    <button id="theme-portrait" class="button font color" onclick="opencolor();">Change Theme</button>
  </div>
  <dialog id="modal">
    <div id="fav-color" hidden>
      <div class="popup">
        <h4>What's your favorite color?</h4>
        <div id="color-options">
          <div class="color-option">
            <div class="color-preview " id="blue" style="background-color:#1b19cd;" onclick="addcheckmark('blue')"><i class='fas fa-check checkmark'></i></div>
            <h5>Blue</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="red" style="background-color: #D01212;" onclick="addcheckmark('red')"></div>
            <h5>Red</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="purple" style="background-color: #721D89;" onclick="addcheckmark('purple')"></div>
            <h5>Purple</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="green" style="background-color: #158348;" onclick="addcheckmark('green')"></div>
            <h5>Green</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="orange" style="background-color: #EE742D;" onclick="addcheckmark('orange')"></div>
            <h5>Orange</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="deep-orange" style="background-color: #F13C26;" onclick="addcheckmark('deep-orange')"></div>
            <h5>Deep Orange</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="baby-blue" style="background-color: #31B2FC;" onclick="addcheckmark('baby-blue')"></div>
            <h5>Baby Blue</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="cerise" style="background-color: #EA3D69;" onclick="addcheckmark('cerise')"></div>
            <h5>Cerise</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="lime" style="background-color: #36C945;" onclick="addcheckmark('lime')"></div>
            <h5>Lime</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="teal" style="background-color: #2FCCB9;" onclick="addcheckmark('teal')"></div>
            <h5>Teal</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="pink" style="background-color: #F50D7A;" onclick="addcheckmark('pink')"></div>
            <h5>Pink</h5>
          </div>

          <div class="color-option">
            <div class="color-preview" id="black" style="background-color: #212524;" onclick="addcheckmark('black')"></div>
            <h5>Black</h5>
          </div>
        </div>
        <button id="update-theme-button" class="button font" onclick="change_color();">update</button>
      </div>
    </div>
    <div id="make-note" hidden>
      <div class="popup">
        <h4>Add a note to the calendar</h4>
        <textarea id="edit-post-it" class="font" name="post-it" autofocus></textarea>
        <div>
          <button id="add-post-it" class="font button post-it-button" onclick="submitpostit();">Post It</button>
          <button id="delete-button" class="font button post-it-button" onclick="deleteit();">Delete It</button>
        </div>
      </div>
    </div>
  </dialog>
  <script src="js/update-calendar.js" charset="utf-8"></script>
  <script src="js/ajax.js" charset="utf-8"></script>
  <script language="Javascript">
   updatedate();
  current_color.name = <?php echo(json_encode(settheme())); ?> ;
    submitcolor();


  </script>
</body>

</html>
