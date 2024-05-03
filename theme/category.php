<?php

/*
 * Template Name: Category Page
 */

get_header();

$about_bg_img = thestartutor_get_static_img( 'about-bg.png' );

$current_page_cat = get_the_category() ? get_the_category()[0] : null;

$paged    = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'category_name'  => $current_page_cat->slug ?? null,
		'paged'          => $paged,
	)
);

$recents_wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
	)
);

?>

<main>
	<?php
	if ( is_category( $current_page_cat->slug ?? null ) ) {
		?>
		<section class="flex flex-col justify-center h-[350px] text-title font-title"
			style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.00) 66.62%), linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $about_bg_img; ?>'), lightgray 50% / cover no-repeat; background-position: center; background-size: cover;">
			<div
				class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] flex flex-col justify-center h-[350px] text-title font-title">
				<div class="text-primary-dark">
					<p class="text-title font-title">Category:
						<?php echo get_the_category()[0]->name; ?>
					</p>
				</div>
			</div>
		</section>

		<section class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
			<div class="flex flex-col lg:flex-row items-start gap-[56px]">
				<div class="w-full lg:max-w-[627px] mt-[90px] flex">
					<div class="w-full flex flex-col justify-center">
						<div class="flex py-3 gap-[30px] border-b-[1px] overflow-x-auto">
							<button class="text-button font-button border-b-2 text-[#D93726] text-semibold font-semibold border-b-2 border-brand-default">All</button>

							<button class="whitespace-nowrap hover:underline">GMAT</button>
							<button class="whitespace-nowrap hover:underline">ACT & SAT</button>

							<button class="whitespace-nowrap hover:underline">GRE</button>
							<button class="whitespace-nowrap hover:underline">ACT & SAT</button>
							<button class="whitespace-nowrap hover:underline">ACT & SAT</button>
						</div>


						<div id="tst-pagination-container" class="flex flex-col my-[16px] gap-[20px]">
							<?php
							if ( $wp_query->have_posts() ) {
								while ( $wp_query->have_posts() ) {
									$wp_query->the_post();
									?>
									<article
										class="pb-[8px] flex flex-col gap-[32px] items-start rounded-lg overflow-hidden bg-surface-primary w-full shadow-md">
										<figure class="w-full">
											<img src="<?php the_post_thumbnail_url(); ?>" class="w-full h-[304px] self-stretch" />
										</figure>
										<div class="px-[20px] flex flex-col gap-[20px] text-justify">
											<div class="flex flex-col items-start gap-[12px] self-stretch">
												<h2
													class="overflow-hidden text-left capitalize text-primary text-ellipsis font-mobileHeading2 text-mobileHeading2">
													<a href="<?php the_permalink(); ?>"
														class="hover:underline"><?php wp_trim_words( the_title(), 20 ); ?></a>
												</h2>
												<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
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
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
														viewBox="0 0 20 21" fill="none">
														<path
															d="M17.7077 7.12389V12.6298C17.7077 13.0637 17.6223 13.4933 17.4562 13.8941C17.2902 14.2948 17.0468 14.6591 16.7401 14.9658C16.4333 15.2726 16.0691 15.5159 15.6683 15.6819C15.2675 15.8479 14.8379 15.9334 14.4041 15.9334H12.2018L10.3848 17.7503C10.3353 17.803 10.2756 17.845 10.2093 17.8738C10.143 17.9024 10.0716 17.9173 9.99935 17.9173C9.9271 17.9173 9.85568 17.9024 9.78935 17.8738C9.7231 17.845 9.66335 17.803 9.61393 17.7503L7.79697 15.9334H5.59459C4.71842 15.9334 3.87815 15.5853 3.25861 14.9658C2.63907 14.3463 2.29102 13.506 2.29102 12.6298V7.12389C2.29102 6.24772 2.63907 5.40745 3.25861 4.7879C3.87815 4.16836 4.71842 3.82031 5.59459 3.82031H14.4041C15.2803 3.82031 16.1205 4.16836 16.7401 4.7879C17.3596 5.40745 17.7077 6.24772 17.7077 7.12389Z"
															stroke="#2D2D2D" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
													<span
														class="font-normal text-normal text-secondary"><?php echo get_comments_number(); ?>
														Comments</span>
												</div>
											</div>
										</div>
									</article>
									<?php
								}
								thestartutor_the_posts_navigation();
							}
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				<div class="w-full pt-[90px] lg:px-[56px]">
					<div class="w-full lg:w-auto lg:max-w-[348px]">
						<h3 class="text-heading3 font-heading3">Recents</h3>

						<form class="flex items-center gap-[5px] border-2 border-[#dadada] px-5 py-2 rounded-full mt-[8px]"
							action="<?php echo get_home_url(); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
								<path
									d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z"
									stroke="#7A7A7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M13.9996 14.0016L11.0996 11.1016" stroke="#7A7A7A" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<input type="text" name="s" placeholder="Search the website" />
							<input class="hidden" type="submit" value="Submit" />
						</form>
						<div class="mt-[24px] flex flex-col gap-[24px]">
							<?php
							if ( $recents_wp_query->have_posts() ) {
								while ( $recents_wp_query->have_posts() ) {
									$recents_wp_query->the_post();
									?>
									<div>
										<p class="text-semibold font-semibold"><a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a></p>
										<div class="flex items-center gap-[8px] mt-[10px]">
											<span
												class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">
												<?php the_category(); ?>
											</span>
											<span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
										</div>
									</div>
									<?php
								}
							}

							wp_reset_postdata();
							?>
						</div>
						<section class="w-full mt-[48px]">
							<button
								class="w-full xl:w-fit border-2 border-secondary-800 rounded-[60px] py-[16px] px-[32px] text-button font-button text-[#d93726]">Connect
								on Facebook</button>
						</section>
					</div>
				</div>
		</section>
		<?php
	} else {
		?>
		<section class="flex flex-col justify-center h-[350px] text-title font-title"
			style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.00) 66.62%), linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $about_bg_img; ?>'), lightgray 50% / cover no-repeat; background-position: center; background-size: cover;">
			<div
				class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] flex flex-col justify-center h-[350px] text-title font-title">
				<div class="text-primary-dark">
					<p class="text-title font-title">No such category found!</p>
				</div>
			</div>
		</section>
		<?php
	}
	?>
</main>

<?php

get_footer();
