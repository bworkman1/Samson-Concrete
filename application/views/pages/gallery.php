<div id="page-content">
	<h2 class="text-danger">Gallery <?php echo $gallery == '' ? '' : '('.ucwords($gallery).')' ; ?></h2>

	<?php

		$numOfCols = 3;
		$count = 0;
		$showGalleryButton = false;


		echo '<div class="row">';

			$gallery = str_replace('-', ' ', $gallery);
			if($gallery && isset($galleries[strtoupper($gallery) ] ) ) { // IF GALLERY IS SET SHOW IMAGES

				foreach($galleries[strtoupper($gallery)] as $i => $image) {
					echo '<div class="col-md-4">';
						echo '<a 
							href="' . $image['path'] . '" 
							rel="lightbox" 
							data-lightbox="image-'.$i.'" 
							data-title="'.$image['alt'].'">';

							echo '<img 
								src="' . $image['path'] . '" 
								class="img-fluid image-border" 
								alt="'.$image['alt'].'" >';

						echo '</a>';
					echo '</div>';
 
					$count++;
    				if($count % $numOfCols == 0) echo '</div><div class="spacer"></div><div class="row">';
				}
				$showGalleryButton = true;

			} else { // IF GALLERY ISN'T SET SHOW GALLERY DIRECTORIES
				foreach($galleries as $name => $gallery) {
					echo '<div class="col-md-4">';
						echo '<div class="image-container">';
							echo '<a href="'.current_url().'/?gallery='.url_title(strtolower($name)).'">';
								echo '<img src="' . $gallery[0]['path'] . '" class="img-fluid image image-border">';
							
								echo '<div class="middle">';
									echo '<h4 class="text">' . $name . '</h4>';
								echo '</div>';
							echo '</a>';
						echo '</div>';

						echo '<div class="text-center mobile-gallery-title d-md-none"><h4>'.$name.'</h4></div>';

					echo '</div>';

					$count++;
    				if($count % $numOfCols == 0) echo '</div><div class="spacer"></div><div class="row">';
				}
			}
		echo '</div>';

		if($showGalleryButton) {
			echo '<div class="spacer"></div>';

			echo '<div class="d-flex">';
				echo '<ul class="gallery-list list-inline mx-auto justify-content-center">';
					foreach($galleries as $name => $gallery) {
						echo '<li class="list-inline-item">';
							echo '<a href="'.current_url().'/?gallery='.url_title(strtolower($name)).'">' . ucwords(strtolower($name)) . '</a> / ';
						echo '</li>';
					}
				echo '</ul>';
			echo '</div>';

			echo '<div class="text-center">';
				echo '<a href="'. base_url('gallery') .'" class="btn btn-danger btn-large">Back to Main Gallery</a>';
			echo '</div>';
		}
	?>
</div>
<!-- 
<div class="image-container">
  <img src="img_avatar.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">John Doe</div>
  </div>
</div> -->