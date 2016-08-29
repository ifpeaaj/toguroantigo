<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html >
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/geral.css"/>
		<link rel="stylesheet" type="text/css" href="css/menu2.css"/>

        
	</head>
	<body>
		<div id="header" class="header">
                <!-- NOSEARCH -->
            <div id="topnav" class="container">
              <a id="link-logo" class="logo" title="Toguro">
                <img src="logo.png" alt="Academia Toguro" title="Ir para a página inicial"> </a>
                  
                  <ul class="topnav-menu">
                    <li><a href="index.html" id="link-inicio" title="inicio">ínicio</a></li>
                    <li><a href="Atividades/Atividades.html" id="link-Atividades" title="Atividades">Atividades</a>
                    </li>
                    <li><a href="Horarios/Horarios.html" id="link-Horarios" title="Horarios">Hórarios</a></li>
                    <li><a href="Contato/Contato.html" id="link-Contatoss" title="Contato">Contato</a></li>
                  </ul>   
            </div>
        <!-- TODO: COMPONENTIZAR menu2 -->
            <div id="toolbar" class="header">
                <div class="container">
                    <div id="search-bar">
                        <form action="/busca" method="get">            
                            <input type="text" name="q" placeholder= "pesquisar">
                            <input type="image" src="img/busca.jpg">
                        </form>    
                    </div>
                    <ul id="toolbar-menu">
                        <li class="login">                                   
                            <a href="Login/Login.html" title="Fazer Login">Login</a>
                        </li>  
                    </ul>
                </div>
            </div>  
		<div class="cor02">
			<div class="slideshow-container">
  				<div class="mySlides fade">
    				<div class="numbertext"></div>
    				<img src="img/judo.jpg" height="400px"; style="width:100%">
    			</div>
 				<div class="mySlides fade">
 			   		<div class="numbertext"></div>
   			 		<img src="img/musculação.jpg" height="400px" style="width:100%">
    		</div>

  			<div class="mySlides fade">
   			 	<div class="numbertext"></div>
  			  	<img src="img/aerobico.jpg" height="400px" style="width:100%">
  			</div>
  					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  					<a class="next" onclick="plusSlides(1)">&#10095;</a>
  			</div>
			

			<div style="text-align:center">
  				<span class="dot" onclick="currentSlide(1)"></span> 
  				<span class="dot" onclick="currentSlide(2)"></span> 
  				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</div><br>
			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
  				showSlides(slideIndex += n);
				}

				function currentSlide(n) {
 				 showSlides(slideIndex = n);
				}

				function showSlides(n) {
  				var i;
  				var slides = document.getElementsByClassName("mySlides");
  				var dots = document.getElementsByClassName("dot");
  				if (n > slides.length) {slideIndex = 1}    
  				if (n < 1) {slideIndex = slides.length}
 				 for (i = 0; i < slides.length; i++) {
     				 slides[i].style.display = "none";  
  				}
  				for (i = 0; i < dots.length; i++) {
      				dots[i].className = dots[i].className.replace(" active", "");
 				 }
 				 slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";
				}
			</script>
      <div>
        <center><img src="img/nome.png" height="50px" >
      </center>
    </div><br>  
      <div align="center">
          <img src="img/aerobica.jpg" id="imgposicao1" class="imgposicao" height="200px" width="200px" />
        
          <img src="img/musculacao.jpg" id="imgposicao2" class="imgposicao" height="200px" width="200px"/>  
     
          <img src="img/jiutisu.jpg" id="imgposicao3" class="imgposicao" height="200px" width="200px" />
      </div> <br>
      
      <div id="rodape" >
       <center><img src="logo.png" height="50px" >
      </center>
      </div> 
    </div>
  
     
    </body>
</html>
