<?php 
get_header(); ?>

	

	<section class="intro" >
	<img src="<?php echo get_template_directory_uri(); ?>/1.png">
	</section>
			


	<section class="projects">	

		<div class="small small-center">
			<?php get_template_part('includes/section','recentproject');?>
			<?php get_template_part('includes/section','projectsdisplay');?>
			<div class="small-center">
				<h2>Oto nasze projekty</h2>
			</div>
			<div class="href-projects">
				<a href="http://detailing.test/category/Realizacje/" class="archive-btn">Sprawdź wszystkie nasze realizacje</a>
			</div>
		</div>
	</section>


	
	<section class="info">
		<div class="costs-container">
			<?php get_template_part('includes/section','costs');?>			
		</div>
		<div class="contact-container-1">
			<?php $field = get_field_object('e-mail'); ?>
			<p>
				<i class="fas fa-envelope"></i>
				<?php echo $field['value']; ?>
			</p>
		</div>

		<div class="contact-container-2">
			<?php $field = get_field_object('adres'); ?>
			<p>
				<i class="fas fa-map-marker-alt"></i>
				<?php echo $field['value']; ?>
			</p>
		</div>

		<div class="contact-container-3">
			<?php $field = get_field_object('telefon'); ?>
			<p>
				<i class="fas fa-phone-square-alt"></i>
				<?php echo $field['value']; ?>
			</p>
		</div>
	</section>



<?php get_footer(); ?>