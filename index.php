<?php
		error_reporting(E_ALL ^ E_NOTICE);

		require_once('config.php');
		require_once('class/Cascade.class.php');

		$Cascade=new Cascade($page,$options);
       

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

    <head>

        <title><?php $Cascade->_getTitle(); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
		<meta name="keywords" content="<?php $Cascade->_getMeta('keywords'); ?>"/>
		<meta name="description" content="<?php $Cascade->_getMeta('description'); ?>"/>

        <link rel="stylesheet" type="text/css" href="style/nivo-slider.css"/> 	
        <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.captify.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.jScrollPane.css"/>
        <link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/>
		<link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css"/>
        <link rel="stylesheet" type="text/css" href="style/base.css"/> 
        <link rel="stylesheet" type="text/css" href="style/page.css"/> 
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Share" />

		<link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:959px)" href="style/responsive/width-0-959.css"/> 
		<link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:767px)" href="style/responsive/width-0-767.css"/> 
		<link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:959px)" href="style/responsive/width-480-959.css"/> 
		
		<link rel="stylesheet" type="text/css" media="screen and (min-width:768px) and (max-width:959px)" href="style/responsive/width-768-959.css"/> 
		<link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:767px)" href="style/responsive/width-480-767.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width:0px) and (max-width:479px)" href="style/responsive/width-0-479.css"/> 
				
		<script type="text/javascript">
			var mainURL='<?php echo dirname($_SERVER['SCRIPT_NAME']).'/'; ?>';
		</script>
		
        <script type="text/javascript" src="script/linkify.js"></script>
        <script type="text/javascript" src="script/jquery.min.js"></script>
		<script type="text/javascript" src="script/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="script/jquery.easing.js"></script>
		<script type="text/javascript" src="script/jquery.isotope.js"></script>
        <script type="text/javascript" src="script/jquery.captify.js"></script>
        <script type="text/javascript" src="script/jquery.blockUI.js"></script>
        <script type="text/javascript" src="script/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="script/jquery.ba-bqq.min.js"></script>
        <script type="text/javascript" src="script/jquery.jScrollPane.js"></script>
		<script type="text/javascript" src="script/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="script/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="script/jquery.infieldlabel.min.js"></script>
		<script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   

		<script type="text/javascript" src="script/jquery.fancybox.js"></script>
		<script type="text/javascript" src="script/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="script/jquery.fancybox-buttons.js"></script>
		
        <script type="text/javascript" src="script/script.js"></script>
        <script type="text/javascript" src="script/cascade.js"></script>
        <script type="text/javascript" src="plugin/contact-form/contact-form.js"></script>
		<script type="text/javascript" src="script/_style-switcher.js"></script>

    </head>

    <body class="background-carbon">
				
        <!-- Header -->
		<div class="header-wrapper">
			
			<div class="header main box-center clear-fix">

				<div class="layout-7030 clear-fix">

					<div class="layout-7030-left">	
						<h1><a href="<?php $Cascade->_getURL('main'); ?>">António Pereira</a> </h1>
						<h5><a href="<?php $Cascade->_getURL('main'); ?>">programador web</a></h5>	
					</div>

					<div class="layout-7030-right">
						<ul class="no-list header-menu clear-fix">
							<!--<li class="header-menu-download"><a href="#">Download meu cv</a></li>-->
							<li class="header-menu-phone">912759920</li>
							<li class="header-menu-mail"><a href="#">to.pereira12@gmail.com</a></li>
						</ul>
					</div>			

				</div>

			</div>
		</div>
        <!-- /Header -->


        <!-- Content -->
        <div class="content main box-center">

            <!-- Cascade -->
            <div class="cascade preloader">

                <!-- Box menu -->
                <ul class="cascade-menu">
                    <li id="tab-1" class="blue-info">
                        <a href="<?php $Cascade->_getURL('inicio'); ?>">
                            <span class="title">Início</span>
                            <span class="subtitle">Quem eu sou</span>
                        </a>
                    </li>
                    <li id="tab-2" class="lime-lightbulb">
                        <a href="<?php $Cascade->_getURL('percurso'); ?>">
                            <span class="title">Percurso </span>
                            <span class="subtitle">Experiência <br/>profissional</span>
                        </a>
                    </li>
                    <li id="tab-3" class="yellow-document">		
                        <a href="<?php $Cascade->_getURL('formacao'); ?>">
                            <span class="title">Formação</span>
                            <span class="subtitle">Educação e Formação</span>
                        </a>
                    </li>
                    <li id="tab-4" class="green-people">		
                        <a href="<?php $Cascade->_getURL('hobbys'); ?>">
                            <span class="title">Hobbys</span>
                            <span class="subtitle">Tempos Livres</span>
                        </a>
                    </li>
                    <li id="tab-5" class="red-mail">		
                        <a href="<?php $Cascade->_getURL('contacto'); ?>">
                            <span class="title">Contacto</span>
                            <span class="subtitle">Onde me encontrar</span>
                        </a>
                    </li>
                </ul>
                <!-- /Box menu -->

                <!-- Window -->
                <div class="cascade-window">

                    <!-- Close bar -->
                    <div class="cascade-window-close-bar">
                        <a href="<?php $Cascade->_getURL('main'); ?>"></a>
                    </div>
                    <!-- /Close bar -->

                    <!-- Page content -->
                    <div class="cascade-window-content">
						<div class="cascade-page clear-fix">
						<?php $Cascade->loadFile(); ?>
						</div>
					</div>
                    <!-- /Page content -->

                    <!-- Footer -->
                    <div class="cascade-window-footer"></div>
                    <!-- /Footer -->

                </div>
                <!-- /Window -->

                <!-- Navigation -->
                <a href="#" class="cascade-navigation cascade-navigation-prev"></a>
                <a href="#" class="cascade-navigation cascade-navigation-next"></a>
				<a href="#" class="cascade-navigation cascade-navigation-slider-prev"></a>
                <a href="#" class="cascade-navigation cascade-navigation-slider-next"></a>
                <!-- /Navigation -->

            </div>
            <!-- /Cascade -->

        </div>
        <!-- /Content -->


        <!-- Footer -->
        <div class="footer">

            <hr class="footer-line" />

            <div class="main box-center layout-7030 clear-fix">

                <!-- Latest tweets 
                <div class="layout-7030-left latest-tweets">
                    <div id="latest-tweets"></div>
                </div>-->
                <!-- /Latest tweets -->

                <!-- Social icons -->
                <div class="layout-7030-left">

                    <ul class="no-list social-list-1">
                        <li>© 2015 - A. Pereira Web Sites</li>
                        <li>Todos os direitos reservados</li>
              
                    </ul>
                    
                </div>
                <!-- /Social icons -->

            </div>

        </div>
        <!-- /Footer -->
		
		<script type="text/javascript">
			
			var page=<?php echo Cascade::encode($page); ?>;
			var options=<?php echo Cascade::encode($options); ?>;
			var request='<?php echo $Cascade->getRequest(); ?>';
			
			$(document).ready(function() 
			{
				$('.cascade').cascade(page,options,request);
			});
			
		</script>

    </body>

</html>