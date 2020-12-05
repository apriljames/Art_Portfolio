<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Home';
		$level = '';
		function __autoload($className)
		{
			require_once('classes/'.$className.'.php');
		}
	?>
	

	<head>
		<?php 
			include_once('./templates/header.php'); 
		?>
	</head>

	<body>
		<?php
			include_once('./templates/nav.php');
		?>
		<?php
			$postObj = new Post();
			$allPosts = $postObj->SelectAll();
			$randomKeys=array_rand($allPosts,6);
			$posts = [];
			foreach ($randomKeys as $key):
				array_push($posts, $allPosts[$key]);
			endforeach;
		?>
		<!-- +++++ Projects Section +++++ -->
		<div class="container pt">

		<?php $count = 0 ?>
		<?php foreach ($posts as $post): ?>
			<?php $imgs = explode(",", $post['img_url'])?>
			<?php 
				if (($count % 2) == 0) {
					echo "<div class=\"row mt centered\">\n";
				}	
			?>
			<a class="" href= "post.php?id=<?= $post['art_id'] ?>" >
				<div class="col-lg-6">
					<img class="img-responsive" src="<?php echo $imgs[0] ?>" alt="" />
					<div class="overlay">
						<div class="zoomText"><?= $post['title'] ?></div>
					</div>
				</div>
			</a>
			<?php $count++ ?>
			<?php 
				if (($count % 2) == 0) {
					echo "</div>\n";
				}	
			?>
		<?php endforeach ?>
			
		</div><!-- /container -->
		
	  	</body>
	  	<!-- +++++ Footer Section +++++ -->
		<?php
			include_once('./templates/footer.php');
		?>
</html>
