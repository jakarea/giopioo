<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package giopioo
 */

get_header();
?>

<!--Banner Section [Start]-->
<section class="pt-20 pb-24 relative z-10 mb-24 mt-28">
	<div class="container">
		<div class="flex flex-col-reverse lg:flex-row lg:items-center">
			<div class="lg:w-1/2 lg:pr-20 pt-10">
				<h1 class="text-giopio-black giopio-title-size font-bold mb-10">How This Non-Profit Agency <span class="inline-block text-giopio-orange">Raised $1M</span> Within 6 Months</h1>
				<p class="mb-10 text-sm md:text-base 2xl:text-lg text-giopio-text leading-7 font-medium">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium doloremque laudanum, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
				<div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-10">
					<img src="https://via.placeholder.com/60" class="rounded-full" alt="">
					<div>
						<a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange">Travor Borris</a>
						<div class="md:flex items-center gap-3 text-giopio-text text-sm font-medium">
							<a href="#" class="block duration-300 hover:text-giopio-orange my-2 md:my-0">September 29, 2019</a>
							<span class="hidden md:inline-block w-1 h-1 bg-giopio-text rounded-full"></span>
							<span class="block">4 min read</span>
						</div>
					</div>
				</div>
				<a href="#" class="text-sm 2xl:text-base font-semibold rounded-full bg-white border border-giopio-orange text-giopio-text px-8 py-3 inline-block duration-300 hover:bg-giopio-orange hover:text-white">Business</a>
			</div>
			<div class="lg:w-1/2 flex justify-end">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/blog-banner.jpg" class="w-full lg:w-auto max-w-full xl:blog-banner rounded-md" alt="">
			</div>
		</div>
	</div>
	<div class="w-2/3 h-full bg-giopio-gray-bg absolute left-0 top-0 bottom-0 -z-10"></div>
</section>
<!--Banner Section [End]-->


<section class="mb-24">
	<div class="container">
		<div class="lg:flex gap-6">
			<div class="lg:w-1/4 text-sm md:text-lg text-giopio-text font-medium mb-12 lg:mb-0">
				<div class="border-l border-giopio-text pl-7">
					<div class=" mb-7">Contents</div>
					<ul>
						<li class="mb-4 duration-300 cursor-pointer text-giopio-orange hover:text-giopio-black">Home</li>
						<li class="mb-4 duration-300 hover:text-giopio-orange cursor-pointer">History</li>
						<li class="mb-4 duration-300 hover:text-giopio-orange cursor-pointer">Page Speed</li>
						<li class="mb-4 duration-300 hover:text-giopio-orange cursor-pointer">Timeline</li>
						<li class="mb-4 duration-300 hover:text-giopio-orange cursor-pointer">User Experience</li>
						<li class="mb-4 duration-300 hover:text-giopio-orange cursor-pointer">Content Accuracy</li>
					</ul>
				</div>
			</div>
			<div class="lg:w-3/4 blog-post">
				<h1 class="text-2xl 2xl:text-3xl font-bold text-giopio-black mb-8"><?php the_title(); ?></h1>
				<div class="aritcle-details">
					<?php the_content() ?>
				</div>
			</div>
			<div class="lg:w-1/4 text-giopio-text flex lg:block gap-3 mt-6 lg:mt-0">
				<a href="#" class="w-10 h-10 rounded-full leading-10 block text-center social-icon-shadow mb-4 duration-300 hover:text-giopio-orange"><i class="fa-brands fa-twitter"></i></a>
				<a href="#" class="w-10 h-10 rounded-full leading-10 block text-center social-icon-shadow mb-4 duration-300 hover:text-giopio-orange"><i class="fa-brands fa-linkedin-in"></i></a>
				<a href="#" class="w-10 h-10 rounded-full leading-10 block text-center social-icon-shadow mb-4 duration-300 hover:text-giopio-orange"><i class="fa-brands fa-facebook-f"></i></a>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
