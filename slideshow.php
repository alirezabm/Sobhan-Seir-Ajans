


		<div class="container">
			<div class="slideshow">

				<div class="train">	
					<?php
						$images_path = 'image/slider';

						$images = scandir($images_path);
						$slidesLen = 0;
						foreach($images as $img){
							$img_arr = explode('.', $img);
							$img_type = strtolower( end($img_arr) );
							if ($img_type=='jpg') {
								echo "<div style=\"background-image:url('$images_path/$img');\"></div>";
								$slidesLen++;
							}
						}
					?>
				</div train>

				<div class="previous"></div>
				<div class="next"></div>
				
				<ul class="btns">
					<?php
						for($i=0;$i<$slidesLen;$i++)
							{
								echo "<li></li>";
							}
					?>
				</ul>
				
			</div slideshow>
		</div container>