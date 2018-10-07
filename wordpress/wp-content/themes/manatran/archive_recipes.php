<?php
/* template name: Events archive */ 
get_header();
?>
<main>
  <section class="content">

    <?php $mycustomquery = new WP_Query( array('post_type'=>'recipes','post_status'=>'publish'))?>
    <?php if($mycustomquery->have_posts()) : while($mycustomquery->have_posts()) : $mycustomquery->the_post() ?>
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