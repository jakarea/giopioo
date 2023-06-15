
<section class="section-big-padding">
    <div class="container">
        <div class="lg:flex gap-24">
            <div class="lg:w-1/3 mb-12 lg:mb-0">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-10 2xl:mb-16">Frequently Asked Questions</h2>
                <p class="text-base 2xl:text-lg font-medium text-giopio-black">Haven’t found an answer to your query? <a class="text-giopio-orange font-semibold" href="#">Contact us</a></p>
            </div>
            <div class="lg:w-4/6 text-giopio-black md:mt-24">
                <div x-data="{selected:3}">
                    <ul class="text-sm font-medium">
                    <?php 
                            $args = array(
                                'post_type'     => 'faq',
                                'posts_per_page'=> 12
                            );
                            $blogQry = new WP_Query($args);
                            $selected = 1;
                            if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                
                        ?>

                        <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == <?=$selected ?> ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                            <button type="button" class="w-full px-6 py-6 text-left" @click="selected !== <?=$selected ?> ? selected = <?=$selected ?> : selected = null">
                                <div class="flex items-center justify-between">
                                    <span class="font-medium text-bsae 2xl:text-lg"><?php the_title() ?></span>
                                    <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == <?=$selected ?> ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                </div>
                            </button>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == <?=$selected ?> ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-6 text-giopio-text text-bsae 2xl:text-lg">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>
                        </li>

                        <?php
                            $selected++;
                    endwhile;
                    endif;
                    
                    wp_reset_postdata();
                ?>

                        
                    </ul>
                </div>
                <div class="text-center mt-14">
                    <a href="#" class="inline-block text-bsae 2xl:text-lg text-giopio-orange font-bold duration-300 hover:text-giopio-black">20 More Questions</a>
                </div>
            </div>
        </div>
    </div>
</section>