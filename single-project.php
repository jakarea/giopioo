<?php get_header(); ?>
<?php 
 //CMB2
    $duration  = get_post_meta( get_the_ID(), '_cmb_duration', true );
    $slogan  = get_post_meta( get_the_ID(), '_cmb_slogan', true );

    // Taxonomy

    $technologies = get_the_terms( get_the_ID(), 'technologies' );

    $workflows = get_post_meta( get_the_ID(), '_cmb_workflow_giopio_work_flow', true );
    $features = get_post_meta( get_the_ID(), '_cmb_features_giopio_features', true );

?>
<section class="pt-24 mt-28">
        <div class="container">
            <div class="flex flex-col-reverse lg:flex-row lg:items-center xl:mx-36">
                <div class="flex-1">
                    <h3 class="giopio-title-size font-bold text-giopio-black mb-6"><?php the_title() ?></h3>
                    <p class="text-base 2xl:text-lg text-giopio-text font-medium mb-5"><?php the_excerpt() ?></p>
                    <div class="text-base 2xl:text-lg text-giopio-text font-semibold mb-2">Duration: <?= $duration ?></div>
                </div>
                <div class="flex-1 flex justify-end">
                    <?php the_post_thumbnail( "project-image", ['class' => 'mb-8 lg:mb-0 w-full lg:max-w-md 2xl:mx-w-500 rounded-lg', 'alt' => get_the_title()] ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-giopio-black py-12 mt-28">
        <div class="container">
            <p class="text-center text-white text-lg font-semibold">A react and nodejs project to build an amazing community to share experience</p>
        </div>
    </section>

    <!--About Banner Section [Start]-->
    <section class="relative section-big-padding">
        <div class="container">
            <div class="block lg:flex lg:mx-36 xl:mx-64 items-center">
                <div class="mb-16 lg:mb-0 lg:banner-title-box lg:mission-title-box lg:project-title-box lg:mr-14">
                    <div class="lg:hidden w-20 h-1 bg-giopio-orange mb-4"></div>
                    <h1 class="text-giopio-black giopio-title-size font-bold lg:banner-title lg:project-desc-title">Project Description</h1>
                </div>
                <div class="text-giopio-text text-sm 2xl:text-base lg:about-banner-text font-medium leading-relaxed">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--About Banner Section [End]-->

    <section>
        <div class="container">
            <div class="mb-16 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Project <span class="inline-block text-giopio-orange">Work Flow</span></h2>
            </div>
            <?php 
            $i = 1;
            
                foreach($workflows as $workflow) : 
                    if($i % 2 == 0){ ?>
                    <div class="workflow-odd">
                <div class="workflow-odd-text">
                    <div>
                        <h3 class="giopio-title-size font-bold text-giopio-black mb-6 relative"><?php echo $workflow['_cmb_workflow_title'] ?> <span class="point-number">0<?=$i?></span></h3>
                        <p class="text-base text-giopio-text leading-7"><?php echo $workflow['_cmb_workflow_description'] ?></p>
                    </div>
                </div>
                <div class="workflow-odd-image">
                    <img class="max-w-full lg:mx-w-283" src="<?php echo $workflow['_cmb_workflow_work_flow_image'] ?>" alt="<?php echo $workflow['_cmb_workflow_title'] ?>">
                </div>
            </div>
                        
            <?php        }else {?>
            
                <div class="workflow-even">
                <div class="workflow-even-image">
                    <img class="max-w-full lg:mx-w-283" src="<?php echo $workflow['_cmb_workflow_work_flow_image'] ?>" alt="<?php echo $workflow['_cmb_workflow_title'] ?>">
                </div>
                <div class="workflow-even-text">
                    <div>
                        <h3 class="giopio-title-size font-bold text-giopio-black mb-6 relative"><?php echo $workflow['_cmb_workflow_title'] ?> <span class="point-number">0<?=$i?></span></h3>
                        <p class="text-base text-giopio-text leading-7"><?php echo $workflow['_cmb_workflow_description'] ?></p>
                    </div>
                </div>
            </div>
            <?php } $i++;?>
<?php endforeach; ?>
            
        </div>
    </section>


        <?php 
            if($technologies):
        ?>
    <section class="section-big-padding">
        <div class="container">
            <div class="mb-16 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Technologies</h2>
            </div>
            <div class="xl:mx-36 lg:w-3/5 lg:pr-56 border-r-giopio-text lg:border-r">
            <?php 
                foreach($technologies as $technology) :
            ?>
                <div class="mb-16">
                    <h3 class="text-2xl 2xl:giopio-text-32 font-bold text-giopio-black mb-6 relative"><?= $technology->name ?></h3>
                    <p class="text-sm 2xl:text-base font-medium text-giopio-text leading-7"><?= $technology->description ?></p>
                </div>
                <?php  endforeach;?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section>
        <div class="container">
            <div class="mb-16 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2">Features</h2>
            </div>
            <div class="xl:mx-36">

            <?php foreach($features as $feature) : ?>
                <div class="mb-20">
                    <div class="lg:w-3/5 mb-16 2xl:mb-24">
                        <h3 class="text-2xl md:giopio-text-32 font-bold text-giopio-black mb-6 relative"><?=$feature['_cmb_features__giopio_title']?></h3>
                        <p class="text-sm font-medium text-giopio-text leading-7"><?=$feature['_cmb_features__giopio_description']?></p>
                    </div>
                    <div>
                        <img class="mx-auto" src="<?=$feature['_cmb_features__giopio_image']?>" alt="<?=$feature['_cmb_features__giopio_title']?>">
                    </div>
                </div>

<?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section-big-padding">
        <div class="py-24 md:py-40 bg-giopio-light-orange">
            <div class="container">
                <div class="lg:flex xl:mx-36 text-white rounded-xl items-center">
                    <div class="mb-8 lg:mb-0 lg:w-4/6">
                        <h2 class="text-giopio-black text-2xl md:text-3xl 2xl:giopio-title-size font-bold">Let’s Get Started With The Project<br> And Try It Yourself!</h2>
                    </div>
                    <div class="lg:w-1/3 lg:flex justify-end">
                        <a href="#" class="giopio-btn text-sm 2xl:text-base font-medium 2xl:font-semibold hover:bg-giopio-black hover:text-white px-8 2xl:px-10">Get Started With The Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-36 2xl:mb-48">
        <div class="container">
            <div class="mb-16 2xl:mb-20">
                <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                <h2 class="text-giopio-black giopio-title-size font-bold mb-2">People’s Feedback</h2>
            </div>
            <div class="xl:mx-36">
                <div class="grid md:grid-cols-2 gap-y-10 gap-x-8 flex-wrap">
                    <div class="p-10 rounded-2xl blog-box-shdow">
                        <div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-8">
                            <img src="https://via.placeholder.com/60" class="rounded-full" alt="">
                            <div>
                                <a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange">Travor Borris</a>
                                <div class="flex items-center gap-3 text-giopio-text text-sm font-medium">
                                    <a href="#" class="duration-300 hover:text-giopio-orange">CEO, TedTalk Inc.</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-giopio-text leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                    </div>
                    <div class="p-10 rounded-2xl blog-box-shdow">
                        <div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-8">
                            <img src="https://via.placeholder.com/60" class="rounded-full" alt="">
                            <div>
                                <a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange">Travor Borris</a>
                                <div class="flex items-center gap-3 text-giopio-text text-sm font-medium">
                                    <a href="#" class="duration-300 hover:text-giopio-orange">CEO, TedTalk Inc.</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-giopio-text leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                    </div>
                    <div class="p-10 rounded-2xl blog-box-shdow">
                        <div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-8">
                            <img src="https://via.placeholder.com/60" class="rounded-full" alt="">
                            <div>
                                <a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange">Travor Borris</a>
                                <div class="flex items-center gap-3 text-giopio-text text-sm font-medium">
                                    <a href="#" class="duration-300 hover:text-giopio-orange">CEO, TedTalk Inc.</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-giopio-text leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                    </div>
                    <div class="p-10 rounded-2xl blog-box-shdow">
                        <div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-8">
                            <img src="https://via.placeholder.com/60" class="rounded-full" alt="">
                            <div>
                                <a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange">Travor Borris</a>
                                <div class="flex items-center gap-3 text-giopio-text text-sm font-medium">
                                    <a href="#" class="duration-300 hover:text-giopio-orange">CEO, TedTalk Inc.</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-giopio-text leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>