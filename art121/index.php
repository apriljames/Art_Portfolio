<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Art121';
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
			$category = "ceramics";
			$posts = $postObj->SelectCategory($category);
		?>
	
	<!-- +++++ Projects Section +++++ -->
		<div class="container pt">

		<?php $count = 0 ?>
		<?php foreach ($posts as $post): ?>
			<?php 
				if (($count % 4) == 0) {
					echo "<div class=\"row mt centered\">\n";
				}	
			?>
			<a class="" href= "" >
				<div class="col-lg-3">
					<img class="img-responsive" src="<?php echo ".", $post['img_url'] ?>" alt="" />
					<div class="overlay">
						<div class="zoomText"><?php echo $post['title'] ?></div>
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
