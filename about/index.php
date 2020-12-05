<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Paintings';
		$level = '../';
		function __autoload($className)
		{
			require_once('../classes/'.$className.'.php');
		}
	?>

	<head>
		<?php 
			include_once('../templates/header.php'); 
		?>
	</head>

  	<body>
  		<?php
			include_once('../templates/nav.php');
		?>

		<!-- +++++ Welcome Section +++++ -->
		<div id="ww">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 centered">
						<img class="a img-responsive" hspace="25" src="img/me.jpg" alt="April">
					</div>
					<div class="col-lg-5 col-lg-offset-1">
						<h1>About Me</h1>
						<p>
						Hello, I'm April, and welcome to my digital canvas! I am currently a Senior studying Computer Science at Oregon State University, and I love creating in my free time. My favorite mediums to work with are copic markers, ceramics, and sketching with Muji pens, though watercolors and resin clay follow closely. I'm looking to get more experience with illustrative and graphic design.
						</p>
						<p>
						My favorite teas are flavored black teas, senchas, and jasmine, and I love chocolate and eggs (but not together). I love hiking, dancing Cuban Salsa (pre-pandemic), and rock climbing. Most importantly, I like making things that make people feel happy. 
						</p>
						<p>
						If there's any art you want to see, if you have a commission idea in mind, or for any inquiries, please contact me at: pchip100@gmail.com. 
						</p>
						<p>
						Thank you for visiting my website and perusing my art! And thank you Tristan for helping me along the way. If wonderful electronic passion projects interest you, look at his site at tristanluther.com! 
						</p>
					</div><!-- /col-lg-6 -->
				</div><!-- /row -->
			</div> <!-- /container -->
		</div><!-- /ww -->
		
		
		<!-- +++++ Information Section +++++ -->
		
		<div class="container pt">
			<div class="row mt">
				<div class="col-lg-6">
					<h4>Philosophy</h4>
					<p style="font-size: 22px; font-weight: 500;">
						"One day we shall win back art again to our daily labor; win back art, this to say, the pleasure of life to the people." - William Morris
					</p>
				</div><!-- /colg-lg-6 -->
				
				<div class="col-lg-6">
					<h4>Recommended Things to Consume:</h4>
					<p><a href="https://www.amazon.com/Hitchhikers-Guide-Galaxy-Douglas-Adams/dp/0345391802">Hitchhiker's Guide</a> <br/>Author: Douglas Adams</p>
					<p><a href="https://www.dolloppodcast.com/podcast">The Dollop Podcast</a> <br/>Created by: Dave Anthony & Gareth Reynolds</p>
					<p><a href="https://open.spotify.com/album/6lEMowwswvl955V51sNm88?si=dFdYK_oPR6SaQtoB31Fhqw">Album: Live in Europe</a> <br/>Jose Gonzalez & The String Theory</p>
				</div><!--col-lg-6-->
			</div><!-- /row -->
		</div><!-- /container -->
	</body>
  	<!-- +++++ Footer Section +++++ -->
	
	<?php
		include_once('../templates/footer.php');
	?>

</html>
