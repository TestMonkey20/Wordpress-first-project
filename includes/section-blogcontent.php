<?php if(have_posts()): while(have_posts()): the_post();?>

	<div class="archive-wrap">
			
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		
	</div>

	

<?php endwhile; else: endif;?>