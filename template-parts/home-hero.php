<?php
/**
 * Template part for displaying a banner and message on home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

?>
<!--Banner Section [Start]-->
<section class="mb-20 mt-20 lg:mt-28">
    <div class="pt-14 lg:pt-20 container relative">
        <div class="flex flex-col-reverse lg:block relative">
            <div class="md:flex md:items-center">
                <div class="lg:w-1/2 pr-0 xl:pr-20 pt-10">
                    <h1 class="text-giopio-black text-2xl md:text-3xl xl:giopio-title-size font-bold">An Outsourcing Agency For <span class="md:block text-giopio-orange">Digital Transformation</span></h1>
                    <div class="mb-10">
                        <img class="w-36 xl:w-52" src="<?= get_template_directory_uri()?>/assets/images/banner-curve.png" alt="">
                    </div>
                    <p class="mb-10 text-sm md:text-base 2xl:text-lg font-medium text-giopio-text leading-7">In this competitive digital world, You must have a long-lasting digital existence to bring your business globally. We are staying ahead of our competitors, And we want the same thing for you.</p>
                    <a href="#" class="giopio-btn text-xs md:text-sm 2xl:text-base font-semibold md:w-96 text-center mb-5 duration-300 hover:bg-giopio-black">Start A Project - Let’s Discuss Your Idea</a>
                    <p class="md:w-96 text-sm 2xl:text-base font-medium text-giopio-text text-center relative z-10 after:after-border"><span class="inline-block bg-white px-4">No Credit Card Required.</span></p>
                    <p class="text-sm 2xl:text-base font-medium text-giopio-text mt-8">Made with<i class="fa-solid fa-heart ml-3 text-giopio-red"></i></p>
                </div>
            </div>
            <div class="lg:absolute lg:bottom-14 z-10 lg:right-6">
                <img src="<?= get_template_directory_uri()?>/assets/images/header-artwork.png" class="w-full max-w-md xl:max-w-xl" alt="Giopio header artwork">
            </div>
        </div>
        <div class="hidden md:block absolute right-0 -top-28 -z-10 giopio-banner-bg-col"></div>
    </div>
</section>
<!--Banner Section [End]-->


    <!--Message Section [Start]-->
    <section id="contact-us" class="relative z-10">
        <div class="bg-giopio-black absolute left-0 top-0 w-full lg:w-11/12 xl:w-4/5 h-full -z-10"></div>
        <div class="container pt-16 pb-20">
            <h2 class="contact-title text-white font-bold mb-4">Have An Idea? Just Leave A Message!</h2>
            <p class="text-white font-medium text-sm 2xl:text-base">We are bound to give life to your dream project. Our support team will get back to in 12-h during standard business hours.</p>
            <div class="flex mt-16">
                <div class="w-full lg:w-4/6">
                    <div class="md:columns-3 gap-7 mb-7">
                        <div class="mb-6 md:mb-0">
                            <input type="text" class="giopio-form-control" placeholder="Your name">
                        </div>
                        <div class="mb-6 md:mb-0">
                            <input type="email" class="giopio-form-control" placeholder="Your email">
                        </div>
                        <div class="mb-6 md:mb-0">
                            <input type="text" class="giopio-form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="mb-6">
                        <textarea name="" id="" cols="30" rows="4" class="giopio-form-control h-auto" placeholder="Your message"></textarea>
                    </div>
                    <div class="md:columns-3 md:gap-7">
                        <div>
                            <button type="submit" class="giopio-btn font-medium text-base w-full hover:bg-white hover:text-giopio-orange">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Message Section [End]-->