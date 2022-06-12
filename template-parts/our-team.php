<?php
/**
 * Template part for displaying our team on home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

?>

<!--Our Teams Section [Start]-->
<section class="section-big-padding relative z-10">
    <div class="absolute left-0 right-0 bottom-0 h-3/5 -z-10" style="background-color: #FEF8F3;"></div>
    <div class="container">
        <div class="mb-16 2xl:mb-20">
            <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
            <h2 class="text-giopio-black giopio-title-size font-bold mb-0">Meet Our <span class="inline-block text-giopio-orange">Team</span></h2>
        </div>
        <div class="flex flex-wrap justify-center gap-12 xl:max-w-75xl mx-auto">
            
        <?php 
                $args = array(
                    'post_type'     => 'team',
                    'posts_per_page'=> 3
                );
                $blogQry = new WP_Query($args);
                if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                
            ?>
        <div class="basis-full md:basis-2/5 lg:basis-1/4 mb-14 lg:mb-0 team-member z-10 relative group">
                <?php 
                    if (has_post_thumbnail() ) :     
                        ?>
                        <div class="member-photo h-full">
                        <?php the_post_thumbnail( "team-image", 'class=rounded-20 h-full w-full object-cover' ); ?>
                        </div>
                <?php endif ?>

                <div class="member-info">
                    <a href="#" class="text-base font-semibold text-giopio-black mb-1 inline-block duration-500 group-hover:text-white"><?php the_title()?></a>
                    <div class="text-sm font-medium text-giopio-text duration-500 group-hover:text-white"><?= get_post_meta($post->ID, 'designation', true) ?></div>
                    <div class="flex gap-5 justify-center -mt-6 duration-500 opacity-0 text-white group-hover:opacity-100 group-hover:mt-6">
                        <?php 
                            $facebook =  get_post_meta($post->ID,'facebook', true);
                            $twitter =  get_post_meta($post->ID,'twitter', true);
                            $linkedin =  get_post_meta($post->ID,'linkedin', true);
                            $instagram =  get_post_meta($post->ID,'instagram', true);
                            $github =  get_post_meta($post->ID,'github', true);
                            $stackoverflow =  get_post_meta($post->ID,'stackoverflow', true);
                            $youtube =  get_post_meta($post->ID,'youtube', true);
                        ?>
                        <?php
                            if($facebook){?>
                                <a href="<?= $facebook; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-facebook-f"></i></a>
                        <?php } ?>

                        <?php
                            if($twitter) {?>
                                <a href="<?= $twitter ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-twitter"></i></a>
                        <?php } ?>

                        <?php
                            if($linkedin){?>
                                <a href="<?= $linkedin; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-linkedin-in"></i></a>
                        <?php } ?>

                        <?php
                            if($instagram){?>
                                <a href="<?= $instagram; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-instagram"></i></a>
                        <?php } ?>
                        
                        <?php
                            if($github){?>
                                <a href="<?= $github; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-github"></i></a>
                        <?php } ?>
                        
                        <?php
                            if($stackoverflow){?>
                                <a href="<?= $stackoverflow; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-stack-overflow"></i></a>
                        <?php } ?>

                        <?php
                            if($youtube){?>
                                <a href="<?= $youtube; ?> " target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-youtube"></i></a>
                        <?php } ?>
                        
                        
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
    <div class="text-center pt-28">
        <a href="#" class=" text-giopio-orange text-base font-semibold duration-300 hover:text-giopio-black">See Our Full Team</a>
        <div class="w-16 border border-giopio-orange ml-auto mr-auto mt-4"></div>
    </div>
</section>
<!--Our Teams Section [End]-->