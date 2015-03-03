<?php get_header(); ?>
<!--Single Post Template-->

    <?php if(have_posts()):while(have_posts()) : the_post(); ?>
 
        <div class="row">
            
            <div class="col-lg-12">
                
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1><?php the_title();?></h1> 
                    </div>
                    
                    <?php the_content();?>
                    
               </div> 
            
            
            
            </div>
        
        </div>

    <?php endwhile; else: ?>
        <p> <?php _e('No posts were found. Sorry!'); ?> </p>
    <?php endif; ?>


<?php get_footer();?>