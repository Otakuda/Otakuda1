<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Otakuda App</title>
		
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/scan.css" />
		<link rel="stylesheet" type="text/css" href="../css/mockup2.css" />
		<script src="../js/modernizr.custom.js"></script>
	</head>
	<body class="demo-2">
		<div id="header">
        <a class="site-logo" href="<?= base_url(); ?>index">
    	 <img src="../fb/super.png" style="width: 100px ; height: 70px;"></a>
    
    
</div>
		<div class="container">
			<!-- Top Navigation -->
			
			<div id="wrap" class="wrap">
				<div class="mockup">
					<img class="mockup__img" src="../img/com.jpg" />
					<div class="screen">
						<ul id="slideshow" class="slideshow">
							<li class="slideshow__item"><img src="../img/large/2.png"/></li>
							<li class="slideshow__item"><img src="../img/large/3.png"/></li>
							<li class="slideshow__item"><img src="../img/large/4.png"/></li>
							<li class="slideshow__item"><img src="../img/large/1.png"/></li>
						</ul>
					</div>
					<div class="fixed" style=" top:300px ; left: 400px; position: fixed;">
                    <div class="top-1">
                    <div id="description" style="background-position: 0px 0px; z-index: 11;">
                    </div>
                    <div id="qrcode-wrapper">
                    <div class="qrcode"></div>
                    <div id="btn">
                        <a href="">立即下载</a>
                    </div>
                </div>
            </div>
        </div>
				</div>
			</div>
		</div>

			
		<script src="../js/classie.js"></script>
		<script src="../js/main.js"></script>
		<script>
			(function() {
				new Slideshow( document.getElementById( 'slideshow' ) );

				/* Mockup responsiveness */
				var body = docElem = window.document.documentElement,
					wrap = document.getElementById( 'wrap' ),
					mockup = wrap.querySelector( '.mockup' ),
					mockupWidth = mockup.offsetWidth;

				scaleMockup();

				function scaleMockup() {
					var wrapWidth = wrap.offsetWidth,
						val = wrapWidth / mockupWidth;

					mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
				}
				
				window.addEventListener( 'resize', resizeHandler );

				function resizeHandler() {
					function delayed() {
						resize();
						resizeTimeout = null;
					}
					if ( typeof resizeTimeout != 'undefined' ) {
						clearTimeout( resizeTimeout );
					}
					resizeTimeout = setTimeout( delayed, 50 );
				}

				function resize() {
					scaleMockup();
				}
			})();
		</script>
	</body>
</html>
