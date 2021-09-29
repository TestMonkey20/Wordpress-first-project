<?php
			$args = array(

				'post_type' => 'post',
				'posts_per_page' => 3,
				'offset' => 1,

			);
			$_posts = new WP_Query($args);
			?>


			<?php if($_posts->have_posts());?>
			<?php while ($_posts->have_posts()): $_posts->the_post();?>
			
			<div class="projects-container">

				<div class="front-img-box">
					<?php if(has_post_thumbnail());?>
					<img class="front-img" src="<?php the_post_thumbnail_url('img1');?>" alt="<?php the_title();?>">
				</div>
				<!-- <div class="projects-title">
					<h1><?php the_title();?> </h1>
				</div>
				<div class="projects-data">
					<?php the_excerpt();?>
				</div> -->

				</div>
			
			<?php endwhile;?>
			<?php wp_reset_postdata();?>

			
			