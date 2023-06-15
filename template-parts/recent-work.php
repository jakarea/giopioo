
<!--Our Works Section [End]-->

<section>
    <div class="container">
        <div class="mb-16 2xl:mb-20">
            <div class="w-20 xl:w-24 h-1 bg-giopio-orange mb-4"></div>
            <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Our Works <span
                    class="inline-block text-giopio-orange"> Define Us</span></h2>
        </div>
    </div>


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
            $side = 'left-0';
            $order1= 'order-1';
            $order2= 'order-2 justify-center';
            $reverse = 'flex-col-reverse';
        }else{
            $side = 'right-0';
            $reverse = 'flex-col';
            $order1= '';
            $order2= 'justify-start 2xl:justify-center';
        }
    ?>

         <!--Project 01-->
    <div class="relative z-10">
        <div class="absolute <?php echo $side; ?> top-0 bottom-0 w-full lg:w-4/6 -z-10" style="background-color: <?php echo $colors[$i]; ?>"></div>
        <div class="container">
            <div class="flex <?php echo $reverse; ?> lg:flex-row items-center py-24 xl:py-28 xl:mx-16">
            
                <div class="flex-1 flex  <?php echo  $order2; ?>">
                    <?php 
                        if (has_post_thumbnail() ) :     
                    ?>
                    <?php the_post_thumbnail( "project-image", 'class=mb-5 lg:mb-0 max-w-full lg:max-w-md 2xl:max-w-xl w-full rounded-lg shadow-xl' ); ?>
                    <?php endif; ?>
                </div>
                <div class="flex-1">
                    <h3 class="project-box-title font-bold text-giopio-black mb-3"> <a href="<?php the_permalink(  ) ?>"><?= the_title() ?></a></h3>
                    <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8"><?= $slogan ?></h5>
                    <p class="text-sm lg:text-md xl:text-base 2xl:text-xl 2xl:leading-8 text-giopio-text leading-6 font-medium mb-5"><?php the_excerpt(); ?></p>
                    <div class="text-base text-giopio-text font-semibold mb-2">Duration: <?= $duration ?></div>
                    <div class="text-base text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                    <?php 
                    if($technologies):
                ?>
                    <div class="mb-10">
                    <span class="text-base text-giopio-text font-semibold mr-5">Technologies:</span>
                        <?php 
                        
                            foreach($technologies as $technology) :
                        ?>
                        <a href="#" class="giopio-tag-btn"><?= $technology->name ?></a>
                        <?php  endforeach;?>
                    </div>
                    <?php endif; ?>
                    <?php if($live_link) :?>
                        <a href="<?=$live_link ?>" class="giopio-btn-black text-xs md:text-lg font-medium hover:bg-giopio-orange px-10 2xl:px-12">Live Demo</a>
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

    <div class="text-center pt-14">
        <a href="#" class=" text-giopio-orange text-lg font-semibold duration-300 hover:text-giopio-black">Explore
            All Projects</a>
        <div class="w-16 border border-giopio-orange ml-auto mr-auto mt-4"></div>
    </div>

</section>

    <!--Our Works Section [End]-->