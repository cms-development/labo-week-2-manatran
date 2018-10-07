<?php
/* template name: Events archive */ 
get_header();
?>
<main>
  <section class="content">

    <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
    <section style="text-align:left;">
      <div style="display:flex;flex-direction:row;align-items:center;" >
        <img src="<?php the_post_thumbnail_url();?>" style="width: 150px;height:150px;border-radius:50%;margin-right:16px;">    
        <h2><?php the_title(); ?></h2>
      </div>
      <p><?php echo get_post_meta(get_the_ID(), '_recipe_subtitle', TRUE); ?></p>
      <p><?php echo get_post_meta(get_the_ID(), 'introduction', TRUE); ?></p>
      
    </section>
        
    <?php endwhile;?>
        
    <?php else:?>
      <p>Not found</p>
    <?php endif;?>
  
    </section>
    
  <?php get_sidebar();?>
</main>
<?php get_footer(); ?>