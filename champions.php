<?php
include "Database.php";
session_start();
$input = null;
if (isset($_SESSION['username'])) {
  if (!isset($_SESSION['input'])) {

    $username = $_SESSION['username'];
    $query = "SELECT * FROM fantachampions WHERE username = '$username'";
    $result = $connessione->query($query);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
    $input = $row['input'];
    if ($input != "{}" ) {
    $_SESSION['input'] = json_decode($input, true);
    }
  }
}
}
}
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Champions - Godopoli</title>
    <meta property="og:title" content="Champions - Godopoli" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style type="text/css">
    #forkongithub a{background:#aa0000;color:#fff;text-decoration:none;font-family:arial, sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:0.9rem;line-height:1.4rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#aa0000;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;z-index:100;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;z-index:100;top:0;right:0;width:200px;overflow:hidden;height:200px;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}


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

    #name {
      text-align: left;
    }
    li {
      height: 22%;
      width: 100%;
      font-weight: 20px;
      background-color: white;
      font-family: Arial, Helvetica, sans-serif;
    }
    .champions-container05 {
      width: 120%;
    }
    .champions-container07 {
      border-radius: 10px;
    }
    .container1 {
        height:auto;
        position:relative;
        display: block;
        box-sizing: border-box;
        list-style-type: none;
        width: 98%;
        height: 100%;
        font-size: 0;
        text-align: center;

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
        font-size: 12px;
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

    .team {
      font-size: 20px;
      margin-top: 17px;
    }
    button.active {
    background-color: red;
    color: white;
  }

    $base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

#classifica {
  display: none;
}
.classifica {
  width: 92%;
	justify-content:center;
	align-items:center;
	min-height: 100vh;
  margin-top: 10%;
  display: none;
}
#regolamento {
  display: none;
}
.regolamento {
  width: 100%;
	justify-content:center;
	align-items:left;
  text-align: left;
  margin-top: 6%;
  display: none;
}
.table {
	width: 100%;
	border:1px solid $color-form-highlight;
  text-align: center;

}

.table-header {
	display:flex;
	width:100%;
	background: red;
  border: 1px solid;
  height: 30px;
}

.table-row {
	display:flex;
	width:100%;
  height: 35px;
  border: 1px solid;
  text-align: center;
  align-items:center;
	&:nth-of-type(odd) {
		background:$color-form-highlight;
	}

}

.table-data, .header__item {
	flex: 1 1 20%;
	text-align: center;
  width: 30px;
}

.header__item {
	font-weight: bold;
  font-size: 10px;
  text-align: center;
  position: relative;
  margin-top: 8px;
  width: 100%;
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
}
.page-container1 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 4%;
  margin-top: 4%;
}
.page-image {
  width: 55%;

}
.head {
  width: 100%;
  height: 110px;
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
  width: 30%;
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
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: center;

}
.pageim {
  width: 130px;
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
  height: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 3%;
  margin-bottom: 3%;

}
.page-container222 {
  flex: 0 0 auto;
  width: 80%;
  height: 90%;
  display: flex;
  align-items: center;
  border-color: var(--dl-color-gray-black);
  border-width: 1px;
  border-radius: 10px;
  justify-content: center;
  background-color: #f5ffda;
  padding: 2%;

}
.page-text {
  height: auto;
  font-size: 15px;
  font-style: normal;
  text-align: center;
  font-weight: 600;
}
.page-container111reg {
  width: 100%;
  height: auto;
  display: flex;
  justify-content: center;

}
.page-container222reg {
  flex: 0 0 auto;
  width: 95%;
  height: 70%;
  display: flex;
  border-color: var(--dl-color-gray-black);
  border-width: 1px;
  border-radius: 10px;
  justify-content:center;
  background-color: #f5ffda;
  padding: 3%;

}
.page-textReg {
  height: auto;
  font-size: 15px;
  font-style: normal;
  text-align: left;
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
        text-align:center;

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
    	.profile-container3 {
    		flex: 0 0 auto;
    		width: 100%;
    		height: auto;
    		display: flex;
    		align-items: flex-start;
    		justify-content: center;
    	}
    	.profile-container4 {
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
    	.profile-text3 {
    		width: 30%;
        text-align: center;
    		font-style: normal;
    		font-weight: 600;
    	}
    	.profile-textinput {
    		width: 65%;
    		height: 45px;
    		text-align: center;
    		text-decoration: underline;
          border-radius: 20px;

    	}

    </style>
<link href="./presentazione.css" rel="stylesheet" />
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
  </head>
  <body>

    <div>
      <script language="JavaScript">
     function setVisibility(id, visibility) {
    if (id == "gioca") {
      document.getElementById(id).style.display = visibility;
      document.getElementById('classifica').style.display = 'none';
      document.getElementById('regolamento').style.display = 'none';

    }
    if (id == "classifica") {
      document.getElementById(id).style.display = visibility;
      document.getElementById('gioca').style.display = 'none';
      document.getElementById('regolamento').style.display = 'none';

    } else {
      document.getElementById('gioca').style.display = 'none';
      document.getElementById('classifica').style.display = 'none';
    }
    document.getElementById(id).style.display = visibility;
     }
</script>
      <link href="./champions.css" rel="stylesheet" />
      <div>
        <link href="./presentazione.css" rel="stylesheet" />
        <div class="presentazione-container">
          <header data-role="Header" class="presentazione-header">
            <div class="presentazione-nav">
              <a href="home-log.php"><svg viewBox="0 0 1024 1024" class="presentazione-icon">
                <path
                  d="M817.664 834.005c-70.016-106.667-156.544-140.16-262.997-148.651v61.312c0 22.784-8.875 44.203-25.003 60.331-32.256 32.256-88.619 32.043-120.448 0.213l-268.501-264.832c-8.149-8.064-12.715-18.944-12.715-30.421s4.565-22.357 12.715-30.379l268.288-264.661c32.171-32.213 88.448-32.256 120.704 0.043 16.085 16.128 24.96 37.547 24.96 60.331v72.704c197.077 39.808 341.333 213.205 341.333 417.963v42.667c0 18.859-12.373 35.499-30.464 40.875-4.053 1.152-8.107 1.792-12.203 1.792-14.123 0-27.563-7.040-35.669-19.285zM512.981 597.803c94.165 2.389 197.888 16.811 288.341 90.496-32.768-137.216-148.352-243.285-294.101-259.413-21.504-2.389-37.888-2.219-37.888-2.219v-149.205l-237.909 234.496 237.909 234.667v-149.291c0 0 31.488 0.427 43.648 0.469z"
                ></path>
              </svg></a>
              <div data-role="BurgerMenu" class="presentazione-burger-menu"></div>
            </div>
            <div data-role="MobileMenu" class="presentazione-mobile-menu">
              <div class="presentazione-nav1">
                <div class="presentazione-container1">
                  <img
                    alt="image"
                    src="public/image (1)-200h.png"
                    class="presentazione-image"
                  />
                  <div data-role="CloseMobileMenu" class="presentazione-menu-close">
                    <svg viewBox="0 0 1024 1024" class="presentazione-icon02">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <nav
                  class="navigation-links5-nav navigation-links5-root-class-name22"
                >
                  <span><span>Home</span></span>
                  <span class="navigation-links5-text1"><span>Giochi</span></span>
                  <span class="navigation-links5-text2"><span>About</span></span>
                  <span class="navigation-links5-text3"><span>Login</span></span>
                </nav>
              </div>
              <div>
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="presentazione-icon04"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="presentazione-icon06"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="presentazione-icon08"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
            <img
              alt="image"
              src="public/image (1)-200h.png"
              class="presentazione-image1"
            />
            <a style="visibility: hidden;"><u>Logout</u></a>
          </header>
        </div>
      </div>
      <div class="champions-container">
        <div class="champions-container001">
          <div class="champions-container002">
            <button
              id="1"
              name="gioca"
              type="button"
              class="champions-button1 button selected"
              onclick="setVisibility('gioca', 'inline')"
              autofocus
            >
              <span>
                <span>Gioca</span>
                <br>
              </span>
            </button>
            <button
              id="2"
              name="classifica"
              type="button"
              class="champions-button1 button"
              onclick="setVisibility('classifica', 'inline')"
            >
              <span>
                <span>Classifica</span>
                <br>
              </span>
            </button>
            <button
              id="3"
              name="regolamento"
              type="button"
              class="champions-button1 button"
              onclick="setVisibility('regolamento', 'inline')"
            >
              <span>Regolamento</span>
            </button>
            <script>
            const button1 = document.getElementById('1');
            const button2 = document.getElementById('2');
            const button3 = document.getElementById('3');

            button1.addEventListener('click', () => {
              button1.style.backgroundColor = 'red'; // Cambia il colore di sfondo al focus
              button1.style.color = 'white'; // Cambia il colore del testo al focus
              button2.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button2.style.color = ''; // Ripristina il colore del testo al blur
              button3.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button3.style.color = ''; // Ripristina il colore del testo al blur
            });

            button2.addEventListener('click', () => {
              button2.style.backgroundColor = 'red'; // Cambia il colore di sfondo al focus
              button2.style.color = 'white'; // Cambia il colore del testo al focus
              button1.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button1.style.color = ''; // Ripristina il colore del testo al blur
              button3.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button3.style.color = ''; // Ripristina il colore del testo al blur
            });

            button3.addEventListener('click', () => {
              button3.style.backgroundColor = 'red'; // Cambia il colore di sfondo al focus
              button3.style.color = 'white'; // Cambia il colore del testo al focus
              button1.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button1.style.color = ''; // Ripristina il colore del testo al blur
              button2.style.backgroundColor = 'grey'; // Ripristina il colore di sfondo al blur
              button2.style.color = ''; // Ripristina il colore del testo al blur
            });
            </script>
          </div>
        </div>
        <div class="page-container">
          <div class="page-container1">
            <img src="Images/champions.jpg" alt="image" class="page-image" />
          </div>
        </div>
        <div class="profile-container1">
          <div class="profile-container2">
            <svg viewBox="0 0 1024 1024" class="profile-icon">
              <path
                d="M576 706.612v-52.78c70.498-39.728 128-138.772 128-237.832 0-159.058 0-288-192-288s-192 128.942-192 288c0 99.060 57.502 198.104 128 237.832v52.78c-217.102 17.748-384 124.42-384 253.388h896c0-128.968-166.898-235.64-384-253.388z"
              ></path>
            </svg>
            <span class="profile-text">
              <span>@</span>
              <span class="profile-text2"><?php echo $_SESSION['username'];?></span>
            </span>
          </div>
        </div>
        <?php
if (!isset($_SESSION['input']) || $_SESSION['input']=="{}"){
  ?>
      <div id="gioca">

    <div class="page-containerText">
    <div class="page-container111">
      <div class="page-container222">
        <span class="page-text">
          1. Scegli il tuo BOMBER
          <br>
          2. Trascina le squadre e ipotizza le classifiche dei gironi della UEFA Champions League.
          <br>
          3. Salva le scelte effettuate
          <br>
          <br>
        <b>Hai tempo fino al 19/09/2023 ore 18:00</b>
        <br>
        <br>
        Per maggiori informazioni consulta il <a>regolamento</a>
        </span>
      </div>
    </div>
  </div>
  <div class="profile-container3">
    <div class="profile-container4">
      <span class="profile-text3">Bomber:</span>
      <input
        id="bomber"
        type="text"
        placeholder="Inserisci Bomber"
        class="profile-textinput input"
      />
    </div>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Bayern Monaco.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span class="team">Bayern Monaco</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg>
</li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Manchester United.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Manchester United</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Copenhagen.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Copenhagen</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Galatasaray.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Galatasaray</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO B</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Siviglia.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team">Siviglia</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Arsenal.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team">Arsenal</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/PSV Eindhoven.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team">PSV Eindhoven</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Lens.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team">Lens</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO C</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Napoli.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Napoli</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Real Madrid.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Real Madrid</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Braga.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Braga</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Union Berlino.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Union Berlino</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO D</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Benfica.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Benfica</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Inter.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Inter</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/RB Salzburg.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">RB Salzburg</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Real Sociedad.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Real Sociedad</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO E</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Feyenoord.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Feyenoord</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Atletico Madrid.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Atletico Madrid</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Lazio.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Lazio</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Celtic.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Celtic</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO F</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/PSG.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">PSG</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Borussia Dortmund.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Borussia Dortmund</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Milan.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Milan</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Newcastle.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Newcastle</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO G</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Manchester City.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Manchester City</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/RB Lipsia.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">RB Lipsia</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Stella Rossa.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Stella Rossa</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Young Boys.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Young Boys</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <div class="champions-container003">
          <span class="champions-text007">GRUPPO H</span>
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
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text011">
                  <span>2</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text014">
                  <span>3</span>
                  <br>
                </span>
              </div>
            </div>
            <div class="champions-container006">
              <div class="champions-container007">
                <span class="champions-text017">
                  <span>4</span>
                  <br>
                </span>
              </div>
            </div>
          </div>
          <div class="champions-div-classifica">
            <ul id="c1" class="container1">
            <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Barcellona.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Barcellona</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Porto.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Porto</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Shakhtar Donetsk.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Shakhtar Donetsk</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/Anversa.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Anversa</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
            cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
            YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
            UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
            atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
            MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
            OQAAAABJRU5ErkJggg==" />
            </svg></li>
            </ul>
          </div>
        </div>
        <?php
} else {

  if (!is_array($_SESSION['input'])) {
  $input = json_decode($_SESSION['input'], true);
} else {
  $input = $_SESSION['input'];
}
  $gruppo1 = $input[0];
  $gruppo2 = $input[1];
  $gruppo3 = $input[2];
  $gruppo4 = $input[3];
  $gruppo5 = $input[4];
  $gruppo6 = $input[5];
  $gruppo7 = $input[6];
  $gruppo8 = $input[7];
  $bomber = $input[8];
         ?>
         <div id="gioca">

         <div class="page-containerText">
         <div class="page-container111">
         <div class="page-container222">
           <span class="page-text">
             1. Scegli il tuo BOMBER
             <br>
             2. Trascina le squadre e ipotizza le classifiche dei gironi della UEFA Champions League.
             <br>
             3. Salva le scelte effettuate
             <br>
             <br>
           Hai tempo fino al 19/09/2023 ore 18:00
           <br>
           <br>
           Per maggiori informazioni consulta il <a>regolamento</a>
           </span>
         </div>
         </div>
         </div>
         <div class="profile-container3">
         <div class="profile-container4">
         <span class="profile-text3">Bomber:</span>
         <input
           id="bomber"
           type="text"
           placeholder="<?php echo $input[8];?>"
           class="profile-textinput input"
         />
         </div>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"/><span class="team"><?php echo $gruppo1[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg>
         </li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo1[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo1[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo1[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo1[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO B</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team"><?php echo $gruppo2[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team"><?php echo $gruppo2[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team"><?php echo $gruppo2[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo2[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 7px;"><span class="team"><?php echo $gruppo2[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO C</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo3[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo3[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo3[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo3[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo3[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO D</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo4[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo4[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo4[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo4[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo4[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO E</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo5[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo5[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo5[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo5[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team">Celtic</span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO F</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo6[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo6[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo6[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo6[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo6[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO G</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo7[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo7[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo7[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo7[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo7[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>
           <div class="champions-container003">
             <span class="champions-text007">GRUPPO H</span>
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
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text011">
                     <span>2</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text014">
                     <span>3</span>
                     <br>
                   </span>
                 </div>
               </div>
               <div class="champions-container006">
                 <div class="champions-container007">
                   <span class="champions-text017">
                     <span>4</span>
                     <br>
                   </span>
                 </div>
               </div>
             </div>
             <div class="champions-div-classifica">
               <ul id="c1" class="container1">
               <li id="A1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[0];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo8[0];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="B1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[1];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo8[1];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="C1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[2];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo8[2];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               <li id="E1" class="dnd-sortable-item dnd-sortable-handle"><img id="logo" src="./Images/loghi/<?php echo $gruppo8[3];?>.png" alt="Descrizione dell'immagine" style="height: 75%; margin-left: 4%; margin-right: 3%; margin-top: 6px;"><span class="team"><?php echo $gruppo8[3];?></span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin-left: auto; margin-top: 3.5px; pointer-events: none;" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">  <image id="image0" width="48" height="48" x="0" y="0"
                   href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
               AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
               cwAACxMAAAsTAQCanBgAAAAHdElNRQfnCQYREwsEN+1qAAAAj0lEQVRYw+2UMQ5FUBBFDwqKtwYb
               YR+2+HdgBWIPGgkbUCgoJL/5kWgY31RyTzWTvPtOM7kgxFOiG28DJTkw0jL5CwIV2W9e+TDbYrFZ
               UO7fQ0phjdkF+cnmIvgTu2A8bIO/oGXd54XGGkvMgoWOQGCjp7bekBAeqE0dBWrTS9Sm4r2oTR0F
               atNL1KbivXwBdxo0jXbjVIIAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDktMDZUMTc6MTk6MTEr
               MDA6MDAPDCeFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTA5LTA2VDE3OjE5OjExKzAwOjAwflGf
               OQAAAABJRU5ErkJggg==" />
               </svg></li>
               </ul>
             </div>
           </div>



         <?php
 }
          ?>
        <div class="champions-container103">
          <script>
          function saveOrder() {
        // Dati da passare al server

        const groups = document.querySelectorAll('.champions-container004');
       var bomber = document.getElementById("bomber").value;
       const data = {};
       var count = 0;
       groups.forEach((group, index) => {
        const groupName = index;
        const choices = [];

        const listItems = group.querySelectorAll('.container1 li span');
        listItems.forEach(item => {
          choices.push(item.textContent);
        });

        data[groupName] = choices;
        count = count+1;
       });
       data[count] = bomber;
       const jsonData = JSON.stringify(data);
       console.log(jsonData);

        // Creazione dei dati da inviare come oggetto
        // Effettua la richiesta al server utilizzando la Fetch API
        fetch('./salvataggioChampions.php', {
            "method": 'POST',
            "headers": {
            'Content-Type': 'application/json'
            },
            "body": JSON.stringify(jsonData),
        }).then(function(response){
          window.location.href = "proove.php";
          return response.json();
        }).then(function(jsonData) {
          console.log(jsonData);
        })

    }
          </script>
          <button
            name="classifica"
            type="button"
            class="champions-button3 button"
            onclick="saveOrder()">SALVA</button>
        </div>
        <div style="width:100%; height: 50px;"></div>
        </div>
      <div id="classifica" class="classifica" style=" border-radius:10px; height: auto;">

      <div class="table" style="border-radius:2px;">
      <div class="table-header" style="border-radius:4px;">
      <div class="header__item"><a id="posizione" class="filter__link" href="#">Pos</a></div>
      <div class="header__item"><a id="name" class="filter__link" href="#">Username</a></div>
      <div class="header__item"><a id="bomber" class="filter__link" href="#">Pt Bomber</a></div>
      <div class="header__item"><a id="pronostici" class="filter__link" href="#">Pt Pronostici</a></div>
      <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Pt Totali</a></div>
      </div>
      <div class="table-content">
        <?php
        // Connessione al database
        include "Database.php";

        // Query per selezionare l'utente corrispondente all'username immesso
        $query = "SELECT username, input, bomber, PUNTI_INPUT, PUNTI_BOMBER, PUNTI_INPUT+PUNTI_BOMBER as PUNTI FROM fantachampions WHERE username != 'ADMIN' ORDER BY PUNTI DESC";
        $result = $connessione->query($query);

        if ($result) {
          if (mysqli_num_rows($result) > 0) {
        $count=1;
            while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];
        $input = json_decode($row['input'], true);
        $bomber = $row['bomber'];
        $puntiPro = $row['PUNTI_INPUT'];
        $puntiBomber = $row['PUNTI_BOMBER'];
        $punti = $row['PUNTI'];
?>
<div class="table-row" style="<?php if ($count % 2 == 0) { echo 'background-color: #cbc5c5;';}?>">
<div class="table-data"><?php echo $count;?></div>
<div class="table-data" style="text-align: left; padding-right: 3%; font-size: 14px;"><?php echo $username;?></div>
<div class="table-data"><?php echo $puntiBomber;?></div>
<div class="table-data"><?php echo $puntiPro;?></div>
<div class="table-data"><?php echo $punti;?></div>
</div>

<?php
       $count++;
        }
      }

        $connessione->close();
      }

        ?>
      </div>
      </div>
      </div>
      <div id="regolamento" class="regolamento" style=" height: auto; width: 100%;">
        <div class="page-containerTextReg">
        <div class="page-container111reg">
        <div class="page-container222reg">
          <span class="page-textreg">
            <h2 style="text-align: center;">Regolamento Fanta Champions</h2><br><br><br>

            <h2>Funzionamento generale:</h2><br><br>
          1. Prima dell’inizio del primo turno dei gironi di Champions League 2023/2024 ogni partecipante dovrà pronosticare:<br><br>
          - l’esito delle classifiche di ognuno degli 8 gironi<br>
          - il miglior marcatore della fase a gironi della UEFA Champions league (sezione “BOMBER” all’interno del sito)<br><br>
          2. Dopo la conclusione della sesta ed ultima giornata dei gironi di Champions League 2023/2024, verranno eliminati i
          partecipanti che a quel punto si troveranno nell’ultimo terzo di classica della FANTACHAMPIONS, arrotondando per difetto
          e salvando i partecipanti in caso di punteggio ex aequo nell’ultima posizione valida al passaggio alla fase successiva<br><br>
          3. Prima dell’inizio dell’andata degli ottavi di finale della Champions League 2023/2024, dopo che sono avvenuti i sorteggi, i
          partecipanti dovranno pronosticare:<br><br>
          - il passaggio del turno per ognuno degli otto accoppiamenti;<br>
          - il miglior marcatore degli ottavi di finale della UEFA Champions league (sezione “BOMBER” all’interno del sito)<br><br>
          4. Dopo la conclusione della partita di ritorno degli ottavi Champions League 2023/2024, verranno eliminati i partecipanti
          che a quel punto si troveranno nell’ultimo terzo di classica FANTACHAMPIONS, arrotondando per difetto e salvando i
          partecipanti in caso di punteggio ex aequo nell’ultima posizione valida al passaggio alla fase successiva<br><br>
          5. Prima dell’inizio dell’andata dei quarti di finale della Champions League 2023/2024, dopo che sono avvenuti i sorteggi, i
          partecipanti dovranno pronosticare:<br><br>
          - il passaggio del turno per ognuno dei quattro accoppiamenti, per le future semifinali e per la finale<br>
          - il miglior marcatore dai quarti fino alla finale della UEFA Champions league (sezione “BOMBER” all’interno del
          sito)<br><br><br>

          <h2>Criterio assegnazione punteggi:</h2><br><br>
          1. Per ogni posizione dei gironi di Champions League 2023/2024 pronosticata correttamente, ogni partecipante otterrà: 1
          punto; mentre otterrà 2 punti per ogni squadra di cui ha pronosticato correttamente il passaggio del turno<br><br>
          2. Per ogni passaggio del turno degli ottavi di Champions League 2023/2024 pronosticato correttamente, ogni partecipante
          otterrà 2 punti<br><br>
          3. Per ogni passaggio del turno dei quarti di Champions League 2023/2024 pronosticato correttamente, ogni partecipante
          otterrà 4 punti<br><br>
          4. Per ogni passaggio del turno delle semifinali di Champions League 2023/2024 pronosticato correttamente, ogni
          partecipante otterrà 8 punti<br><br>
          5. Per la squadra vincitrice della Champions League 2023/2024 pronosticata correttamente, ogni partecipante otterrà 16
          punti<br><br><br>

          <h2>Punteggi Bonus:</h2><br><br>
          1. Per ogni girone pronosticato perfettamente nell’ordine di tutte e 4 le sue squadre, ogni partecipante otterrà 2 punti
          bonus<br><br>
          2. Per ogni gol segnato dal BOMBER scelto durante la fase a gironi, ogni partecipante otterrà 1 punto<br><br>
          3. Per ogni gol segnato BOMBER scelto durante la fase ad eliminazione diretta, ogni partecipante otterrà 2 punti<br><br>
          </span>
        </div>
        </div>
        </div>
      </div>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
}
?>
