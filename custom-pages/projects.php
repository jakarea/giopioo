<?php
/**
* Template Name: Project Page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package giopioo
* This is the template that displays all projects
* Please note that to use this page, you must
* have to select About Page in tempalte 
* When creating a new page
*/
get_header();
?>
    <section class="bg-giopio-black text-center py-28 mt-28">
        <div class="container">
            <h1 class="giopio-title-size text-white font-bold">Our Projects</h1>
        </div>
    </section>

<!--Our Works Section [End]-->
<section>
        <!--Project 01-->
        <?php 
    $colors = ['#FFF3F3','#FEF8F3','#F3F9FF','#F5F3FE'];
    $i = 0;

        $args = array(
            'post_type'     => 'project',
            'posts_per_page'=> 5
        );
        $blogQry = new WP_Query($args);
        if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
        
        //CMB2
        $duration  = get_post_meta( get_the_ID(), '_cmb_duration', true );
        $slogan  = get_post_meta( get_the_ID(), '_cmb_slogan', true );
        $live_link  = get_post_meta( get_the_ID(), '_cmb_live_link', true );

        // Taxonomy

        $technologies = get_the_terms( get_the_ID(), 'technologies' );


        if($i % 2 !== 0){
            $left = 'right-0';
            $reverse = 'flex-col';
            $order1= '';
            $order2= '';
        }else{
            $left = 'left-0';
            $order1= 'order-1';
            $order2= 'order-2 justify-end';
            $reverse = 'flex-col-reverse';
        }
    ?>

    <div class="relative z-10">
        <div class="absolute <?= $left?> top-0 bottom-0 w-4/6 -z-10" style="background-color: <?= $colors[$i] ?>"></div>
        <div class="container">
            <div class="flex <?=  $reverse ?>  lg:flex-row items-center py-20 xl:mx-16">
                <div class="flex-1 flex <?= $order2 ?>">
                    <?php 
                    if (has_post_thumbnail() ) :     
                        ?>
                    
                        <?php the_post_thumbnail( "project-image", 'class=mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg' ); ?>
                        
                <?php endif ?>
                </div>
                <div class="flex-1 <?= $order1?>">
                    <h3 class="project-box-title font-bold text-giopio-black mb-3"><a href="<?php  the_permalink()?>"> <?= the_title() ?> </a></h3>
                    <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8"><?= $slogan ?></h5>
                    <?php the_excerpt(); ?>
                    <br/>
                    <div class="text-sm text-giopio-text font-semibold mb-2">Duration: <?= $duration ?></div>
                    <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                    <?php 
                        if($technologies):
                    ?>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <?php 
                            
                                foreach($technologies as $technology) :
                            ?>
                            <a href="#" class="giopio-tag-btn"><?= $technology->name ?></a>
                            <?php  endforeach;?>
                        </div>
                        <?php endif; ?>
                        <?php if($live_link) :?>
                            <a href="<?=live_link ?>" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $i++;
        endwhile;
        endif;
        wp_reset_postdata();
    ?>

	<?php echo get_template_part('template-parts/faq');?>
<?php get_footer(); ?>