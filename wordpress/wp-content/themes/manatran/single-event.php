<?php
/* template name: Events archive */ 
get_header();
?>
<main>
  <section class="content">

    <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
    <section style="text-align:left;border-bottom:solid 1px #ddd;">              
      <div style="display:flex;flex-direction:row;align-items:center;" >
        <img src="<?php the_post_thumbnail_url();?>" style="width: 50px;height:50px;border-radius:50%;margin-right:16px;">    
        <h2><?php the_title(); ?></h2>
      </div>
      
    </section>
        
    <?php endwhile;?>
        
    <?php else:?>
      <p>Not found</p>
    <?php endif;?>
  
    </section>
    
  <?php get_sidebar();?>
</main>
<?php get_footer(); ?>