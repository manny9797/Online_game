<?php
session_start();
if (isset($_SESSION['input'])) {
$input = json_decode($_SESSION['input'], true);
$gruppo1 = $input[0];
$gruppo2 = $input[1];
$gruppo3 = $input[2];
$gruppo4 = $input[3];
$gruppo5 = $input[4];
$gruppo6 = $input[5];
$gruppo7 = $input[6];
$gruppo8 = $input[7];
$bomber = $input[8];
}
?>
<html lang="it">
  <head>
    <title>FantaChampions - Godopoli</title>
    <meta property="og:title" content="Champions - Godopoli" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

<style data-tag="reset-style-sheet">
  html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
</style>
<style data-tag="default-style-sheet">
  html {
    font-family: Inter;
    font-size: 16px;
    width: auto;
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
    width: auto;
    text-align:center;

  }
</style>
<style type="text/css">
#forkongithub a{background:#aa0000;color:#fff;text-decoration:none;font-family:arial, sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:0.9rem;line-height:1.4rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#aa0000;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;z-index:100;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;z-index:100;top:0;right:0;width:200px;overflow:hidden;height:200px;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}

.container003 {
  width: 30%;
  height: 35px;
  display: flex;
  align-items: center;
  text-align: center;
  color: white;
  justify-content: center;
  background-color: red;
  border-radius: 10px;
  border: 2px solid black;
margin-bottom: 3% ;
margin-top: 10%;
margin-left: 35%;

}
.number {
   display:flex;
   -webkit-flex-direction:row;
  flex-direction:row;
  -webkit-justify-content:center;
  justify-content:center;
  margin-top: 5px;
  margin-left: 1px;
}
.numbers {
  height: 85%;
  margin-left: 5%;
  margin-top: 15px;
  text-align: center;
  align-items: center;
}
.gruppo {
width: 30px;
height: 30px;
border: 1px solid black;
border-radius: 5px;
background: white;
}

.champions-text007 {
 margin-bottom: 15%;
}
.button:focus {
  background-color: red;
  color: white;
}

#gioca {
  position: relative;
  width: 100%;
  height: auto;
}
li {
  height: 20%;
  width: 80%;
  font-weight: 20px;
  background-color: white;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
}
.champions-container05 {
  width: 120%;
}
.champions-container07 {
  border-radius: 10px;
}
.container1 {
    height:91%;
    position:relative;
    display: block;
    box-sizing: border-box;
    list-style-type: none;
    font-size: 0;
    text-align: center;
    width: 90%;
    text-align: center;
    margin-top: 8px;
    margin-left: 4%;
}

.container1.dnd-sortable-area {
    border-color: #fa0020;
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
    border-radius: 20px;
    color: #343434;
    display: flex; /* Utilizziamo flexbox per allineare gli elementi orizzontalmente */
justify-content: flex-start;
margin-top: 6px;


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
    color: #fa0020;
    z-index: 10;
    opacity: 0.7;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.4);
}
.dnd-sortable-placeholder {
    background: #BFDFE0;
    opacity: 0.5;

}
button.active {
background-color: red;
color: white;
}

.header__item {
text-transform:uppercase;
font-weight: bold;
}

.filter__link {
color:white;
text-decoration: none;
position:relative;
display:inline-block;
padding-left:$base-spacing-unit;
padding-right:$base-spacing-unit;

}

.show {
border: 1px solid;
height: 100%;
text-align: center;
}

.page-container {
width: 100%;
display: flex;
overflow: auto;
justify-content: center;
flex-direction: column;
margin-top: 10px;
}
.page-container1 {
display: flex;
align-items: center;
justify-content: center;
}
.page-image {
width: 55%;

}
.head {
width: 100%;
height: 150px;
display: flex;
overflow: auto;
align-items: center;
flex-direction: column;
}
.page-container11 {
width: 100%;
height: 200px;
display: flex;
align-items: center;
justify-content: flex-end;
}
.page-container22 {
flex: 0 0 auto;
width: 27.5%;
height: 100%;
display: flex;
align-items: center;
border-color: #ffffff;
border-style: dashed;
border-width: 0px;
flex-direction: column;
justify-content: center;
}
.pageicon {
width: 50px;
height: 50px;
margin-right: 4%;
}
.page-container33 {
flex: 0 0 auto;
width: 45%;
height: auto;
display: flex;
align-items: center;
flex-direction: column;
justify-content: center;

}
.pageim {
width: 150px;
object-fit: cover
}
.page-container44 {
flex: 0 0 auto;
width: 27.5%;
display: flex;
align-items: flex-start;
border-color: #ffffff;
border-style: dashed;
border-width: 0px;
flex-direction: column;
}
.containerText {
align-items: center;
}
.page-container111 {
height: 240px;
display: flex;
align-items: center;
justify-content: center;

}
.page-container222 {
flex: 0 0 auto;
width: 75%;
height: 70%;
display: flex;
align-items: center;
border-color: var(--dl-color-gray-black);
border-width: 1px;
border-radius: 10px;
justify-content: center;
background-color: #f5ffda;

}
.page-text {
height: auto;
font-size: 15px;
font-style: normal;
text-align: center;
font-weight: 600;
}
</style>
<style data-tag="default-style-sheet">
  html {
    font-family: Inter;
    font-size: 16px;
    width: auto;
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
    width: auto;

  }
</style>
<style type="text/css">
  .profile-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .profile-container1 {
    width: 100%;
    height: 65px;
    display: flex;
    align-items: center;
    border-color: var(--dl-color-gray-black);
    border-width: 1px;
    justify-content: center;
    background-color: #eaeaea;
    border: 1px solid black;
  }
  .profile-container2 {
    flex: 0 0 auto;
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: center;
  }
  .profile-icon {
    width: 35px;
    height: 35px;
  }
  .profile-text {
    font-size: 22px;
    font-style: normal;
    margin-top: 4px;
    font-weight: 700;
    margin-left: 1%;

  }
  .profile-text2 {
    text-decoration: underline;
  }
  .bomber-container3 {
    flex: 0 0 auto;
    width: 100%;
    height: auto;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    margin-top: 15%;
  }
  .bomber-container4 {
    width: 70%;
    height: 60px;
    display: flex;
    align-items: center;
    border-color: var(--dl-color-gray-black);
    border-width: 1px;
    border-radius: 10px;
    justify-content: center;
    background-color: #eaeaea;
    border: 1px solid black;
  }
  .bomber-text3 {
    width: 30%;
    text-align: center;
    font-style: normal;
    font-weight: 600;
  }
  .bomber-textinput {
    width: 65%;
    height: 38px;
    text-align: center;
    text-decoration: underline;
      border-radius: 10px;
      border: 1px solid black;

  }

  .scroll {
    width: 90%;
    height: auto;
    overflow-x: hidden;
         overflow-y: auto;
  }

</style>
<style>
.popup .overlay {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100vw;
  height: 100%;
  background: rgba(0,0,0,0.7);
  z-index:1;
  display: none;
}

.popup .content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%) scale(0);
  background: #fff;
  width: 90%;
  height: 90%;
  z-index: 2;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
  border-radius: 10px;
  overflow-x: hidden;
  overflow-y: auto;
}

.popup .close-btn {
  cursor:pointer;
  position: absolute;
  right: 20px;
  top: 20px;
  width: 30px;
  height: 30px;
  background: grey;
  color: white;
  font-size: 25px;
  font-weight: 700;
  line-height: 30px;
  text-align: center;
  border-radius: 50%;
  border: 1px solid black;
}

.popup.active .overlay {
  display:block;
}

.popup.active .content {
  transition:all 300ms ease-in-out;
  transform: translate(-50%,-50%) scale(1);
}
</style>
<link href="./popup2.css" rel="stylesheet" />
<link href="./champions.css" rel="stylesheet" />

</head>
<body>
<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <img src="Images/success-icon.png" alt="image" style="width:20%; margin-left: 40%;margin-top: 5%;" />
    <h2 style="margin-top: 3%;">Salvataggio effettuato!</h2>
    <div class="bomber-container3">
      <div class="bomber-container4">
        <span class="bomber-text3">Bomber:</span>
        <input
          id="bomber"
          type="text"
          placeholder="<?php echo $input[8];?>"
          class="bomber-textinput input"
        />
      </div>
    </div>
          <div class="container003" style= "margin-top:60px">
            <span class="champions-text007">GRUPPO A</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius:10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo1[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo1[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo1[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo1[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO B</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo2[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo2[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo2[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo2[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO C</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo3[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo3[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo3[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo3[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO D</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo4[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo4[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo4[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo4[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO E</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo5[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo5[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo5[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo5[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO F</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo6[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo6[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo6[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo6[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO G</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo7[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo7[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo7[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo7[3];?></span></li>
              </ul>
            </div>
          </div>
          <div class="container003">
            <span class="champions-text007">GRUPPO H</span>
          </div>
          <div class="champions-container004" style="height: 200px; border: 1px solid black; border-radius: 10px;">
            <div class="numbers">
              <div class="champions-container006">
                <div class="gruppo">
                  <span>
                    <span class="number">1</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>2</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>3</span>
                    <br>
                  </span>
                </div>
              </div>
              <div class="champions-container006">
                <div class="gruppo">
                  <span class="number">
                    <span>4</span>
                    <br>
                  </span>
                </div>
              </div>
            </div>
            <div class="champions-div-classifica">
              <ul id="c1" class="container1">
              <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span style="font-size: 22px;"><?php echo $gruppo8[0];?></span></li>
              <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo8[1];?></span></li>
              <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo8[2];?></span></li>
              <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span style="font-size: 22px;"><?php echo $gruppo8[3];?></span></li>
              </ul>
            </div>
          </div>
    <div class="close-btn" onclick="closePopup()">&times;</div>
  </div>
  </div>

<script type="text/javascript">
  document.getElementById('popup-1').classList.toggle("active");
function closePopup() {
window.location.href = "champions.php";
document.getElementById('popup-1').classList.remove("active");
}
</script>
<body>
</html>
