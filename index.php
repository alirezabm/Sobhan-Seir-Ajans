<head>
		<link rel="stylesheet" href="style.css"/>
		<script type="text/javascript" src="zepto.js" ></script>
		<script type="text/javascript" src="script.js" ></script>
</head>

<body>

	<div class="main">

		<header>
			
			<div class="banner"></div>
			<div class="hr-headfoot1"></div>

			<nav>
				<ul>
					<li class="active">
						<a class="active" href="index.php">	HOME </a>
					</li>
					<li> <a href="#">	ABOUT	</a> </li>
					<li> <a href="info.html">	INFO	</a> </li>
					<li> <a href="#">	GALLERY	</a> </li>
					<li> <a href="contacts.html">	CONTACTS	</a> </li>
				</ul>
			</nav>
			<input type="search" value=" SITE SEARCH" />
		</header> 

		<div class="hr-headfoot2"></div>

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

		<div class="hr-headfoot1"></div>

		<div class="content">

			<div class="welcome">
				<h2>WELCOME!</h2>
				<p>
					WE ARE SPECIALIZING IN THE CREATION OF COMFORTABLE SPACE OUR COMPANY PROVIDES ULTIMATE SOLUTIONS FOR ALL INTERIOR NEEDS FOR DESIGN TO INSTALLATION.
				</p>
			</div>

			<div class="featured-projects">

				<div class="fp-header">
					<h2>	FEATURED PROJECTS	</h2>
					<a href="">		VIEW ALL	</a>
				</div>

				<div class="hr-content"></div>

				<div class="fp-content">
					
					<div class="fp1">
						<a href="">
							<img src="image/fp1.jpg">
						</a>	
					</div fp1>
					<div class="fpname1">
						<h3> PROJECT NAME: </h3>
						<p>Est omnis dolore serele sdameto</p>
					</div fpname1>

					<div class="fp2">
						<a href="">
							<img src="image/fp2.jpg">
						</a>	
					</div fp2>
					<div class="fpname2">
						<h3> PROJECT NAME: </h3>
						<p>Dolore serele sdameto aurerumo</p>
					</div fpname2>

					<div class="fp3">
						<a href="">
							<img src="image/fp3.jpg">
						</a>	
					</div fp3>
					<div class="fpname3">
						<h3> PROJECT NAME: </h3>
						<p> Massa mnis dolore serele lorem</p>
					</div fpname3>

				</div fp-content>

				<div class="hr-content"></div>

			</div featured-projects>

			<div class="info">
					
				<div class="info1">
					<h2>WHO WE ARE*</h2>
					<p>Est omnis <br/> doloresereledusempquibdameto <br/> aurerumoms odes necessitatibus saepem <br/> eveniet <br/> restude.susandaeItaquearumumel rerum <br/> hic tenetura sapiravi. Reiciendis
					<br/> vptatibuass maiores alias.</p>
					<input type="button" value="MORE"/>
				</div info1>

				<div class="info2">
					<h2>NEW IDEAS*</h2>
					<p>Est omnis <br/> doloresereledusempquibdameto <br/> aurerumoms odes necessitatibus saepem <br/> eveniet <br/> restude.susandaeItaquearumumel rerum <br/> hic tenetura sapiravi. Reiciendis
					<br/> vptatibuass maiores alias.</p>
					<input type="button" value="MORE"/>
				</div info2>

				<div class="info3">
					<h2>DESIGN TREND*</h2>
					<p>Est omnis <br/> doloresereledusempquibdameto <br/> aurerumoms odes necessitatibus saepem <br/> eveniet <br/> restude.susandaeItaquearumumel rerum <br/> hic tenetura sapiravi. Reiciendis
					<br/> vptatibuass maiores alias.</p>
					<input type="button" value="MORE"/>
				</div info3>

			</div info>

			<div class="partners">

				<h2> PARTNERS </h2>

				<div class="partners1">
					<a href="">
						<img src="image/partners1.jpg">
					</a>
				</div partners1>

				<div class="partners2">
					<a href="">
						<img src="image/partners2.jpg">
					</a>
				</div partners2>

				<div class="partners3">
					<a href="">
						<img src="image/partners3.jpg">
					</a>
				</div partners3>

				<div class="partners4">
					<a href="">
						<img src="image/partners4.jpg">
					</a>
				</div partners4>

			</div partners>

		</div>

		<div class="hr-headfoot1"></div>

		<footer>
			<h2>COPYRIGHT</h2>
			<p> | SNOWFLAKES [ARBM] 2012</p>
		</footer>

	</div>

</body>