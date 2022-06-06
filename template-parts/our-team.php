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
            <div class="basis-full md:basis-2/5 lg:basis-1/4 mb-14 lg:mb-0 team-member z-10 relative group">
                <div class="member-photo h-full">
                    <img class="rounded-20 h-full w-full object-cover" src="<?= get_template_directory_uri()?>/assets/images/team-1.jpg" alt="">
                </div>
                <div class="member-info">
                    <a href="#" class="text-base font-semibold text-giopio-black mb-1 inline-block duration-500 group-hover:text-white">Traver Borris</a>
                    <div class="text-sm font-medium text-giopio-text duration-500 group-hover:text-white">CEO, Founder</div>
                    <div class="flex gap-5 justify-center -mt-6 duration-500 opacity-0 text-white group-hover:opacity-100 group-hover:mt-6">
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="basis-full md:basis-2/5 lg:basis-1/4 mb-14 lg:mb-0 team-member z-10 relative group">
                <div class="member-photo h-full">
                    <img class="rounded-20 h-full w-full object-cover" src="<?= get_template_directory_uri()?>/assets/images/team-2.jpg" alt="">
                </div>
                <div class="member-info">
                    <a href="#" class="text-base font-semibold text-giopio-black mb-1 inline-block duration-500 group-hover:text-white">John Smith</a>
                    <div class="text-sm font-medium text-giopio-text duration-500 group-hover:text-white">Full-Stack Web Developer</div>
                    <div class="flex gap-5 justify-center -mt-6 duration-500 opacity-0 text-white group-hover:opacity-100 group-hover:mt-6">
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="basis-full md:basis-2/5 lg:basis-1/4 mb-14 lg:mb-0 team-member z-10 relative group">
                <div class="member-photo h-full">
                    <img class="rounded-20 w-full h-full object-cover" src="<?= get_template_directory_uri()?>/assets/images/team-3.jpg" alt="">
                </div>
                <div class="member-info">
                    <a href="#" class="text-base font-semibold text-giopio-black mb-1 inline-block duration-500 group-hover:text-white">Jhon Doe</a>
                    <div class="text-sm font-medium text-giopio-text duration-500 group-hover:text-white">Director, Arts & Design</div>
                    <div class="flex gap-5 justify-center -mt-6 duration-500 opacity-0 text-white group-hover:opacity-100 group-hover:mt-6">
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" target="_blank" class="duration-300 hover:text-giopio-black"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-28">
        <a href="#" class=" text-giopio-orange text-base font-semibold duration-300 hover:text-giopio-black">See Our Full Team</a>
        <div class="w-16 border border-giopio-orange ml-auto mr-auto mt-4"></div>
    </div>
</section>
<!--Our Teams Section [End]-->