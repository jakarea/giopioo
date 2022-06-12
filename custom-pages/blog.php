<?php
/**
* Template Name: Blog Page
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


    <!--Blog Category Section [End]-->
    <section class="border-t border-b border-giopio-border-2 pt-2 pb-2 mt-28">
        <div class="container">
            <div class="hidden md:flex items-center text-sm 2xl:text-base font-medium justify-between">
                <ul class="flex gap-10 text-giopio-text">
                    <li><a href="#" class="giopio-navlink py-2">Business</a></li>
                    <li><a href="#" class="giopio-navlink py-2">Technology</a></li>
                    <li><a href="#" class="giopio-navlink py-2">Productivity</a></li>
                    <li><a href="#" class="giopio-navlink py-2">Management</a></li>
                    <li><a href="#" class="giopio-navlink py-2">Remote</a></li>
                </ul>
                <div class="search">
                    <div class="text-giopio-text">
                        <i class="fa-solid fa-magnifying-glass mr-3"></i>
                        <span>Search</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Category Section [End]-->

    <!--Banner Section [Start]-->
    <section class="mt-20">
        <div class="container">
            <?php 
                $args = array(
                    'post_type'     => 'post',
                    'posts_per_page'=> 1,
                    'orderby' => 'rand',
                );
                $blogQry = new WP_Query($args);
                if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
            ?>
            <div class="flex flex-col-reverse lg:flex-row lg:items-center">
                <div class="lg:w-1/2 lg:pr-20 pt-10">
                    <h1 class="text-giopio-black giopio-title-size font-bold mb-10"><?php the_title() ?></h1>
                    <p class="mb-10 text-base 2xl:text-lg text-giopio-text leading-7 font-medium"><?php the_excerpt()?></p>
                    <div class="md:flex gap-7 items-center">
                        <a href="<?php echo get_permalink() ?>" class="giopio-btn text-sm 2xl:text-base px-10 text-center font-medium 2xl:font-semibold duration-300 hover:bg-giopio-black">Read Full Post</a>
                        <span class="mt-5 md:mt-0 block text-sm 2xl:text-base text-giopio-text font-medium">Just A <?php do_action('show_reading_time', get_the_content() )?> Read</span>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-end">
                    <?php the_post_thumbnail( "blog-v-image", 'class="w-full lg:w-auto max-w-full xl:blog-banner rounded-md"' ); ?>
                </div>
            </div>
            <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </section>
    <!--Banner Section [End]-->

    <!--Blog Section [Start]-->
    <section class="section-big-padding">
        <div class="container">
            <div class="mb-14 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2"><span class="inline-block text-giopio-orange">Featured</span> From Our Top Authors</h2>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:mx-36">
            <?php 
                $args = array(
                    'post_type'     => 'post',
                    'posts_per_page'=> 5,
                    'order' => 'DESC',
                );
                $blogQry = new WP_Query($args);
                if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                
            ?>
                <div>
                    <div class="group rounded-lg blog-box-shdow">
                        <?php 
                            if (has_post_thumbnail() ) :     
                        ?>
                        <div class="rounded-t-lg overflow-hidden">
                        <?php the_post_thumbnail( "blog-v-image", 'class=w-full rounded-t-lg duration-300 group-hover:scale-110' ); ?>
                        </div>
                        <?php endif ?>
                        <div class="px-5 pb-7">
                            <h4 class="blog-thumbnail-title"><a class="text-giopio-black duration-300 hover:text-giopio-orange" href=" <?php echo get_permalink() ?>"><?php the_title() ?></a></h4>
                            <div class="text-sm text-giopio-text font-medium flex items-center justify-between">
                                <a href="#" class="flex items-center gap-3 duration-300 hover:text-giopio-orange">
                                    <?php
                                        $user_id = get_the_author_meta('ID');
                                    ?>
                                    <img src="<?= get_avatar_url($user_id, 40);?>" class="rounded-full" alt=""><?php echo get_the_author_meta('nickname')?>
                                </a>
                                <span><?php do_action('show_reading_time', get_the_content() )?> read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
                
                <div>
                    <div class="group rounded-lg blog-box-shdow px-7 pt-14 pb-14 h-full flex justify-between flex-col">
                        <h3 class="blog-highlight-title font-bold text-giopio-black">An Outsourcing<br> Agency For<br> <span class="inline-block text-giopio-orange">Digital Transformation</span></h3>
                        <div>
                            <a href="#" class="giopio-btn text-sm 2xl:text-base font-semibold w-full text-center mb-5 duration-300 hover:bg-giopio-black">Start A Project Now</a>
                            <p class="w-full text-sm 2xl:text-base font-medium text-giopio-text text-center relative z-10 after:after-border"><span class="inline-block bg-white px-4">No Credit Card Required.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section [End]-->


    <section class="section-big-padding pt-0">
        <div class="container">
            <div class="mb-14">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2"><span class="inline-block text-giopio-orange">Recommended</span> By Giopio</h2>
            </div>
            <div class="xl:mx-36 lg:w-3/5">
                <div>
                <?php 
                    $args = array(
                        'post_type'     => 'post',
                        'posts_per_page'=> 5,
                        'orderby' => 'rand',
                    );
                    $blogQry = new WP_Query($args);
                    if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                    
                ?>
                    <div class="md:flex group gap-10 items-center mb-20 md:mb-7">
                        <div class="mb-10 md:mb-0 rounded-lg overflow-hidden w-full md:w-56 h-auto md:h-56">
                            
                            <?php the_post_thumbnail( "blog-h-image", 'class="w-full h-full object-cover rounded-lg duration-300 group-hover:scale-110"' ); ?>
                        </div>
                        <div class="md:w-[calc(100%_-_17rem)]">
                            <div class="mb-5">
                                <h4 class="blog-title-size font-bold mb-5"><a class="text-giopio-black duration-300 hover:text-giopio-orange" href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h4>
                                <p class="text-base 2xl:text-lg text-giopio-text leading-6 font-medium"><?php the_excerpt()?></p>
                            </div>
                            <div class="text-sm text-giopio-text font-medium flex items-center gap-2">
                                <a href="#" class="flex items-center gap-3 duration-300 hover:text-giopio-orange">
                                <?php
                                        $user_id = get_the_author_meta('ID');
                                    ?>
                                    <img src="<?= get_avatar_url( $user_id ) ?>" class="rounded-full" alt="">
                                    <?php echo get_the_author_meta('nickname')?></a>
                                <span class=" inline-block w-1 h-1 bg-giopio-text rounded-full"></span>
                                <span><?php do_action('show_reading_time', get_the_content() )?> read read</span>
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

<?php get_footer(); ?>