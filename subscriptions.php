<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sacred Path . Vă mulțumim pentru abonare!</title>
        <meta property="og:title" content="Sacred Path . Vă mulțumim pentru abonare!" />
        <meta property="og:image" content="{page-images-1}"/>
        
        <meta name="description" content="Sacred Path . Vă mulțumim pentru abonare!">
        <meta property="og:description" content="Sacred Path . Vă mulțumim pentru abonare!">      

        

		    <meta property="og:image" content="thumbnails/Jewels-Blitz-6-Pok-b4b94-1.jpeg"/>
        <link rel="shortcut icon" href="galleryarchive/logo-6827187f95520.png" type="image/x-icon">
        <link rel="stylesheet" href="custom.css?v=1747392621">
       
        <style>
           
        

        </style>
        
        
        </head>

        <body>


        

        <header class="menu-collapsed">
          <div class="bar"></div>
          <nav>
             <ul>
                <li><a href="./">Prima pagină</a></li>
                <li><a href="about-us.html">Cine suntem</a></li>
                <li><a href="games.html">Jocuri</a></li>
                <li><a href="helpdesk.html">Contacte</a></li>
             </ul>
          </nav>
       </header>

          <div class='heroEffects orderlm-box'>
            <div class="bg">  
                <div class="arrow bouncy">  
                    <svg height="25" width="50">
                        <polygon points="0,0 25,10 50,0 25,25" fill="rgba(255,255,255,.5)" stroke-width="0" stroke="rgba(255,255,255,.3)"/>
                    </svg>
                </div>  
                <a href="./" class="title centerV"> 
                    <div>
                        <div class="text"> 
                            <h1>Sacred Path</h1>
                            <p>Începeți să câștigați astăzi</p>
                        </div>
                    </div>
                  </a> 
            </div> 
            <div class="shade"></div>
        </div>

          <script>
            document.querySelector(".menu-collapsed").addEventListener("click", function() {
              this.classList.toggle("menu-expanded");
            });


            (function() {
              window.addEventListener('scroll', function() {
                  var scrollTop = window.scrollY;
                  var num = scrollTop / 500;
                  var num2 = scrollTop * 0.0004; 
                  var num2mod = num2 + 1;
                  var num3 = scrollTop * 0.2; 
                  var num3mod = num3 + 1;

                  document.querySelector('.shade').style.opacity = num;                
                  document.querySelector('.bg').style.transform = 'scale(' + num2mod + ')';
                  document.querySelector('.text').style.marginTop = '-' + num3mod + 'px';
              });
          })();


          
          </script>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-itemst-menu{
		margin: 0px;
		padding: 0px;
		font-family: 'Spectral', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 252px 0px;
	}
	.bodyClass1-itemst-menu{
		background: #f8f5f1;
		color: #ffffff;
	}
	.bodyClass2-itemst-menu{
		background: #bfcba8;
		color: #fff;
	}
	.bodyClass3-itemst-menu{
		background: #fff;
		color: #111;
	}
	.wrapage-block-itemst-menu{
		background-size: 100%;
		width: 100%;
	}
	.box_main-itemst-menu{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-itemst-menu h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-itemst-menu p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-itemst-menu{
		text-align: center;
	}
	.mainBlock-itemst-menu ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-itemst-menu ul>li span{
		font-weight: bold;
	}
	.mainBlock-itemst-menu{
		max-width: 919px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-itemst-menu .cBlock-itemst-menu{
		text-align: center;
	}

	.bodyClass3-itemst-menu .mainBlock-itemst-menu{
		background: none;
		border-top: 2px dotted #bfcba8;
		border-bottom: 2px dotted #bfcba8;
	}
	.bodyClass2-itemst-menu .mainBlock-itemst-menu{
		background: #2B1F31;
		color: #fff !important;
		box-shadow: 0px 0px 20px #2B1F31;
	}
	.bodyClass2-itemst-menu .mainBlock-itemst-menu p{
		color: #fff !important;
	}
	.bodyClass1-itemst-menu .mainBlock-itemst-menu{
		background: #0A4F3C;
		color: #ffffff;
		border-left: 5px solid #83142C;
	}
	.bodyClass1-itemst-menu .mainBlock-itemst-menu p{
		color: #ffffff !important;
	}
	.order-itemst-menu{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-itemst-menu p{
			padding: 0px 15px;
		  }
		  .box_main-itemst-menu h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-itemst-menu{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-itemst-menu{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-itemst-menu" id="mainWrapp-itemst-menu">


	<div class="wrapage-block-itemst-menu">
		<div class="box_main-itemst-menu">
			<div class="mainBlock-itemst-menu">
				<h2>Vă mulțumim sincer pentru interesul și abonarea pe site-ul nostru! Suntem încântați să vă avem printre abonații noștri.</h2>
<p>Acum veți fi printre primii care vor afla despre noile noastre sosiri, promoții, oferte exclusive și cele mai recente știri. Promitem să trimitem doar cele mai relevante și interesante informații!</p>
<p>Câteva lucruri pentru a vă îmbunătăți experiența:</p>
<ul>
    <li><span>Personalizare:</span> Dacă aveți interese sau preferințe specifice, vă rugăm să le specificați în setările profilului dvs., astfel încât să vă putem trimite cele mai relevante oferte și știri.</li>
    <li><span>Fără spam:</span> Vă respectăm timpul și căsuța poștală. Prin urmare, promitem să nu vă copleșim cu informații inutile.</li>
    <li><span>Feedback-ul tău contează:</span> Dacă aveți dorințe, feedback sau sugestii, nu ezitați să le împărtășiți cu noi. Parerea ta ne ajuta sa ne imbunatatim!</li>
</ul>
<p>Dacă v-ați abonat accidental sau decideți să vă dezabonați în viitor, puteți face întotdeauna acest lucru urmând linkul corespunzător din orice e-mail de la noi.</p>
			</div>
		</div>
	</div>


</div>




       <footer class="footer vidstyp">
        <div class="container">

           <div class="row footer-diskl">
            <div class="img18" >
              <img height="100px" src="galleryarchive/img-18-6827187f95585.svg" alt="" />
            </div>
            <div>
              <h2 class="main-title">Disclaimer</h2>
              <div class="footer-diskl-text">Site-ul nostru este conceput pentru utilizatorii 18+. Amintiți-vă că șansele de a câștiga aici nu sunt egale cu cele reale. Joacă pentru distracție și distrează-te!</div>
            </div>
          </div> 

          <div class="row discount-widgetxy footLk">
              <a href="./" class="footer-sit">
                <img height="80px" src="galleryarchive/logo-6827187f95520.png"/>
                <span> Sacred Path</span>
              </a>
            <div class="footer-info">
              <div class="item-footer">
                <a  href="privacyPolicy.html">Politica de confidențialitate</a>
              </div>
              <div class="item-footer">
                <a href="terms.html">Termen și condiții</a>
              </div>
              <div class="item-footer">
                <a href="legal-disclaimer.html">Declaratiile</a>
              </div>
              <div class="item-footer">
                <a href="member-conduct-code.html">Codul de conduită</a>
              </div>
              
              <div class="item-footer">
                <a  href="safeGaming.html">Joc social responsabil</a>
              </div>
              
            </div>
          </div>
          <div class="footer-2 main-title">
              Copyright &#169; 2025 <span>Sacred Path</span> 
          </div>
        </div>
       </footer>
        

       <script>

          function toggleVariants() {
              const variant1Elements = document.querySelectorAll('.variant-1');
              const variant2Elements = document.querySelectorAll('.variant-2');
          
              variant1Elements.forEach((variant1) => {
                  if (window.getComputedStyle(variant1).display === 'block') {
                      variant2Elements.forEach((variant2) => {
                          variant2.style.display = 'none';
                      });
                  } else {
                    
                      variant2Elements.forEach((variant2) => {
                          variant2.style.display = 'block';
                      });
                  }
              });
          }
          
          toggleVariants();
             </script>

        

</body>
</html>
