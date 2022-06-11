<?php
/**
* Template Name: About Page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package giopioo
* This is the template that displays about pages.
* Please note that to use this page, you must
* have to select About Page in tempalte 
* When creating a new page
*/
get_header();
?>

<!--About Banner Section [Start]-->
    <section class="relative mt-28">
        <div class="container">
            <div class="lg:flex pt-10 md:pt-20 lg:mx-36 items-center pb-28">
                <div class="mb-10 md:mb-16 lg:mb-0 lg:banner-title-box">
                    <div class="lg:hidden w-20 h-1 bg-giopio-orange mb-4"></div>
                    <h1 class="text-giopio-black giopio-title-size font-bold mb-8 lg:mb-0 lg:banner-title">About</h1>
                </div>
                <div class="text-giopio-text text-sm 2xl:text-base lg:pl-14 lg:about-banner-text font-medium leading-relaxed">
                    <p class="mb-8">Giopio is a professional web application services provider that specializes in delivering fully managed solutions based on PHP, Laravel, and so on. We deliver end-to-end web application development, Quality assurance, and support solutions.</p>
                    <p class="mb-8">Giopio teams are passionate about transparency, reliability, trust, and outstanding customer care – we aren’t happy with our creation until you are.</p>
                    <p class="mb-8">Giopio has completed over two Hundred big projects for local clients in Bangladesh. Most of the customers are SaaS companies, dynamic startups, and educational institutions.</p>
                    <p class="mb-8">We work on different CMS and Frameworks like Laravel, Codeigniter, WordPress, Shopify, etc, and at the same time work on Nodejs, Reactjs, Angularjs, VueJs, etc. Our team of web developers is talented in their domain platforms. Our work is always precise and user-oriented.</p>
                    <p>Communication is a big concern for remote work keep in mind we always focus on great communication throughout the work cycle and provide complete maintenance and support.</p>
                </div>
            </div>
        </div>
    </section>
    <!--About Banner Section [End]-->

    <!--Mastered Section [Start]-->
    <section>
        <div class="container">
            <div class="w-20 h-1 bg-giopio-orange mb-4"></div>
            <h2 class="text-giopio-black giopio-title-size font-bold mb-2">We Are <span class="inline-block text-giopio-orange">Mastered</span> On These Fields</h2>
        </div>
        <div class="mt-14">
            <img src="<?= get_template_directory_uri()?>/assets/images/master-section.jpg" class="w-full" alt="">
        </div>
    </section>
    <!--Mastered Section [Start]-->


    <!--About Banner Section [Start]-->
    <section class="relative section-big-padding lg:p-0">
        <div class="container">
            <div class="flex flex-col-reverse lg:flex-row lg:py-24 lg:mx-36 lg:items-center">
                <div class="text-giopio-text text-sm 2xl:text-base lg:pr-14 lg:about-banner-text font-medium leading-relaxed">
                    <p class="mb-8">Giopio is come up with Web & Mobile applications besides other IT services based on the client's requirements. As a SAAS and Web Development company, we are always working on innovative and user-centric solutions as per customer needs.</p>
                    <p>In the IT field, we have a particularly strong presence specially in the SAAS product and our web solutions have been used by major international brands on the website. To Commit ourselves to becoming increasingly advanced in technology and domain expertise to deliver strategic, simple, and cost-efficient solutions to our clients.</p>
                                    </div>
                <div class="mb-10 md:mb-16 lg:mb-0 lg:banner-title-box lg:mission-title-box">
                    <div class="lg:hidden w-20 h-1 bg-giopio-orange mb-4"></div>
                    <h1 class="text-giopio-black giopio-title-size font-bold lg:banner-title lg:mission-title">Mission & Vision</h1>
                </div>
            </div>
        </div>
    </section>
    <!--About Banner Section [End]-->

    <section>
        <div class="container">
            <h2 class="giopio-title-size font-bold text-giopio-black">Why Not Reading Our Profile Pdf?<br> Download & Read Our Company Profile Now.</h2>
            <div class="text-center mt-16">
                <button class="giopio-btn font-semibold text-sm 2xl:text-base px-5 md:px-14 py-4 2xl:px-16 2xl:py-5 hover:bg-giopio-black w-full md:w-auto">Download Our Company Profile</button>
            </div>
        </div>
    </section>

	<?php get_template_part('template-parts/our-team');?>
<?php get_footer(); ?>