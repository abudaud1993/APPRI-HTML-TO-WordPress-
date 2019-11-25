<?php get_header();?>



    <section class="single-post-title">
        <div class="container">
    <div class="row">
        <?php
        if(have_posts()){

        while(have_posts()) : the_post(); ?>
    
        <div class="col-xl-12">
            <div class="single-page text-center">
                <h2><?php the_title();?></h2>
                <span> Time:- <?php the_time(' d-M-y , g:i a');?> </span> /
                <span> Category:- <?php the_category(','); ?> </span> /
                <span> <?php the_tags();?></span> 
            </div>
        </div>

            <?php
        
        endwhile;

        }

        ?>

    </div>

    </div>

    </section>
    <div class="container">
    <section class="single-post-img">
    <div class="row">
        <?php
        if(have_posts()){

        while(have_posts()) : the_post(); ?>
    
        <div class="col-xl-12">
            <div class="single-page-img text-center">
                <?php the_post_thumbnail('full')?>
                <?php the_content();?>
            </div>
        </div>

            <?php
        
        endwhile;

        }

        ?>

    </div>

    </div>

    </section>

        <section comment-area>
            <div class="container">
            <div class="row">
                <div class="col_xl_12">

                <?php comments_template();?>


                </div>
            </div>




            </div>







        </section>




<?php get_footer();?>