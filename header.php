<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package giopioo
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    
	<?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="google-site-verification" content="JeD_buUp32AwdGxTiOUgURQj1f6QkPr-DLrz6AeGwOY"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8FHKZL3GWS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-8FHKZL3GWS');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '613087336578584');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=613087336578584&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->

</head>



<body <?php body_class(['font-montserrat']); ?>>
	<?php wp_body_open(); ?>
    <!--Header Section [Start]-->
    <header class="fixed left-0 right-0 top-0 z-50 py-4 bg-white lg:py-0 lg:bg-transparent duration-300">
        <div class="container">
            <div class="relative">
                <nav class="flex justify-between items-center xl:mr-44">
                    <a href="<?= site_url()?>"><img src="<?= get_template_directory_uri()?>/assets/images/logo-black.png" alt="Giopio"></a>
                    <div class="mobile-nav lg:flex items-center text-base font-medium">
                        <div class="mobile-logo flex lg:hidden justify-between mb-5">
                            <a href="<?= site_url()?>"><img class="h-8" src="<?= get_template_directory_uri()?>/assets/images/logo-black.png" alt="Giopio"></a>
                            <span class="mobile-menu-close"><i class="fa-solid fa-xmark"></i></span>
                        </div>
                        <ul class="lg:flex gap-10 text-giopio-text mb-5 md:mb-0">
                            <li class="group">
                                <a href="#" class="giopio-navlink why-giopio-link">Why Giopio<i class="fa-solid fa-chevron-down text-xs text-giopio-text ml-2 opacity-80"></i></a>
                                <div class="lg:opacity-0 lg:invisible duration-300 group-hover:opacity-100 group-hover:visible mega-menu lg:fixed lg:w-screen lg:left-0 bg-white z-50 pb-8 lg:pb-14 mb-10 lg:mb-0">
                                    <div class="hidden lg:block border-b border-b-giopio-border-2 pb-6 my-10">
                                        <div class="container">
                                            <div class="grid grid-cols-3 font-medium text-sm gap-8">
                                                <div>Learn & help</div>
                                                <div>Giopio Services</div>
                                                <div>Recent Blog Posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-5 lg:pt-0">
                                        <div class="container">
                                            <div class="block lg:grid grid-cols-3 gap-8">
                                                <div class="mb-14 lg:mb-0">
                                                    <div class="font-medium text-sm mb-5 border-b border-b-giopio-border-2 pb-3 block lg:hidden">Learn & help</div>
                                                    <ul class="text-sm font-medium space-y-3 mb-12">
                                                        <li><a href="#" class="duration-300 hover:text-giopio-orange">Terms & Policy</a></li>
                                                        <li><a href="#" class="duration-300 hover:text-giopio-orange">24/7 Support</a></li>
                                                        <li><a href="#" class="duration-300 hover:text-giopio-orange">Easy Payments</a></li>
                                                        <li><a href="#" class="duration-300 hover:text-giopio-orange">Security</a></li>
                                                    </ul>
                                                    <div class="magamenu-discount mb-10 lg:mb-20 relative z-10">
                                                        <div class="bg-giopio-text-blue w-3/12 h-20 fixed left-0 -z-10 mega-discount-blue-strip"></div>
                                                        <p class=" text-white pt-3">Earn <span class=" font-bold text-xl italic m-0">50%</span> discount<br> on your first project</p>
                                                    </div>
                                                    <a href="#" class="giopio-btn-black text-xs lg:text-base font-medium hover:bg-giopio-orange px-4 lg:px-8 2xl:px-10 w-full lg:w-auto">Start A Project With Us</a>
                                                </div>
                                                <div class="mb-14 lg:mb-0">
                                                    <div class="font-medium text-sm mb-5 border-b border-b-giopio-border-2 pb-3 block lg:hidden">Giopio Services</div>
                                                    <a href="#" class="block lg:flex gap-4 mb-10 md:mb-7">
                                                        <div class="w-9 h-9 rounded border-giopio-border-2 border flex items-center p-2 mb-5 lg:mb-0">
                                                            <img class="max-h-5 mx-auto" src="<?= get_template_directory_uri()?>/assets/images/facebook-app-development.png" alt="Facebook App Development">
                                                        </div>
                                                        <div class="lg:md:w-[calc(100%_-_2.25rem)]">
                                                            <h4 class="text-sm font-semibold text-giopio-black mb-3 duration-300 hover:text-giopio-orange">Facebook App Development</h4>
                                                            <p class="text-sm font-medium text-giopio-text leading-7">Facebook is offering to bring your service or product to billion of users each day. Take this opportunity to connect with potential customers every single day through Facebook apps. </p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="block lg:flex gap-4 mb-10 md:mb-7">
                                                        <div class="w-9 h-9 rounded border-giopio-border-2 border flex items-center p-2 mb-5 lg:mb-0">
                                                            <img class="max-h-5 mx-auto" src="<?= get_template_directory_uri()?>/assets/images/web-design-development.png" alt="Web Design & Development">
                                                        </div>
                                                        <div class="lg:md:w-[calc(100%_-_2.25rem)]">
                                                            <h4 class=" text-sm font-semibold text-giopio-black mb-3 duration-300 hover:text-giopio-orange">Web Design & Development</h4>
                                                            <p class="text-sm font-medium text-giopio-text leading-7">We have several years of experienced highly skilled Tech Team for you to transform your idea, just an idea into a fully developed product or service.</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="block lg:flex gap-4 mb-10 md:mb-7">
                                                        <div class="w-9 h-9 rounded border-giopio-border-2 border flex items-center p-2 mb-5 lg:mb-0">
                                                            <img class="max-h-5 mx-auto" src="<?= get_template_directory_uri()?>/assets/images/wp-theme-plugin-development.png" alt="Wordpress Theme & Plugin Development">
                                                        </div>
                                                        <div class="lg:md:w-[calc(100%_-_2.25rem)]">
                                                            <h4 class=" text-sm font-semibold text-giopio-black mb-3 duration-300 hover:text-giopio-orange">Wp Theme & Plugin Development</h4>
                                                            <p class="text-sm font-medium text-giopio-text leading-7">Do you want a new website? We are providing powerful digital solutions and an enjoyable user experience with our WordPress.</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="block lg:hidden 2xl:flex gap-4 mb-10 md:mb-7">
                                                        <div class="w-9 h-9 rounded border-giopio-border-2 border flex items-center p-2 mb-5 lg:mb-0">
                                                            <img class="max-h-5 mx-auto" src="<?= get_template_directory_uri()?>/assets/images/digital-marketing.png" alt="Digital Marketing">
                                                        </div>
                                                        <div class="lg:md:w-[calc(100%_-_2.25rem)]">
                                                            <h4 class=" text-sm font-semibold text-giopio-black mb-3">Digital Marketing</h4>
                                                            <p class="text-sm font-medium text-giopio-text leading-7">On social media, email and other digital devices, we can provide you with innovative & cost-effective online marketing campaigns for your Business.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-sm mb-5 border-b border-b-giopio-border-2 pb-3 block lg:hidden">Recent Blog Posts</div>
                                                    <div class="mb-10">
                                                    <?php 
                                                        $args = array(
                                                            'post_type'     => 'post',
                                                            'posts_per_page'=> 3,
                                                            'order' => 'DESC',
                                                        );
                                                        $blogQry = new WP_Query($args);
                                                        if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
                                                        
                                                    ?>

                                                        <div class="md:flex gap-4 items-center mb-10 md:mb-7">
                                                            <div class="mb-5 md:mb-0 rounded-lg overflow-hidden w-20 h-20">
                                                                <?php the_post_thumbnail( "blog-v-image", 'class="w-full h-full object-cover rounded-lg"' ); ?>
                                                            </div>
                                                            <div class="md:w-[calc(100%_-_5rem)]">
                                                                <h4 class="text-sm font-semibold mb-2"><a class="text-giopio-black duration-300 hover:text-giopio-orange" href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h4>
                                                                <a href="<?php echo the_permalink( )?>" class="text-giopio-text-blue duration-300 hover:text-giopio-orange">Read More…</a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        endwhile;
                                                        endif;
                                                        wp_reset_postdata();
                                                    ?>

                                                        
                                                    </div>
                                                    <a href="<?= site_url('blog')?>" class="font-semibold text-giopio-orange text-base duration-300 hover:text-giopio-black">Read All Blogs<i class="fa-solid fa-arrow-right-long ml-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="<?= site_url('about-us')?>" class="giopio-navlink">About</a></li>
                            <li><a href="<?= site_url('projects')?>" class="giopio-navlink">Projects</a></li>
                            <li><a href="<?= site_url('blog')?>" class="giopio-navlink">Blog</a></li>
                            <li><a href="<?= site_url('#contact')?>" class="giopio-navlink">Contact</a></li>
                        </ul>
                        <button id="openGiopioModal" class="giopio-btn text-sm 2xl:text-base font-medium px-5 2xl:px-6 lg:ml-36 hover:bg-giopio-black">Start A Project</button>
                    </div>
                    <div class="block lg:hidden mobile-menu-wrapper">
                        <div class="mobile-menu-icon w-10 h-10 leading-8 giopio-btn mobile-menu-trigger px-2 py-3 rounded-md duration-300 hover:bg-giopio-black">
                            <span class="mobile-menu-bar mb-1"></span>
                            <span class="mobile-menu-bar mb-1"></span>
                            <span class="mobile-menu-bar"></span>
                        </div>
                        <div class="mobile-black-screen"></div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--Header Section [End]-->