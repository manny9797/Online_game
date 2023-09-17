<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ControlPanel - Godopoli</title>
    <meta property="og:title" content="ControlPanel - Godopoli" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style type="text/css">
    #forkongithub a{background:#aa0000;color:#fff;text-decoration:none;font-family:arial, sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:0.9rem;line-height:1.4rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#aa0000;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;z-index:100;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;z-index:100;top:0;right:0;width:200px;overflow:hidden;height:200px;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}

    .button:focus {
      background-color: red;
      color: white;
    }
    .champions-container003 {
      margin-left: 37.5%;
    }

    li {
      height: 26.5%;
      width: 40%;
      margin-bottom: 1px;

    }
    .champions-div-classifica {
    }
    .champions-container05 {
      width: 120%;
    }
    .champions-container07 {
      border-radius: 10px;
    }
    .container1 {
        height:auto;
        position: relative;
        display: block;
        box-sizing: border-box;
        list-style-type: none;
        width: 90%;
        height: auto;
        font-size: 0;
        text-align: left;
        margin-right: 5%;
        margin-bottom: 12px;
    }

    .container1.dnd-sortable-area {
        border-color: grey;
    }
    .container1 > .dnd-sortable-item {
        width: 100%;
        position: relative;
        display: block;
        box-sizing: border-box;
        text-align: left;
        font-size: 20px;
        line-height: 174%;
        border: 1px solid #666;
        border-radius: 10px;
        color: #343434;
        background: #fff;
        display: flex; /* Utilizziamo flexbox per allineare gli elementi orizzontalmente */
   justify-content: flex-start;

    }
    #c1.container1 > .dnd-sortable-item {
        cursor: ns-resize;

    }
    #c1.container1 > .dnd-sortable-item.tall {
        font-size: 46px;
    }

    .dnd-sortable-item.dnd-sortable-closest {
        border-color: #00fa00;
        z-index: 5;
    }
    .dnd-sortable-item.dnd-sortable-dragged {
        border-color: #fa0020;
        color: grey;
        z-index: 10;
        opacity: 0.7;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.4);
    }
    .dnd-sortable-placeholder {
        background: #BFDFE0;
        opacity: 0.5;


    }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
    <script src="areasortable.js"></script>
    <script type="text/javascript">

    function disableScroll()
    {
        // Get the current page scroll position
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop || 0,
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || 0;

        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {window.scrollTo(scrollLeft, scrollTop);};
    }
    function enableScroll()
    {
        window.onscroll = function() {};
    }

    let instance1 = AreaSortable('vertical', {
        // all options
        container: 'c1' // container element or id
        ,activeArea: 'dnd-sortable-area' // default
        ,handle: 'dnd-sortable-handle' // default
        ,item: 'dnd-sortable-item' // default
        ,placeholder: 'dnd-sortable-placeholder' // default
        ,activeItem: 'dnd-sortable-dragged' // default
        ,closestItem: 'dnd-sortable-closest' // default
        ,autoscroll: false // default
        ,animationMs: 180 // default 0
        ,itemFilter: function(item){return item;} // default
        ,onStart: function(item){disableScroll();}
        ,onEnd: function(item){enableScroll();}
    });
    let instance2 = AreaSortable('horizontal', {
        container: 'c2' // container element or id
        ,animationMs: 180
        ,onStart: function(item){disableScroll();}
        ,onEnd: function(item){enableScroll();}
    });
    let instance3 = AreaSortable('unrestricted', {
        container: 'c3' // container element or id
        ,animationMs: 180
        ,onStart: function(item){disableScroll();}
        ,onEnd: function(item){enableScroll();}
    });
    let instance4 = AreaSortable('unrestricted', {
        container: 'c4' // container element or id
        ,animationMs: 180
        ,onStart: function(item){disableScroll();}
        ,onEnd: function(item){enableScroll();}
    });
    let instance5 = AreaSortable('horizontal', {
        container: 'c5' // container element or id
        ,autoscroll: true
        ,animationMs: 180
        ,scrollAnimationMs: 600
    });
    let instance6 = AreaSortable('unrestricted', {
        container: 'c6' // container element or id
        ,autoscroll: true
        ,animationMs: 180
        ,scrollAnimationMs: 600
    });
    /*
    // dispose
    instance1.dispose();
    instance2.dispose();
    instance3.dispose();
    instance4.dispose();
    instance5.dispose();
    instance6.dispose();
    */
    </script>
      <link href="./champions.css" rel="stylesheet" />
      <link href="./control-panel.css" rel="stylesheet" />
  </head>
  <body>
    <div>
      <div class="control-panel-container">
        <header data-role="Header" class="control-panel-header">
          <div class="control-panel-nav">
            <div data-role="BurgerMenu" class="control-panel-burger-menu"></div>
          </div>
          <div data-role="MobileMenu" class="control-panel-mobile-menu">
            <div class="control-panel-nav1">
              <nav
                class="navigation-links5-nav navigation-links5-root-class-name21"
              >
                <span><span>Home</span></span>
                <span class="navigation-links5-text1"><span>Giochi</span></span>
                <span class="navigation-links5-text2"><span>About</span></span>
                <span class="navigation-links5-text3"><span>Login</span></span>
              </nav>
            </div>
          </div>
          <img
            alt="image"
            src="public/image%20(1)-200h.png"
            class="control-panel-image1"
          />
        </header>
        <div class="control-panel-container002">
          <div class="control-panel-container003">
            <button
              name="gioca"
              type="button"
              autofocus=""
              class="control-panel-button button"
            >
              <span>
                <span>FANTACHAMPIONS</span>
                <br />
              </span>
            </button>
            <button
              name="classifica"
              type="button"
              class="control-panel-button1 button"
            >
              <span>
                <span>ROYAL RUMBLE</span>
                <br />
              </span>
            </button>
            <button
              name="regolamento"
              type="button"
              class="control-panel-button2 button"
            >
              <span>ISTRUZIONI</span>
            </button>
          </div>
        </div>
        <div class="control-panel-container004">
          <button type="button" class="control-panel-button3 button">
            <span>
              <span>AGGIORNA BOMBER</span>
              <br />
            </span>
          </button>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO A</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container005">
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text008">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container008">
              <div class="champions-container009">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container010">
              <div class="champions-container011">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container012">
              <div class="champions-container013">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">BAYERN</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Bayern Monaco.png" alt="Descrizione dell'immagine" style="height: 80%; margin-left: 3%; margin-right: 3%; margin-top: 4px;"><span style="margin-top: 4px;">NAPOLI</span></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">LIVERPOOL</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">NANTES</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text020">GRUPPO B</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container016">
            <div class="champions-container017">
              <div class="champions-container018">
                <span class="champions-text021">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container019">
              <div class="champions-container020">
                <span class="champions-text024">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container021">
              <div class="champions-container022">
                <span class="champions-text027">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container023">
              <div class="champions-container024">
                <span class="champions-text030">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">BORUSSIA</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">TORINO</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">PESCARA</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">PSG</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text033">GRUPPO C</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container027">
            <div class="champions-container028">
              <div class="champions-container029">
                <span class="champions-text034">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container030">
              <div class="champions-container031">
                <span class="champions-text037">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container032">
              <div class="champions-container033">
                <span class="champions-text040">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container034">
              <div class="champions-container035">
                <span class="champions-text043">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">VERONA</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">ROMA</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">SOUTHAMPTON</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">SHERIFF</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text046">
            <span>GRUPPO D</span>
            <br />
          </span>
        </div>
        <div class="champions-container004">
          <div class="champions-container038">
            <div class="champions-container039">
              <div class="champions-container040">
                <span class="champions-text049">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container041">
              <div class="champions-container042">
                <span class="champions-text052">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container043">
              <div class="champions-container044">
                <span class="champions-text055">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container045">
              <div class="champions-container046">
                <span class="champions-text058">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">LAZIO</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">AJAX</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">FENERBACE</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">REAL MADRID</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text061">GRUPPO E</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container049">
            <div class="champions-container050">
              <div class="champions-container051">
                <span class="champions-text062">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container052">
              <div class="champions-container053">
                <span class="champions-text065">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container054">
              <div class="champions-container055">
                <span class="champions-text068">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container056">
              <div class="champions-container057">
                <span class="champions-text071">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">LILLE</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">BAYERN LEVERKUSEN</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">CLUB BRUIGGE</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">CELTIC</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text074">GRUPPO F</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container060">
            <div class="champions-container061">
              <div class="champions-container062">
                <span class="champions-text075">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container063">
              <div class="champions-container064">
                <span class="champions-text078">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container065">
              <div class="champions-container066">
                <span class="champions-text081">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container067">
              <div class="champions-container068">
                <span class="champions-text084">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">MAIORCA</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">BENFICA</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">NEW CASTLE</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">ARSENAL</li>
            </ul>

          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text087">
            <span>GRUPPO G</span>
            <br />
          </span>
        </div>
        <div class="champions-container004">
          <div class="champions-container071">
            <div class="champions-container072">
              <div class="champions-container073">
                <span class="champions-text090">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container074">
              <div class="champions-container075">
                <span class="champions-text093">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container076">
              <div class="champions-container077">
                <span class="champions-text096">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container078">
              <div class="champions-container079">
                <span class="champions-text099">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">AZ ALKMAAR</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">CATANIA</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">PALERMO</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">MANCHESTER CITY</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text102">GRUPPO H</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container082">
            <div class="champions-container083">
              <div class="champions-container084">
                <span class="champions-text103">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container085">
              <div class="champions-container086">
                <span class="champions-text106">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container087">
              <div class="champions-container088">
                <span class="champions-text109">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container089">
              <div class="champions-container090">
                <span class="champions-text112">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">WEST HAM</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">MONZA</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">MILAN</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">INTER</li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text115">GRUPPO I</span>
        </div>
        <div class="champions-container004">
          <div class="champions-container093">
            <div class="champions-container094">
              <div class="champions-container095">
                <span class="champions-text116">
                  <span>1</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container096">
              <div class="champions-container097">
                <span class="champions-text119">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container098">
              <div class="champions-container099">
                <span class="champions-text122">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container100">
              <div class="champions-container101">
                <span class="champions-text125">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica8">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle">OLYMPIC LYONE</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle">OLYMPIACOS</li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle">DINAMO ZAGABRIA</li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle">PORTO</li>
            </ul>
          </div>
        </div>
        <div class="control-panel-container104">
          <script>
          function saveOrder() {
        const groups = document.querySelectorAll('.champions-container004');
       const data = {};
       var count = 0;
       groups.forEach((group, index) => {
        const groupName = index;
        const choices = [];

        const listItems = group.querySelectorAll('.container1 li');
        listItems.forEach(item => {
          const spanElement = item.querySelector('span');

        // Leggi il testo all'interno dello <span>
          choices.push(spanElement.textContent);
        });

        data[groupName] = choices;
        count = count+1;
       });
       const jsonData = JSON.stringify(data);

        // Creazione dei dati da inviare come oggetto
        // Effettua la richiesta al server utilizzando la Fetch API
        fetch('./aggiornaRisultati.php', {
            "method": 'POST',
            "headers":{
            'Content-Type': 'application/json'
            },
            "body": JSON.stringify(jsonData),
        }).then(function(response) {
          return response.json();
        }).then(function(data) {
          console.log(jsonData);
        })

    }
          </script>
          <button
            name="classifica"
            type="button"
            class="control-panel-button4 button"
            onclick="saveOrder()">AGGIORNA RISULTATI</button>
        </div>
        <form action="calcoloPunteggio.php" method="post">
        <input type="submit" value="Invia" style:"margin-bottom:20%; width:20%; heigth:30%;">
        </form>
      </div>
    </div>
  </body>
</html>
