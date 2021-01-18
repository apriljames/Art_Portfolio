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
			include_once('templates/header.php'); 
		?>
	</head>

  	<body>
  		<?php
			include_once('templates/nav.php');
		?>


        <div class="container pt">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<h3>Image:</h3>
					<input type='file' accept="image/*" class="post-upload" onchange="previewFile()"/>
					<div class="img-preview" id="img-preview">
					</div>
				</div>
				<div class="col-lg-6">
				
				</div>
			</div>
        </div> <!-- /container -->

		<?php
			$numUploads = count($_FILES['files']['name']);
			echo($numUploads);
			echo($_FILES['files']['name'][0]);
		?>

		<script>
			// used to preview the thumbnail before uploading the post
			function previewFile() {	
				const preview = document.getElementById('img-preview');
				const file = document.querySelector('input[type=file]').files[0];	//retrieve selected files from file input

				const img = document.createElement("img"); 		//	create an html img object
				img.classList.add("img-responsive");
				img.file = file;

				while (preview.firstChild) {					// clear previous preview images from page 
					preview.removeChild(preview.firstChild);
				}
				preview.appendChild(img); 						// display the image in the "preview" div

				const reader = new FileReader();				// asynchronously read the file contents 
				reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img); 
				reader.readAsDataURL(file);
			}
		</script>



    </body>
    <?php
		include_once('templates/footer.php');
    ?>

</html>        