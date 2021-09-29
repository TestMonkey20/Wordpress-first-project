<?php if(have_posts()): while(have_posts()): the_post();?>

	<div class="archive-wrap">
	<img src="<?php the_post_thumbnail_url('img1');?>" alt="<?php the_title();?>">
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		
	</div>

	

<?php endwhile; else: endif;?>