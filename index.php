<?php get_header(); ?>
<!--Index Template and List of blog posts-->

    <?php if(have_posts()):while(have_posts()) : the_post(); ?>
 
        <div class="row">
            
            <div class="col-lg-12">
                
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1><a href="<?php the_permalink();?>" > <?php the_title();?></a></h1> 
                    </div>
                    
                    
                    
                    <div class="col-lg-4">
                    
                        <?php
                            if(has_post_thumbnail()){
                                
                                the_post_thumbnail('blog-post-thumb');
                            }

                        ?>
                    
                    </div>
                    
                    
                    <div class="col-lg-8">
                    
                        <?php the_excerpt('More'); ?>
                        
                        <?php the_time('l F d, Y');?>
                        
                        <?php the_author(); ?>
                        
                        <?php the_tags(); ?>
                        
                    
                    </div>
                    
                    
                    
               </div> 
            
            
            
            </div>
        
        </div>

    <?php endwhile; else: ?>
        <p> <?php _e('No posts were found. Sorry!'); ?> </p>
    <?php endif; ?>


<?php get_footer();?>