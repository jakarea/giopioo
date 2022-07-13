<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package giopioo
 */

?>


<!--CTA Section [Start]-->
<section class="relative z-10 -mb-40">
        <div class="container">
            <div class="md:flex xl:mx-36 bg-giopio-orange text-white rounded-xl p-10 md:p-14 2xl:p-20 items-center relative z-10">
                <img class="-z-10 absolute left-0 top-0 h-full" src="<?= get_template_directory_uri()?>/assets/images/get-started-bg.png" alt="">
                <div class="md:w-4/6 mb-8 md:mb-0">
                    <h3 class="font-bold text-2xl mb-4">Let's Talk</h3>
                    <p class="text-sm 2xl:text-base font-medium leading-7">
                    Giopio is a professional web application services provider that specializes in delivering fully managed solutions based on PHP, Laravel, and so on. We deliver end-to-end web application development, Quality assurance, and support solutions. giopio teams are passionate about transparency, reliability, trust, and outstanding customer care – we aren’t happy with our creation until you are.
                    </p>
                </div>
                <div class="md:w-1/3 md:flex justify-end">
                    <a href="#" class="giopio-btn-white text-sm 2xl:text-base font-medium hover:bg-giopio-black hover:text-white">Start A Project</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Section [End]-->

    <!--Footer Section [Start]-->
    <footer class="bg-giopio-black pt-64 pb-12 2xl:pb-16">
        <div class="container">
            <div class="md:flex mb-14 2xl:mb-20">
                <div class="mb-14 md:mb-0 flex-1 text-white text-sm 2xl:text-base font-medium">
                    <a href="index.html" class="mb-8 inline-block"><img src="<?= get_template_directory_uri()?>/assets/images/logo-white.png" alt="GioPio"></a>
                    <p class="mb-6 md:w-2/3 leading-7">
                    Giopio has completed over two Hundred big projects for local clients in Bangladesh. Most of the customers are SaaS companies, dynamic startups, and educational institutions.
                    </p>
                    <p>Maloti nagor, Bogura, Bangladesh</p>
                </div>
                <div class="md:flex flex-2 xl:flex-1 text-white text-sm 2xl:text-base font-medium">
                    <div class="mb-14 md:mb-0 mr-24">
                        <h5 class="text-sm 2xl:text-base mb-7 font-semibold">Pages</h5>
                        <ul>
                            <li class="mb-4"><a href="<?= site_url()?>" class="duration-300 hover:text-giopio-orange">Home</a></li>
                            <li class="mb-4"><a href="<?= site_url('projects')?>" class="duration-300 hover:text-giopio-orange">Project</a></li>
                            <li class="mb-4"><a href="<?= site_url('about-us')?>" class="duration-300 hover:text-giopio-orange">About</a></li>
                            <li class="mb-4"><a href="<?= site_url('#contact')?>" class="duration-300 hover:text-giopio-orange">Contact</a></li>
                        </ul>
                    </div>
                    <div class="mb-14 md:mb-0 mr-24">
                        <h5 class="text-sm 2xl:text-base mb-7 font-semibold">Support</h5>
                        <ul>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange">Terms & Policy</a></li>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange">24/7 Support</a></li>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange">Easy Payments</a></li>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange">Security</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm 2xl:text-base mb-7 font-semibold">Contact</h5>
                        <div class="flex gap-5 duration-500 text-white mb-14">
                            <a href="https://facebook.com/giopiocom" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/jkareaparvez" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/jakarea98/" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/jakarea98/" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <ul>
                            <li class="mb-4"><a href="https://web.whatsapp.com/send?phone=8801728247398&text=Hi%20jakarea!%0D%0AI%20am%20interested%20to%20work%20with%20you." class="duration-300 hover:text-giopio-orange"><i class="fa-solid fa-phone mr-3"></i>+8801728247398</a></li>
                            <li class="mb-4"><a href="mailto:giopioservice@gmail.com" class="duration-300 hover:text-giopio-orange"><i class="fa-solid fa-envelope mr-3"></i>giopioservice@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-white text-center text-sm md:text-base 2xl:text-lg font-medium">&copy; 2022<span class=" inline-block w-1 h-1 rounded-full bg-white relative -top-1 mx-2"></span><a href="index.html" class="duration-300 hover:text-giopio-orange">Giopio</a>. All rights reserved</div>
        </div>
    </footer>
    <!--Footer Section [End]-->
    <!--Modal Section [Start]-->
    <div class="giopio-modal-backdrop fixed inset-0 opacity-0 invisible duration-500"></div>
    <div class="giopio-modal fixed w-full left-2/4 top-2/4 bg-white px-4 py-5 md:px-16 lg:px-36 md:py-16 -translate-x-2/4 -translate-y-2/4 opacity-0 invisible duration-500 h-screen md:h-auto overflow-y-auto">
        <span id="giopioModalClose" class="close-modal w-8 h-8 absolute right-3 text-xl top-6 cursor-pointer duration-300 hover:text-giopio-orange"><i class="fa-solid fa-xmark"></i></span>
        <div class="mb-10">
            <h2 class="contact-title text-giopio-black font-bold mb-4">Have An Idea? Just Leave A Message!</h2>
            <p class="text-giopio-text font-medium text-sm 2xl:text-base">We are bound to give life to your dream project. Our support team will get back to in 12-h during standard business hours.</p>
        </div>
        <?php 
            echo do_shortcode( "[contact-form-7 id='204' title='Contact form 1']")
        ?>
    </div>
    <!--Modal Section [End]-->
	<?php wp_footer(); ?>

	<script>
        var testimonialSlider = tns({
            container: '#testimonialSlider',
            "items": 1,
            "speed": 300,
            "mouseDrag": true,
            "controls": true,
            "nav": true,
            "autoplay": true,
            "autoplayButtonOutput": false,
            "controlsText": ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>']
        });
        var slider = tns({
            container: '#serviceSlider',
            "speed": 200,
            "mouseDrag": true,
            "controls": false,
            "loop": false,
            "autoplay": true,
            "autoplayButtonOutput": false,
            "center": false,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2
                },
                900: {
                    items: 3
                },
                1200: {
                    items: 5
                },
            }
        });
    </script>
</body>
</html>
