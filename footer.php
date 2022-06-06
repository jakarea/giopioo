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
                    <p class="text-sm 2xl:text-base font-medium leading-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus obcaecati corrupti sint repudiandae quis repellendus odio voluptate consequatur architecto dolore provident nostrum, reiciendis magnam laboriosam officiis optio facere ipsum?</p>
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
                    <p class="mb-6 md:w-2/3 leading-7">Grow your business with Giopio. Lorem ipsum dolor sit amet, vel accumsan liberavisse ex, a elaboraret interpretaris, sed His nibh scripta in. In sea vocibus facilisis.</p>
                    <p>129/6, New Boston, USA</p>
                </div>
                <div class="md:flex flex-2 xl:flex-1 text-white text-sm 2xl:text-base font-medium">
                    <div class="mb-14 md:mb-0 mr-24">
                        <h5 class="text-sm 2xl:text-base mb-7 font-semibold">Pages</h5>
                        <ul>
                            <li class="mb-4"><a href="index.html" class="duration-300 hover:text-giopio-orange">Home</a></li>
                            <li class="mb-4"><a href="project.html" class="duration-300 hover:text-giopio-orange">Project</a></li>
                            <li class="mb-4"><a href="about-us.html" class="duration-300 hover:text-giopio-orange">About</a></li>
                            <li class="mb-4"><a href="index.html#contact-us" class="duration-300 hover:text-giopio-orange">Contact</a></li>
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
                            <a href="#" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" target="_blank" class="duration-300 hover:text-giopio-orange"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <ul>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange"><i class="fa-solid fa-phone mr-3"></i>+1 555 423 213</a></li>
                            <li class="mb-4"><a href="#" class="duration-300 hover:text-giopio-orange"><i class="fa-solid fa-envelope mr-3"></i>support@giopio.com</a></li>
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
        <div class="w-full">
            <div class="md:columns-2 gap-7 mb-7">
                <div class="mb-6 md:mb-0">
                    <input type="text" class="giopio-form-control form-control-style-white" placeholder="Your name">
                </div>
                <div class="mb-6 md:mb-0">
                    <input type="email" class="giopio-form-control form-control-style-white" placeholder="Your email">
                </div>
            </div>
            <div class="mb-6">
                <input type="text" class="giopio-form-control form-control-style-white" placeholder="Subject">
            </div>
            <div class="mb-6">
                <textarea name="" id="" cols="30" rows="4" class="giopio-form-control h-auto form-control-style-white" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="giopio-btn font-medium text-base w-full hover:bg-giopio-black hover:text-white">Send Message</button>
        </div>
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
    </script>
    <script>
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
