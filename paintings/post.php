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
        <?php
            $id = $_GET['id'];
			$postObj = new Post();
			$category = "paintings";
			$post = $postObj->SelectPostByID($id);
			$imgs = explode(",", $post['img_url']);
			$numImgs = sizeof($imgs);
		?>
	
	
        <div class="container pt">
			<div class="row mt centered">	
				<div class="col-lg-8 col-lg-offset-2">
					
					<h2><?php echo $post['title'] ?></h2>
					
					<?php 
					if ($numImgs > 1) 
					{ ?>
						<div id="post-img-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#post-img-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#post-img-carousel" data-slide-to="1"></li>
								<li data-target="#post-img-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="http://placekitten.com/1000/1000" alt="Los Angeles">
								</div>

								<div class="item">
									<img src="http://placekitten.com/500/500" alt="Chicago">
								</div>

								<div class="item">
									<img src="http://placekitten.com/1100/500" alt="New York">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#post-img-carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#post-img-carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>	
					<?php
					}
		
					else
					{ ?>			
						<p><img class="img-responsive" src="<?= $level, $post['img_url'] ?>" alt=""></p>
					<?php
					} ?>
						<p><?php echo $post['title'] ?> : <?= $post['medium'] ?> : <?= $post['date'] ?></p>
						<p class="description"> <?= $post['description'] ?> </p>
					
				</div><!-- /col -->
			</div><!-- /row -->
        </div><!-- /container -->
	
    </body>
    <?php
		include_once('../templates/footer.php');
    ?>
</html>