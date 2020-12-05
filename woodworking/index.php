<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Woodworking';
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
			$postObj = new Post();
			$category = "woodworking";
			$posts = $postObj->SelectCategory($category);
		?>
	
	<!-- +++++ Projects Section +++++ -->
		<div class="container pt">

		<?php $count = 0 ?>
		<?php foreach ($posts as $post): ?>
			<?php $imgs = explode(",", $post['img_url'])?>
			<?php 
				if (($count % 4) == 0) {
					echo "<div class=\"row mt centered\">\n";
				}	
			?>
			<a class="" href= "post.php?id=<?= $post['art_id'] ?>" >
				<div class="col-lg-3">
					<img class="img-responsive" src="<?= $level, $imgs[0] ?>" alt="" />
					<div class="overlay">
						<div class="zoomText"><?= $post['title'] ?></div>
					</div>
				</div>
			</a>
			<?php $count++ ?>
			<?php 
				if ((($count % 4) == 0) && ($count != 0)) {
					echo "</div>";
				}	
			?>	
		<?php endforeach ?>
		<?php 
			if (($count % 4) != 0) {
				echo "</div>";
			}	
		?>		
		</div>		

  	</body>
  	<!-- +++++ Footer Section +++++ -->
	
	<?php
		include_once('../templates/footer.php');
	?>

</html>
