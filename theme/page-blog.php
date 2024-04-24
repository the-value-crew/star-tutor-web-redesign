<?php

/*
 * Template Name: Blog Page
 */

get_header();

$about_bg_img = thestartutor_get_static_img( 'about-bg.png' );

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
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
    <section class="flex flex-col justify-center h-[350px] text-title font-title"
        style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.00) 66.62%), linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $about_bg_img; ?>'), lightgray 50% / cover no-repeat; background-position: center; background-size: cover;">
        <div
            class="2xl:container px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] flex flex-col justify-center h-[350px] text-title font-title">
            <div class="text-primary-dark">
                <p class="text-title font-title">Access Resources in The</p>
                <p class="text-title font-title">Star Tutor's <span class="text-brand-invert">Blog</span></p>
            </div>
        </div>
    </section>

    <section class="2xl:container px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
        <div class="flex flex-col lg:flex-row items-start gap-[56px]">
            <div class="w-full lg:max-w-[627px] mt-[90px] flex">
                <div class="flex flex-col justify-center w-full">
                    <div class="flex gap-5 border-b-[1px] overflow-scroll">
                        <button class="text-button font-button border-b-2 text-[#D93726]">All</button>

                        <button>GMAT</button>
                        <button>ACT & SAT</button>

                        <button>GRE</button>
                        <button>ACT & SAT</button>
                        <button>ACT & SAT</button>
                    </div>

                    <div id="tst-pagination-container" class="flex flex-col my-[16px] gap-[20px]">
                        <?php
                        if ($wp_query->have_posts()) {
                            while ($wp_query->have_posts()) {
                                $wp_query->the_post();
                                ?>
                        <!-- <div class="w-full border-2 rounded-lg border-grey-200">
                            <img class="w-full h-[304px] rounded-t-lg object-cover"
                                src="<?php the_post_thumbnail_url() ?>" />
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z"
                                                stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="text-captionBig font-captionBig text-secondary">
                                            <?php echo get_comments_number(); ?> Comments
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[4px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z"
                                                stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z"
                                                stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <article
                            class="pb-[8px] flex flex-col gap-[32px] items-start rounded-lg overflow-hidden bg-surface-primary w-[328px] md:w-[600px] lg:w-[462px] shadow-md 2xl:w-[532px] xl:w-[511px]">
                            <figure class="w-full">
                                <img src="<?php the_post_thumbnail_url() ?>" class="w-full h-[304px] self-stretch" />
                            </figure>
                            <div class="px-[20px] flex flex-col gap-[20px] text-justify">
                                <div class="flex flex-col items-start gap-[12px] self-stretch">
                                    <h2
                                        class="overflow-hidden text-left capitalize text-primary text-ellipsis font-mobileHeading2 text-mobileHeading2">
                                        <a href="<?php the_permalink(); ?>"
                                            class="hover:underline"><?php  wp_trim_words(the_title(), 20); ?></a>
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
            <div class="pt-[90px] lg:px-[56px]">
                <div class="max-w-full lg:max-w-[348px]">
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
                        <input type="text" name="s" placeholder="Search the website"
                            class="bg-transparent border-transparent" />
                        <input class="hidden" type="submit" value="Submit" />
                    </form>
                    <div class="mt-[24px] flex flex-col gap-[24px]">
                        <?php
                        if ($recents_wp_query->have_posts()) {
                            while ($recents_wp_query->have_posts()) {
                                $recents_wp_query->the_post();
                                ?>
                        <div>
                            <p class="font-semibold text-semibold"><a href="<?php the_permalink(); ?>">
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
</main>

<?php

get_footer();