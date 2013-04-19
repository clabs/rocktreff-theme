<?php
/*
Template Name: Medien-Template
*/
get_header(); ?>
<article id="main" class="row-fluid media">
  <aside class="span3">
  <ul>
    <?php

    $media_child_pages = get_pages(array(
      'sort_order' => 'ASC',
      'sort_column' => 'menu_order',
      'child_of' => 23,
      'depth' => 1
    ));

    if ( $media_child_pages ) {
      foreach ( $media_child_pages as $page ) {

        $bgurl = preg_match('~\bsrc="([^"]++)"~', get_the_post_thumbnail( $page->ID, array(200,200) ), $matches) ? $matches[1] : '';
  
        ?>
      

        <li style="background-image:url('<?php echo $bgurl; ?>')">
          <a href="<?php echo get_page_link( $page->ID );?>">
            <?php echo $page->post_title; ?>
          </a>
        </li>


      <?php
      }
    }
   ?>
  </ul>
  </aside>
  <section class="span8 right">
    <?php the_content(); ?>
  </section>
</article>
<?php get_footer(); ?>