<?php 
// Header
get_header();
?>
<main>
  <section class="content">
  <?php
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      ?><h1><?php the_title(); ?></h1><?php
      the_content();
    endwhile;
  endif;

  ?>
  <div class="columns">
      
  <?php

  $args = array(
          'posts_per_page' => 2,
          'order' => 'desc',
          'orderby' => 'date',
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'algemeen',
              'include_children' => false
            ),
          )
      );

  $posts = new WP_Query($args);
  if( $posts->have_posts() ):
    ?>
    <div class="col">
    <h2>Recente posts</h2>
    <?php
    while( $posts->have_posts() ) :
      $posts->the_post(); 
      ?><h4><?php the_title(); ?></h4><?php
      the_content();
    endwhile;
    
    ?>
    </div>
    <?php
  endif; 


  $args2 = array(
          'posts_per_page' => -1,
          'order' => 'ASC',
          'orderby' => 'date',
          'tax_query' => array(
            array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => 'weetje',
              'include_children' => false
            ),
          )
  );

  $posts2 = new WP_Query($args2);
  if($posts2->have_posts()):
    ?>
    
    <div class="col">
    <h2>Weetjes</h2>
    <?php
    while($posts2->have_posts()) :
      $posts2->the_post();
      ?><h4><?php the_title(); ?></h4><?php
      the_content();
    endwhile;
    ?>
    </div>
    <?php
  endif;
  wp_reset_postdata();
  ?>
  </div>
  </section>

<?php
// Sidebar
get_sidebar('primary-sidebar');
?>

</main>
<?php
// Footer
get_footer();
?>