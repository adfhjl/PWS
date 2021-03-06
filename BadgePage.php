<!DOCTYPE html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="main.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="BadgePage.js"></script>
    <?php $con = mysql_connect('HOSTNAME','USERNAME','PASSWORD'); ?>
</head>
<body style="margin:0">
    <div id="container">
      <div id="home">
        <a href="BadgePage.html">
          <button class="home-button">
            <img src="img/MCC.png" width="200" height="60">
          </button>
        </a>
      </div>
      <div id="zoek">
        <p>zoek</p>
      </div>
      <div id="print" class="nav">
        <a href="workinprogress.html"><button class="print-button">Print</button></a>
      </div>
      <div id="lln_balk">
        <p>leerlingen balk</p>
      </div>
      <div id="CPage">
        <div class="CPage">
          <div id="level1" class="levelID">
            <p class="level">Level 1</p>
            <ul class="itemList Level-1 ui-sortable">
                <li class="item"><img src="img/level-1.png" alt="Item Number 1" class="itemImage"></li>
                <li class="item"><img src="img/level-2.png" alt="Item Number 2" class="itemImage"></li>
            </ul>
          </div>
          <div id="level2" class="levelID">
            <p class="level">Level 2</p>
            <ul class="itemList Level-2 ui-sortable">
                <li class="item"><img src="img/level-1-2.png" alt="Item Number 1" class="itemImage"></li>
                <li class="item"><img src="img/level-2-2.png" alt="Item Number 2" class="itemImage"></li>
            </ul>
          </div>
          <div id="level3" class="levelID">
            <p class="level">Level 3</p>
            <ul class="itemList Level-3 ui-sortable">
                <li class="item"><img src="img/level-1-2.png" alt="Item Number 1" class="itemImage"></li>
                <li class="item"><img src="img/level-2.png" alt="Item Number 2" class="itemImage"></li>
            </ul>
          </div>
          <div class="optionsButton">
            <div class="dropdown">
              <button class="dropbtn"><img src="img/cogwheel.png" alt="opties" class="options"></button>
              <div class="dropdown-content">
                <p>YEET</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
