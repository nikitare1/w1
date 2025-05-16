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
        <title>Sacred Path | Cererea dumneavoastră a fost acceptată!</title>
        <meta property="og:title" content="Sacred Path | Cererea dumneavoastră a fost acceptată!" />
        <meta property="og:image" content="{page-images-1}"/>
        
        <meta name="description" content="Sacred Path | Cererea dumneavoastră a fost acceptată!">
        <meta property="og:description" content="Sacred Path | Cererea dumneavoastră a fost acceptată!">      

        

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
	#mainWrapp-filter--styleno{
		margin: 0px;
		padding: 0px;
		font-family: 'Arsenal', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 277px 0px;
	}
	.bodyClass1-filter--styleno{
		background: #fffaf6;
		color: #ffffff;
	}
	.bodyClass2-filter--styleno{
		background: #d8ac9c;
		color: #fff;
	}
	.bodyClass3-filter--styleno{
		background: #fff;
		color: #111;
	}
	.wrapage-block-filter--styleno{
		background-size: 100%;
		width: 100%;
	}
	.box_main-filter--styleno{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-filter--styleno h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-filter--styleno p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-filter--styleno{
		text-align: center;
	}
	.mainBlock-filter--styleno ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-filter--styleno ul>li span{
		font-weight: bold;
	}
	.mainBlock-filter--styleno{
		max-width: 774px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-filter--styleno .cBlock-filter--styleno{
		text-align: center;
	}

	.bodyClass3-filter--styleno .mainBlock-filter--styleno{
		background: none;
		border-top: 2px dotted #d8ac9c;
		border-bottom: 2px dotted #d8ac9c;
	}
	.bodyClass2-filter--styleno .mainBlock-filter--styleno{
		background: #2C061F;
		color: #fff !important;
		box-shadow: 0px 0px 10px #2C061F;
	}
	.bodyClass2-filter--styleno .mainBlock-filter--styleno p{
		color: #fff !important;
	}
	.bodyClass1-filter--styleno .mainBlock-filter--styleno{
		background: #58D29F;
		color: #ffffff;
		border-left: 4px solid #46B5D1;
	}
	.bodyClass1-filter--styleno .mainBlock-filter--styleno p{
		color: #ffffff !important;
	}
	.order-filter--styleno{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-filter--styleno p{
			padding: 0px 15px;
		  }
		  .box_main-filter--styleno h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-filter--styleno{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-filter--styleno{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-filter--styleno" id="mainWrapp-filter--styleno">


	<div class="wrapage-block-filter--styleno">
		<div class="box_main-filter--styleno">
			<div class="mainBlock-filter--styleno">
				<p>Stimate client valoros,</p>
<p>Încrederea dumneavoastră în serviciile noastre este profund apreciată. Am primit cu succes solicitarea dvs. și o abordăm în prezent cu cea mai mare atenție.</p>
<p>Fiți siguri că echipa noastră de experți lucrează acum cu sârguință pentru a vă îndeplini solicitarea. Străduindu-ne să atingem excelența în satisfacerea nevoilor dvs., scopul nostru principal este de a oferi o calitate remarcabilă și de a vă atinge satisfacția completă.</p>
<p>Dacă aveți întrebări suplimentare sau aveți nevoie de asistență suplimentară, vă rugăm să nu ezitați să contactați prin metoda preferată de comunicare. Prețuim fiecare client și suntem întotdeauna aici pentru a oferi asistență.</p>
<p class="cBlock-filter--styleno">Cu stimă, Echipa!</p>
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
