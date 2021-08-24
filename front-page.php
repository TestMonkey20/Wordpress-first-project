<?php 
get_header(); ?>

	

	<div class="container">

		<section class="intro">
			<div class="intro-text">
				<h1 class="hide">
					<span class="text">Auto Detaling</span>
				</h1>
				<h2 class="hide">
					<span class="text">Adrian Rudnicki</span>
				</h2>
			</div>
			
			<div class="stats-container-1">
				<?php
					$field = get_field_object('e-mail');
				?>
				<p>
					<?php echo $field['label']; ?>
					<?php echo $field['value']; ?>
				</p>
			</div>
			<div class="stats-container-2">
				<?php
					$field = get_field_object('counter-2');
				?>
				<p>
					<?php echo $field['label']; ?>
					<?php echo $field['value']; ?>
				</p>
			</div>
		</section>

			
		<section class="projects">
			
			
			<div class="latest-projects">Oto nasze ostatnie projekty</div>

				<?php get_template_part('includes/section','projectsdisplay');?>
				
				<a href="http://detailing.test/category/Realizacje/" class="btn">Sprawdź wszystkie nasze realizacje</a>
		
			
				
		</section>


		<section class="costs">	

			<div class="costs-container">
					<?php get_template_part('includes/section','costs');?>			
			</div>
			
		</section>
		

		<section class="contact">

			<div class="contact-container-1">
				<?php
					$field = get_field_object('e-mail');
				?>
				<p>
					<?php echo $field['label']; ?>
					<?php echo $field['value']; ?>
				</p>
			</div>
			<div class="contact-container-2">
				<?php
					$field = get_field_object('adres');
				?>
				<p>
					<?php echo $field['label']; ?>
					<?php echo $field['value']; ?>
				</p>
			</div>
			<div class="contact-container-3">
				<?php
					$field = get_field_object('telefon');
				?>
				<p>
					<?php echo $field['label']; ?>
					<?php echo $field['value']; ?>
				</p>
			</div>

			
		</section>


	</div>

<?php get_footer(); ?>