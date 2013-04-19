		</div>
		
		<footer>
			<div class="container">
				<div class="row titles">
					<div class="span2 offset1">Service</div>
					<div class="span6">Veranstalter</div>
					<div class="span2">Social</div>
				</div>
				<div class="row">
					<div class="span2 offset1 border">
						<ul>
							<?php wp_list_pages(
								array(
									'title_li' => '',
									'child_of' => 37,
									'depth' => 1
								));
							?>
						</ul>
					</div>
					<div class="span6 border">
						<a href="http://www.berlin.de/ba-tempelhof-schoeneberg/organisationseinheit/jugend-familie/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/JATS_B_RGB_500p_neg.png" width="200" alt="Jugendamt">
						</a>
							<img src="<?php bloginfo('template_directory'); ?>/images/footer_rockini.png" alt="ROCK-INI" style="position: absolute; margin-left: 30px;>
						<a href="http://www.cpye.de/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/images/footer_cpye.png" alt="CPYE e.V." style="position: absolute; margin-top: 37px; margin-left: 120px;">
						</a>
				</div>
				<div class="span2">
					<ul class="social_bottom">
						<li class="facebook"><a href="https://www.facebook.com/ROCKTREFF" target="_blank"></a></li>
						<li class="twitter"><a href="https://twitter.com/ROCKTREFF" target="_blank"></a></li>
					</ul>
				</div>
			</div>
			<?php wp_footer();?>
		</footer>
	</body>
</html>