<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package thestartutor
 */

get_header();

$recents_wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
	)
);

$paged         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$post_wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'paged'          => $paged,
	)
);
?>

<main>
	<section
		class="flex flex-col text-title font-title mt-[100px] xl:mt-[116.3px] 2xl:mt-[122px] px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
		<?php
		printf(
			/* translators: 1: search result title. 2: search term. */
			'<h1>%1$s <span>%2$s</span></h1>',
			esc_html__( 'Search results for:', 'thestartutor' ),
			get_search_query()
		);
		?>
	</section>

	<section class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
		<div class="flex flex-col lg:flex-row items-start gap-[56px]">
			<div class="w-full lg:max-w-[627px] mt-[90px] flex">
				<div class="w-full flex flex-col justify-center">
					<div class="flex gap-5 border-b-[1px]">
						<button class="text-button font-button border-b-2 text-[#D93726]">All</button>

						<button>GMAT</button>
						<button>ACT & SAT</button>

						<button>GRE</button>
						<button>ACT & SAT</button>
						<button>ACT & SAT</button>
					</div>

					<div id="tst-pagination-container" class="flex flex-col my-[16px] gap-[20px]">
						<?php
						if ( $post_wp_query->have_posts() ) {
							while ( $post_wp_query->have_posts() ) {
								$post_wp_query->the_post();
								?>
								<div class="border-2 border-grey-200 rounded-lg lg:max-w-[627px]">
									<img class="w-full h-[304px] rounded-t-lg object-cover" src="<?php the_post_thumbnail_url(); ?>" />
									<div class="mt-[16px] px-[20px]">
										<h2 class="text-heading2 font-heading2"><a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a></h2>
										<p>
											<?php the_excerpt(); ?>
										</p>
									</div>
									<div class="flex flex-col px-[20px] pb-[20px]">
										<div class="flex items-center gap-[8px] mt-[10px]">
											<span
												class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">
												<?php the_category(); ?>
											</span>
											<span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
										</div>
										<div class="flex items-center gap-[16px] mt-[16px]">
											<div class="flex items-center gap-[4px]">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
													<path
														d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z"
														stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
												<span class="text-captionBig font-captionBig text-secondary">3 Comments</span>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							thestartutor_the_posts_navigation();
						} else {
							?>
							<div>
								<span class="font-title text-title">No results found!</span>
							</div>
							<?php
						}

						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
			<div class="pt-[90px] lg:px-[56px]">
				<div class="max-w-full lg:max-w-[348px]">
					<h3 class="text-heading3 font-heading3">Recents</h3>

					<form class="flex items-center gap-[5px] border-2 border-[#dadada] px-5 py-2 rounded-full mt-[8px]"
						action="<?php echo get_home_url(); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path
								d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z"
								stroke="#7A7A7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M13.9996 14.0016L11.0996 11.1016" stroke="#7A7A7A" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" />
						</svg>
						<input type="text" name="s" value="<?php echo "$s"; ?>" placeholder="Search the website" />
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
		</div>
	</section>
</main>

<?php
get_footer();
