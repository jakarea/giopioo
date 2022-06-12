<?php
/**
 * Template part for displaying a testimonials on home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

?>

<!--Testimonial Section [Start]-->
<section class="section-big-padding pb-2">
    <div class="container">
        <div class="mb-16 2xl:mb-20">
            <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
            <h2 class="text-giopio-black giopio-title-size font-bold mb-2">People Are <span class="inline-block text-giopio-orange">Talking</span> About Us</h2>
        </div>
        <div class="mx-auto testimonial-carousel relative">
            <div id="testimonialSlider">
            <?php 
                $args = array(
                    'post_type'     => 'feedback',
                    'posts_per_page'=> 5,
                    'order' => 'DESC',
                );
                $blogQry = new WP_Query($args);
                if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                
            ?>
                <div>
                    <div class="testimonial md:flex gap-12 p-6 md:p-12 xl:mx-36 pb-28 mb-28">
                        <?php 
                            if (has_post_thumbnail() ) :     
                        ?>
                        <div class="w-28 h-28 md:w-36 md:h-36">
                        <?php the_post_thumbnail( "feedback-image", 'class=rounded-full object-cover w-28 h-28 md:w-36 md:h-36' ); ?>
                        </div>
                        <?php endif ?>

                        <div class="md:w-[calc(100%_-_12rem)]">
                            <i class="fa-solid fa-quote-right text-4xl md:text-6xl text-giopio-orange mb-6"></i>
                            <h3 class="text-2xl md:testimonial-title font-bold text-giopio-black mb-4"><?php do_action('get_red_text', [get_the_title(),get_post_meta($post->ID, 'red_text', true)] )?></h3>
                            
                            <p class="text-sm md:text-base font-medium text-giopio-text mb-6 leading-7"<?php the_content()?></p>
                            <div>
                                <p class="text-giopio-black text-base font-semibold mb-0"><?= get_post_meta($post->ID, 'name', true) ?></p>
                                <span class="text-giopio-text text-sm font-medium"><?= get_post_meta($post->ID, 'designation', true) ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Section [End]-->