<?php
/**
 * Template part for displaying a recent work  on home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

?>
<!--Our Works Section [End]-->
<section>
    <div class="container">
        <div class="mb-16 2xl:mb-20">
            <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
            <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Our Works <span class="inline-block text-giopio-orange"> Define Us</span></h2>
        </div>
    </div>
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
                    <p class="text-sm text-giopio-text leading-6 font-medium mb-5"><?php the_excerpt(); ?></p>
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
                    <a href="#" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
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
    

    <div class="text-center pt-14">
        <a href="#" class=" text-giopio-orange text-base font-semibold duration-300 hover:text-giopio-black">Explore All Projects</a>
        <div class="w-16 border border-giopio-orange ml-auto mr-auto mt-4"></div>
    </div>
    
</section>
<!--Our Works Section [End]-->