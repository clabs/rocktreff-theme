<?php get_header(); ?>
<section id="main" class="row-fluid">
  <article class="span12">
    <div class="row-fluid" style="width: 880px; padding: 0 30px;">
      <div class="span7">
        <?php
          echo do_shortcode("[archivist query=\"category_name=News&order=date&orderby=DESC&posts_per_page=3\" template=\"news\"]");
        ?>
      </div>
      <div class="span5">
        <div style="height: 270px; background-image: url('http://rocktreff.de/wp-content/uploads/2013/02/plakat2013_v.jpg');background-position: center; background-size: 100%; background-repeat: no-repeat;">
          
        </div>
      </div>
    </div>

    <br />
    <?php
      // carousel
      echo do_shortcode("[archivist query=\"category=2013&post_type=partner&orderby=rand&posts_per_page=-1\" template=\"partner_frontpage\"]");
    ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.smoothdivscroll.min.js"></script>
    <script type="text/javascript">
      $( document ).ready( function () {
        $( '#partner_frontpage' )
          .smoothDivScroll({ 
            autoScrollingMode: 'always',
            autoScrollingDirection: 'endlessloopright', 
            autoScrollingStep: 1, 
            autoScrollingInterval: 25,
            mousewheelScrolling: false,
            manualContinuousScrolling: true
          })
          .bind( 'mouseover', function () {
            $( this ).smoothDivScroll( 'stopAutoScrolling' )
          })
          .bind( 'mouseout', function () {
            $( this ).smoothDivScroll( 'startAutoScrolling' )
          })
      })
    </script>
  </article>
</section>
<?php get_footer(); ?>