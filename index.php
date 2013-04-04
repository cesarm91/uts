<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unidades Tecnológicas de Santander</title>
<link rel="stylesheet" href="styles/outside.css"/>
<link rel="stylesheet" href="styles/slide.css" >
<!--<link rel="stylesheet" href="styles/flexslider.css">-->
<!--<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>-->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/s3Slider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() { 
   $('#s3slider').s3Slider({ 
      timeOut: 4000 
   });
});
</script>
</head>

<body>
	<?php include_once("header.php");?>
    
    <div id="main">
    	<div class="width-container">
        	<div id="s3slider">
                <ul id="s3sliderContent">
                    <li class="s3sliderImage">
                        <img src="images/slider-main-2.png"/>
                        <span class="right"><h1>Segunda lengua, requisito de grado solicitado por el MEN</h1><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2></span>
                    </li>
                    <li class="s3sliderImage">
                        <img src="images/slider-main-1.png" />
                        <span class="left"><h1>En las Uts tenemos conciencia ecológica</h1><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2></span>
                    </li>
                    <li class="s3sliderImage">
                        <img src="images/slider-main-3.png" />
                        <span class="right"><h1>Nuevos laboratorios, mayores herramientas para el aprendizaje</h1><h2>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2></span>
                    </li>
            <div class="clear s3sliderImage"></div>
                </ul>
            </div>

            <div id="sidebar">
            	<div class="content-boxed">
                    <ul>
                    	<li><a href="#">Estudiantes</a></li>
                        <li><a href="#">Profesores</a></li>
                        <li><a href="#">Institucional</a></li>
                        <li><a href="#">Portales</a></li>
                        <li><a href="#">Egresados</a></li>
                        <li><a href="bienestar.php">Bienestar</a></li>
                        <li><a href="#">Biblioteca Virtual</a></li>
                        <li><a href="#">Apoyo Financiero</a></li>
                        <li><a href="comunicaciones.php">Comunicaciones</a></li>
                        <li><a href="#">Contratación</a></li>
                        <li><a href="#">Acreditación</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="sidebar-notice">
            	<div class="content-boxed">
                    <ul>
                    	<li><a href="#"><img src="images/notice-1.png" /></a></li>
                        <li><a href="#"><img src="images/notice-3.png" /></a></li>
                    </ul>
                </div>
            </div>
            
            <div id="sidebar-notice">
            	<div class="content-boxed">
                    <ul>
                    	<li><a href="#"><img src="images/notice-2.png" /></a></li>
                        <li><a href="#"><img src="images/notice-4.png" /></a></li>
                    </ul>
                </div>
            </div>
            
            <div id="sidebar-radio">
            	<div class="content-boxed">
                    <ul>
                    	<li><a href="#"><img src="images/radio.png" /></a></li>
                        <li><a href="#"><img src="images/radio-notice.png" /></a></li>
                    </ul>
                </div>
            </div>
            
		</div>
        <!--TERMINA WIDTH-CONTAINER-->     
    </div>
    
    <div class="footer">
    	 <div class="width-container">
         	<div class="logos-filiales"><img src="images/logos-filiales.png" /></div>
            <div class="bg-footer"><img src="images/bg-footer.png" /></div>
         </div>
    </div>
      
</body>
</html>
