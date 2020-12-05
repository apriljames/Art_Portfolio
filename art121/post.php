<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Ceramics';
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
			$category = "ceramics";
            $post = $postObj->SelectPostByID($id);
		?>
	
	
        <div class="container pt">
            <div class="row mt centered">	
                <div class="col-lg-10 col-lg-offset-1">
                    <p><img class="img-responsive" src="<?= $level, $post['img_url'] ?>" alt=""></p>
                    <p><?php echo $post['title'] ?> : <?= $post['medium'] ?> : <?= $post['date'] ?></p>
                    <p> <?= $post['description'] ?> </p>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
	
    </body>
    <?php
		include_once('../templates/footer.php');
    ?>
</html>