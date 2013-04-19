<?php get_header(); ?>
<section id="main" class="row">
	<div class="span12" id="bandpage">
		<div class="row">
			<div class="span2 lineup">
				<?php
					$year = the_date( 'Y', null, null, false );

					echo "<h4>Rocktreff $year</h4>";

					echo do_shortcode("[archivist query=\"category_name=$year&post_type=band&orderby=title&order=ASC&posts_per_page=-1\" template=\"current_bands\"]");
				?>
			</div>
			<div class="span10">
				<div class="row">
					<div class="span6">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="span6 hyphenate" lang="de">
						<?php the_content(); ?>
					</div>
					<div class="span3 infos">
						<?php

							if ( has_post_thumbnail()) {
								the_post_thumbnail( array( 220, 220 ) );
							}
						?>
						<h4>Stilrichtung</h4>
						<?php
							$genre = get_post_custom_values( 'genre' );
							echo is_array( $genre ) ? $genre[0] : 'unbekannt';
						?>
						<h4>Webseite</h4>
						<?php
							$url = get_post_custom_values( 'link' );
							echo is_array( $url ) ? '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>' : 'keine Angabe';
						?>
						<h4>Spielzeit</h4>
						<?php
							$spielzeit = get_post_custom_values( 'spielzeit' );
							echo is_array( $spielzeit ) ? $spielzeit[0] : 'unbekannt';
						?>

						
					</div>
				</div>
					<div class="row" style="margin-top: 3em">
					<div class="span9">
						<?php /*comments_template();*/ ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>