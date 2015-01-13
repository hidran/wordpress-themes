<?php
get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				home
				<h1><?= wp_title( '' ); ?></h1>
			</div>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
					<article>
						<h2>
							<a href="<?=the_permalink()?>"><?=the_title()?></a>
						</h2>
						<p>
							Scritto da :<?=the_author()?>
							Fecha: <?=the_time('l j, F Y')?>
							Categoria :<?=the_category(', ')?>
						</p>
						<?=the_post_thumbnail('medium', array('class'=>'image-responsive'));?>
						
						<?= the_excerpt();?>
						<hr>
					</article>
				<?php

				}
			} else { ?>
				<div class="page-header">
					<h1>Falta contenido</h1>
				</div>


			<?php
			}

			?>

		</div>
		<?php get_sidebar('blog'); ?>
	</div>


	<?php
	get_footer();
	?>  