
    <!--Blog Section [Start]-->
    <section>
        <div class="container">
            <div class="mb-16 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Latest Blog</h2>
            </div>

            <?php 
                $div1_2 = '';
                $div3 = '';
                $div4_5 = '';
            ?>
                <?php 
                    $args = array(
                        'post_type'     => 'post',
                        'posts_per_page'=> 5
                    );
                    $blogQry = new WP_Query($args);
                    $i = 1;
                    if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                    if($i == 1 || $i == 2){

                        $div1_2 .= '
                        <div class="mb-10 group">
                            <div class="rounded-lg overflow-hidden">
                                <img class="w-full rounded-lg duration-300 group-hover:scale-110" src="'.get_the_post_thumbnail_url(get_the_ID(),'blog-mini-image').'" alt="'.get_the_title().'">
                            </div>
                            <h4 class="text-base font-semibold mt-3 mb-2"><a class="text-giopio-black duration-300 hover:text-giopio-orange" href="'.get_permalink().'">'.get_the_title().'</a></h4>
                            <p class="text-sm font-medium text-giopio-text leading-6">'. substr(get_the_excerpt(),0,80) .'</p>
                        </div>
                    ';    
                    }

                    if($i == 3){
                        $div3 .= '
                        <div class="mb-10 group">
                            <div class="rounded-lg overflow-hidden">
                                <img class="w-full rounded-lg duration-300 group-hover:scale-110"
                                    src="'.get_the_post_thumbnail_url(get_the_ID(),'blog-middle-image').'" alt="'.get_the_title().'">
                            </div>
                            <h4 class="text-lg font-semibold mt-3 mb-2"><a
                                    class="text-giopio-black duration-300 hover:text-giopio-orange" href="'.get_permalink().'">'.get_the_title().'</a></h4>
                            <p class="text-base font-medium text-giopio-text leading-6">'.substr(get_the_excerpt(),0,260) .'</p>
                        </div>
                    ';    
                    }

                    if($i == 4 || $i == 5){
                        $div4_5 .= '
                        <div class="mb-10 group">
                        <div class="rounded-lg overflow-hidden">
                            <img class="w-full rounded-lg duration-300 group-hover:scale-110"
                                src="'.get_the_post_thumbnail_url(get_the_ID(),'blog-mini-image').'" alt="'.get_the_title().'">
                        </div>
                        <h4 class="text-lg font-semibold mt-3 mb-2"><a
                                class="text-giopio-black duration-300 hover:text-giopio-orange" href="'.get_permalink().'">'.get_the_title().'</a></h4>
                        <p class="text-base font-medium text-giopio-text leading-6">'.substr(get_the_excerpt(),0,80) .'</p>
                    </div>
                    ';    
                    }

                ?>

                <?php
                $i++;
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>


            <div class="md:flex gap-12 lg:mx-36 xl:0 2xl:mx-48 mx-auto">
                <div class="md:w-1/4">
                    <?= $div1_2; ?>
                </div>
                <div class="md:w-1/2">
                    <?= $div3; ?>
                </div>
                <div class="md:w-1/4">
                <?= $div4_5; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Section [End]-->