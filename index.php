<?php
session_start();
if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Godopoli</title>
    <meta property="og:title" content="Godopoli" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
         font-family: Helvetica, sans-serif;
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
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap");

    .modal {
      margin-top: 30px;
    	position: relative;
    	top: 0;
    	left: 0;
    	right: 0;
    	bottom: 0;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	background-color: rgba(#000, 0.25);
    	text-align: center;
      width: 100%;
    }

    .modal-container {
      width: 75%;

    	background-color: #fff;
    	border-radius: 16px;
    	overflow: hidden;
    	display: flex;
    	flex-direction: column;
    	box-shadow: 0 15px 30px 0 rgba(#000, 0.25);
      border: 2px solid;
    	@media (max-width: 600px) {
    		width: 90%;
    	}
    }

    .modal-container-header {
    	padding: 12px 18px;
    	border-bottom: 1px solid #ddd;
    	display: flex;
    	background: red;
    	color: white;
    	font-size: 24px;
      height: 40px;
    }

    .modal-container-title {
    	display: flex;
    	align-items: center;
    	gap: 8px;
    	line-height: 1;
    	font-weight: 600;
    	font-size: 80%;
    	svg {
    		color: #750550;
        margin-right: 20%;
    	}
    }

    .modal-container-body {
    	padding: 24px 32px 51px;
      text-align: center;
      align-items: center;
    }

    .modal-container-footer {
    	padding: 20px 32px;
    	width: 100%;
    	align-items: center;
    	justify-content: flex-end;
    	border-top: 1px solid #ddd;
    	text-align: center;
    }

    .icon-button {
    	padding: 0;
    	border: 0;
    	background-color: transparent;
    	width: 40px;
    	height: 40px;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	line-height: 1;
    	cursor: pointer;
    	border-radius: 8px;
    	transition: 0.15s ease;
    	svg {
    		width: 24px;
    		height: 24px;
    	}

    }
.home-container02 {
      width: 100%;
        display: flex;
        align-items: flex-start;
        text-align: left;
        height=auto;
}
.home-hero {
  padding: 0px;
  display: flex;
  align-items: center;
  flex-direction: column;
  background-size: cover;
  justify-content: center;
  background-image: url("public/maradona-1-1500h.webp");

}
.home-text {
  color: var(--dl-color-gray-white);
  width: auto;
  height: auto;
  font-size: 3rem;
  max-width: 450px;
  align-self: center;
  margin-top: 2%;
  text-align: center;
}

    </style>
  </head>
  <body>
    <div>
      <link href="./presentazione.css" rel="stylesheet" />
      <div class="presentazione-container">
        <header data-role="Header" class="presentazione-header">
          <div class="presentazione-nav">
            <svg viewBox="0 0 1024 1024" class="presentazione-icon" style="visibility: hidden;">
              <path
                d="M817.664 834.005c-70.016-106.667-156.544-140.16-262.997-148.651v61.312c0 22.784-8.875 44.203-25.003 60.331-32.256 32.256-88.619 32.043-120.448 0.213l-268.501-264.832c-8.149-8.064-12.715-18.944-12.715-30.421s4.565-22.357 12.715-30.379l268.288-264.661c32.171-32.213 88.448-32.256 120.704 0.043 16.085 16.128 24.96 37.547 24.96 60.331v72.704c197.077 39.808 341.333 213.205 341.333 417.963v42.667c0 18.859-12.373 35.499-30.464 40.875-4.053 1.152-8.107 1.792-12.203 1.792-14.123 0-27.563-7.040-35.669-19.285zM512.981 597.803c94.165 2.389 197.888 16.811 288.341 90.496-32.768-137.216-148.352-243.285-294.101-259.413-21.504-2.389-37.888-2.219-37.888-2.219v-149.205l-237.909 234.496 237.909 234.667v-149.291c0 0 31.488 0.427 43.648 0.469z"
              ></path>
            </svg>
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
          <a style="display: hidden; color: white;"><u>Logout</u></a>
        </header>
      </div>
    </div>
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container">
        <div class="home-container02">
          <div class="home-hero">
            <button id="log" type="button" class="home-button1 button">LOGIN</button>
            <button id="reg" type="button" class="home-button2 button">
              <span class="home-text04">
                <span>SIGN UP</span>
                <br />
              </span>
            </button>
            <script>
          document.getElementById("log").addEventListener("click", function() {
  // Sostituisci "URL_DEL_LINK" con il link effettivo a cui desideri reindirizzare l'utente
  window.location.href = "Login.php";
});
document.getElementById("reg").addEventListener("click", function() {
// Sostituisci "URL_DEL_LINK" con il link effettivo a cui desideri reindirizzare l'utente
window.location.href = "Registrazione.php";
});
</script>
          </div>
        </div>

          <span class="home-text07">COMPETIZIONI</span>
        <div class="modal">
	<article class="modal-container">
		<header class="modal-container-header">
			<h1 class="modal-container-title">
        <svg viewBox="0 0 877.7142857142857 1024" style="fill: #3fa72f; width: 30px; height: 30px;">
      <path
        d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z"
      ></path></svg>
			IN CORSO
				</h1>
			</header>
		<section class="modal-container-body rtf">
      <div class="im">
      <img src="Images/champions.jpg" alt="image" class="home-image2" />
    </div>
		</section>
		<footer class="modal-container-footer">
			<button id="iscriviti" type="button" class="home-button3 button">ISCRIVITI</button>
      <script>
      document.getElementById("iscriviti").addEventListener("click", function() {
        // Sostituisci "URL_DEL_LINK" con il link effettivo a cui desideri reindirizzare l'utente
        window.location.href = "Login.php";
      });
    </script>
		</footer>
	</article>
</div>
        <div class="home-container03"></div>
        <div class="modal">
	<article class="modal-container">
		<header class="modal-container-header">
			<h1 class="modal-container-title">
        <svg viewBox="0 0 877.7142857142857 1024" style="fill: #f9f110; width: 30px; height: 30px">
      <path
        d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z"
      ></path>
    </svg>
			IN PROGRAMMA
				</h1>
			</header>
		<section class="modal-container-body rtf">
      <div class="im">
      <img src="Images/ROYAL.jpg" alt="image" class="home-image2"/>
    </div>
		</section>
		<footer class="modal-container-footer">
      <button type="button" class="home-button3 button" style="background-color: grey;">ATTENDI</button>
		</footer>
	</article>
</div>
        <div class="home-container13"></div>
      </div>
    </div>
  </body>
</html>
<?php
} else {
  session_destroy();
  header("Location: index.php");
}
?>
