<?php
include('classes.php');
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="/CSS/styles.css" />
        <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 1100px)' href='/CSS/tablet.css' />
        <link rel='stylesheet' media='screen and (max-width: 700px)' href='/CSS/phone.css' />
        <?php #color::set('blue'); ?>
        <script src="scripts.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>FSP | Home</title>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-21351328-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>
    </head>
    <body>
        <div class="view" id="view1">
            <div style="position: relative; top: 10%;">
                <div class="logo">
                    <h1>Flamespinner</h1>
                    <h2>Productions</h2>
                </div>
               <!-- <p><a href="/Design">Design</a> &#8226 <a href="/Consulting">Consulting</a> &#8226 <a href="/Creation">Creation</a> &#8226 <a href="/Repair">Repair</a> &#8226 <a href="/Apps">Apps</a> &#8226 <a href="http://blogs.dbztech.com">Hosting</a></p> -->
                <img src="Resources/Images/arrowred.svg" alt="Continue" class="arrow downarrow" id="arrow1" />
            </div>
        </div>
        <div class="view" id="view2">
        	<div id="header">
        		<h1>Flamespinner Productions</h1>
        	
        	</div>
        	
		
	<ul id="Nav" style="Nav" style="top: 1179px;">
	
		<li>
			<a title="Back2Top" href="#view1">Top</a>
		</li>
		<li>
			<a title="What is FSP" href="#view2">Home</a>
		</li>
		<li>
			<a title="Games" href="#view3">Games</a>
	</ul>
        	
        	
        	
        	
            <div class="panel">
                <div class="panelrect" style="border-bottom-right-radius: 0px;">
                    <div class="panelpadding">
                        <h1>Header 1</h1>
                        <h2>Header 2</h2>
						<p>Text</p>
                        <a href="/Design" class="link"><img src="/Resources/Images/Link.svg" alt="Link" /></a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
           		<br />
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view3">
            <div class="panel panelleft" style="">
                <div class="panelrect" style="border-bottom-left-radius: 0px;">
                    <div class="panelpadding">
                        <h1>Gaming</h1>
                        <h2>Minecraft Etc.</h2>
                        <p></p>
                        <a href="/Consulting" class="link"><img src="/Resources/Images/Link.svg" alt="Link" /></a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner2.svg" class="panelcorner panelcornerleft" alt="Corner" />
            </div>
            	<br />
            	<br />
            	<br />
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view4">
           <br />
           <br />
            <div class="buttonholder">
                <a class="button smallbutton" href="/Profile"><p id="profilebutton">Profile</p></a>
                <a class="button bigbutton" href="mailto:flamespinnerproductions@gmail.com"><p>@Contact</p></a>
            </div>
            <div class="info" itemscope itemtype="http://schema.org/Organization">
                <h1><span itemprop="name">Flamespinner Productions</span></h1>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <i>Location: <span itemprop="addressLocality">Maplewood</span>,
                  <span itemprop="addressRegion">MN</span></i>
                </div>
                <br />
                <i>Tel: <span itemprop="telephone"><a href="tel:6513469760">(651)-481-4946</a></span></i>
                <br />
                <i>Email: <span itemprop="email"><a href="mailto:flamespinnerproductions@gmail.com">flamespinnerproductions@gmail.com</a></span></i>
            </div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <?php include('mobilead.php'); ?>
    </body>
</html>