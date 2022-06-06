<?php
/**
 * Template part for displaying latest blog on home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package giopioo
 */

?>

<!--Faq Section [Start]-->
<section class="section-big-padding">
        <div class="container">
            <div class="lg:flex gap-24">
                <div class="lg:w-1/3 mb-12 lg:mb-0">
                    <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
                    <h2 class="text-giopio-black giopio-title-size font-bold mb-10 2xl:mb-16">Frequently Asked Questions</h2>
                    <p class="text-sm 2xl:text-base font-medium text-giopio-black">Haven’t found an answer to your query? <a class="text-giopio-orange font-semibold" href="#">Contact us</a></p>
                </div>
                <div class="lg:w-4/6 text-giopio-black">
                    <div x-data="{selected:3}">
                        <ul class="text-sm font-medium">
                            <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == 1 ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                                <button type="button" class="w-full px-6 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-sm 2xl:text-base">Lorem ipsum dolor sit metLorem ipsum dolor sit met?</span>
                                        <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == 1 ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6 text-giopio-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == 2 ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-sm 2xl:text-base">Lorem ipsum dolor sit amet?</span>
                                        <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == 2 ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6 text-giopio-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == 3 ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-sm 2xl:text-base">Lorem ipsum dolor sit metLorem ipsum dolor sit met?</span>
                                        <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == 3 ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6 text-giopio-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == 4 ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-sm 2xl:text-base">Lorem ipsum dolor sit metLorem ipsum dolor sit met?</span>
                                        <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == 4 ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6 text-giopio-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative border mb-4 rounded-xl duration-700" x-bind:class="selected == 5 ? 'border-giopio-orange active-accordion-bg' : 'border-giopio-border-2'">
                                <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 5 ? selected = 5 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-sm 2xl:text-base">Lorem ipsum dolor sit amet?</span>
                                        <i class="fa-solid text-giopio-text text-xs" x-bind:class="selected == 5 ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2" x-bind:style="selected == 5 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6 text-giopio-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center mt-14">
                        <a href="#" class="inline-block text-base text-giopio-orange font-medium duration-300 hover:text-giopio-black">20 More Questions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq Section [End]-->