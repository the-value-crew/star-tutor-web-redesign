<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thestartutor
 */

get_header();

$similar_wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 2,
	)
);

?>

<main class="flex flex-col items-center">
	<?php
	while ( have_posts() ) {
		the_post();
		?>
	<section class="mt-[60px]">
		<div class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] 2xl:container">
		<div style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')" class="h-[558px] bg-center bg-cover rounded-lg"></div>
			<div class="lg:px-[160px]">
				<p class="my-[30px] text-heading1 font-heading1">
				<?php the_title(); ?>
				</p>
				<div class="tst-single text-largeRegular font-largeRegular">
				<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
		<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	?>

	<section class="w-full mt-[60px] px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] 2xl:container">
		<h2 class="text-heading2 font-heading2">More Blogs For You</h2>
		<div class="w-full flex flex-col my-[16px] gap-[10px]">
			<div class="w-full flex flex-wrap lg:flex-nowrap gap-[20px]">
				<?php
				if ( $similar_wp_query->have_posts() ) {
					while ( $similar_wp_query->have_posts() ) {
						$similar_wp_query->the_post();
						?>
						<article
							class="w-full pb-[8px] flex flex-col gap-[32px] items-start rounded-lg bg-surface-primary shadow-md">
							<figure class="w-full">
								<img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-[304px] self-stretch" />
							</figure>
							<div class="px-[20px] flex flex-col gap-[20px] text-justify">
								<div class="flex flex-col items-start gap-[12px] self-stretch">
									<h1 class="capitalize text-primary text-ellipsis font-mobileHeading2 text-mobileHeading2">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h1>
									<?php the_excerpt(); ?>
								</div>
								<div class="flex gap-[16px]">
									<span
										class="bg-surface-secondary rounded-2xl px-[8px] py-[2px] text-captionBig font-captionBig">
										<?php the_category(); ?>
									</span>
									<span>6 minute read</span>
								</div>
								<div class="flex justify-between py-[12px] px-[4px]">
									<div class="flex items-center gap-[8px]">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
											fill="none">
											<path
												d="M17.7077 7.12389V12.6298C17.7077 13.0637 17.6223 13.4933 17.4562 13.8941C17.2902 14.2948 17.0468 14.6591 16.7401 14.9658C16.4333 15.2726 16.0691 15.5159 15.6683 15.6819C15.2675 15.8479 14.8379 15.9334 14.4041 15.9334H12.2018L10.3848 17.7503C10.3353 17.803 10.2756 17.845 10.2093 17.8738C10.143 17.9024 10.0716 17.9173 9.99935 17.9173C9.9271 17.9173 9.85568 17.9024 9.78935 17.8738C9.7231 17.845 9.66335 17.803 9.61393 17.7503L7.79697 15.9334H5.59459C4.71842 15.9334 3.87815 15.5853 3.25861 14.9658C2.63907 14.3463 2.29102 13.506 2.29102 12.6298V7.12389C2.29102 6.24772 2.63907 5.40745 3.25861 4.7879C3.87815 4.16836 4.71842 3.82031 5.59459 3.82031H14.4041C15.2803 3.82031 16.1205 4.16836 16.7401 4.7879C17.3596 5.40745 17.7077 6.24772 17.7077 7.12389Z"
												stroke="#2D2D2D" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<span class="font-normal text-normal text-secondary">3 Comments</span>
									</div>
								</div>
							</div>
						</article>
						<?php
					}
				}

				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

	<section class="w-full mt-[48px] px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] 2xl:container">
		<button
			class="border-2 border-secondary-800 rounded-[60px] py-[16px] px-[32px] text-button font-button text-[#d93726]">Explore
			More Topics</button>
	</section>
</main>

<?php

get_footer();
