<?php
/* template name: Events archive */ 
get_header();
?>
<main>
  <section class="content">

  <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
    <section>              
      <a href=<?= get_post_permalink()  ?> >
        <h2><?php the_title(); ?></h2>
      </a>
    </section>
        
    <?php endwhile;?>
        
    <?php else:?>
      <p>Not found</p>
    <?php endif;?>
  
    </section>
    
  <?php get_sidebar();?>
</main>
<?php get_footer(); ?>