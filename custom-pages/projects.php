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
        <div class="relative z-10">
            <div class="absolute right-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #FFF3F3;"></div>
            <div class="container">
                <div class="flex flex-col lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-1.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Find A Job Near You</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 02-->
        <div class="relative z-10">
            <div class="absolute left-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #FEF8F3;"></div>
            <div class="container">
                <div class="flex flex-col-reverse lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex order-2 justify-end">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-2.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1 order-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Panibal</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 03-->
        <div class="relative z-10">
            <div class="absolute right-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #F3F9FF;"></div>
            <div class="container">
                <div class="flex flex-col lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-4.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">De Ultieme A Product Research Tool!</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 04-->
        <div class="relative z-10">
            <div class="absolute left-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #F5F3FE;"></div>
            <div class="container">
                <div class="flex flex-col-reverse lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex order-2 justify-end">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-3.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1 order-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Clermilano.com</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Project 01-->
        <div class="relative z-10">
            <div class="absolute right-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #FFF3F3;"></div>
            <div class="container">
                <div class="flex flex-col lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-1.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Find A Job Near You</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 02-->
        <div class="relative z-10">
            <div class="absolute left-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #FEF8F3;"></div>
            <div class="container">
                <div class="flex flex-col-reverse lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex order-2 justify-end">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-2.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1 order-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Panibal</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 03-->
        <div class="relative z-10">
            <div class="absolute right-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #F3F9FF;"></div>
            <div class="container">
                <div class="flex flex-col lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-4.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">De Ultieme A Product Research Tool!</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Project 04-->
        <div class="relative z-10">
            <div class="absolute left-0 top-0 bottom-0 w-4/6 -z-10" style="background-color: #F5F3FE;"></div>
            <div class="container">
                <div class="flex flex-col-reverse lg:flex-row items-center py-20 xl:mx-16">
                    <div class="flex-1 flex order-2 justify-end">
                        <img class="mb-5 lg:mb-0 max-w-full lg:max-w-md xl:mx-w-500 w-full rounded-lg" src="<?php echo get_template_directory_uri()?>/assets/images/project-3.jpg" alt="Find A Job Near You">
                    </div>
                    <div class="flex-1 order-1">
                        <h3 class="project-box-title font-bold text-giopio-black mb-3">Clermilano.com</h3>
                        <h5 class="text-base 2xl:text-lg font-semibold text-giopio-black mb-8">A React And Nodejs Project</h5>
                        <p class="text-sm text-giopio-text leading-6 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                        <div class="text-sm text-giopio-text font-semibold mb-2">Duration: Nov 2017 - Dec 2018</div>
                        <div class="text-sm text-giopio-text font-semibold mb-8">Project Scope: Web Design & Development</div>
                        <div class="mb-10">
                            <span class="text-sm text-giopio-text font-semibold mr-5">Technologies:</span>
                            <a href="#" class="giopio-tag-btn">ReactJS</a>
                            <a href="#" class="giopio-tag-btn">nodeJS</a>
                            <a href="#" class="giopio-tag-btn">Python</a>
                            <a href="#" class="giopio-tag-btn">HTML</a>
                            <a href="#" class="giopio-tag-btn">CSS</a>
                        </div>
                        <a href="project-details.html" class="giopio-btn-black text-base font-medium hover:bg-giopio-orange px-8 2xl:px-10">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Works Section [End]-->

	<?php echo get_template_part('template-parts/faq');?>
<?php get_footer(); ?>