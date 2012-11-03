

		
		<header>
			
			<div class="banner"></div>
			<div class="hr-headfoot1"></div>

			<nav>

			<!-- 
				<ul>
					<li class="active">
						<a class="active" href="index.php">	HOME </a>
					</li>
					<li> <a href="#">	ABOUT	</a> </li>
					<li> <a href="info.html">	INFO	</a> </li>
					<li> <a href="#">	GALLERY	</a> </li>
					<li> <a href="contacts.html">	CONTACTS	</a> </li>
				</ul>
			-->

				<?php
					wp_nav_menu(array(
						'theme_location'  => 'MainNav',
						'container'       => false, 
						'container_class' => '', 
						'menu_class'      => '', 
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<menu class="%2$s">%3$s</menu>'
					));
				?>

			</nav>
			<input type="search" value=" SITE SEARCH" />
		</header> 

