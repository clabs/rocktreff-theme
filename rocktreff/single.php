<?php get_header(); ?>
<section id="main" class="row">
	<div class="span12" id="bandpage">
		<div class="row">
			<div class="span6">
				<h1><?php the_title(); ?></h1>
				<p style="text-align:justify">
					<?php the_content(); ?>
				</p>
			</div>
			<div class="span3 infos">
				<?php
					if ( has_post_thumbnail()) {
						the_post_thumbnail( array( 220, 220 ) );
					}
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>