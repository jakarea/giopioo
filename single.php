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
	<?php 
                $args = array(
                    'post_type'     => 'post',
                    'posts_per_page'=> 1,
                    'orderby' => 'rand',
                );
                $blogQry = new WP_Query($args);
                if($blogQry->have_posts()) : while($blogQry->have_posts()) : $blogQry->the_post();
            ?>

		<div class="flex flex-col-reverse lg:flex-row lg:items-center">
			<div class="lg:w-1/2 lg:pr-20 pt-10">
				<h1 class="text-giopio-black giopio-title-size font-bold mb-10"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h1>
				<p class="mb-10 text-sm md:text-base 2xl:text-lg text-giopio-text leading-7 font-medium"><?php the_excerpt()?></p>
				<br/>
				<div class="text-sm text-giopio-text font-medium flex items-center gap-3 mb-10">
					<?php	$user_id = get_the_author_meta('ID');	?>
					<img src=<?= get_avatar_url($user_id);?>" class="rounded-full" style="width: 60px"  alt="">
					<div>
						<a href="#" class="text-base font-semibold text-giopio-text block mb-1 duration-300 hover:text-giopio-orange"><?= get_the_author_meta('display_name')?></a>
						<div class="md:flex items-center gap-3 text-giopio-text text-sm font-medium">
							<a href="#" class="block duration-300 hover:text-giopio-orange my-2 md:my-0"><?php echo get_the_date() ?></a>
							<span class="hidden md:inline-block w-1 h-1 bg-giopio-text rounded-full"></span>
							<span class="block"><?php do_action('show_reading_time', get_the_content() )?> Read</span>
						</div>
					</div>
				</div>
				<?php 
					$categories = get_the_category();
				?>
				<a href="#" class="text-sm 2xl:text-base font-semibold rounded-full bg-white border border-giopio-orange text-giopio-text px-8 py-3 inline-block duration-300 hover:bg-giopio-orange hover:text-white"><?= $categories[0]->name ?></a>
				
			</div>
			<div class="lg:w-1/2 flex justify-end">
				<?php the_post_thumbnail( "post-thumbnails", 'class="w-full lg:w-auto max-w-full xl:blog-banner rounded-md"' ); ?>
			</div>
		</div>
		<?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
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
				<a href="https://www.facebook.com/share.php?u=https://html.giopio.com/blog-details.html" target="_blank" class="w-10 h-10 rounded-full leading-10 block text-center social-icon-shadow mb-4 duration-300 hover:text-giopio-orange"><i class="fa-brands fa-facebook-f"></i></a>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
