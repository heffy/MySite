<?php get_header(); ?>

    <?php if(have_posts()):while(have_posts()) : the_post(); ?>
 
        <div class="row">
            
            <div class="col-lg-12">
                
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1><a href="<?php the_permalink();?>" > <?php the_title();?></a></h1> 
                    </div>
                    
                    <?php the_excerpt();?>
                    
               </div> 
            
            
            
            </div>
        
        </div>

    <?php endwhile; ?>
        <p> <?php _e('No posts were found. Sorry!'); ?> </p>
    <?php endif; ?>


<?php get_footer();?>