<?php
			$args = array(

				'post_type' => 'Cost Cards',
				'posts_per_page' => 99

			);
			$_posts = new WP_Query($args);
			?>

			
			<?php if($_posts->have_posts());?>
			<?php while ($_posts->have_posts()): $_posts->the_post();?>

			<div class="cost-card">
				<div class="cost-title">
					<h2><?php the_title();?> </h2>
				</div>
					<ul>
						<?php if( get_field('pin_1') ): ?>
							<li><?php the_field('pin_1'); ?></li>
						<?php endif; ?>
						<?php if( get_field('pin_2') ): ?>
							<li><?php the_field('pin_2'); ?></li>
						<?php endif; ?>
						<?php if( get_field('pin_3') ): ?>
							<li><?php the_field('pin_3'); ?></li>
						<?php endif; ?>
					</ul>
					<?php if( get_field('cost') ): ?>
							<span><?php the_field('cost'); ?></span>
						<?php endif; ?>
			</div>

			<?php endwhile;?>
			<?php wp_reset_postdata();?>
			