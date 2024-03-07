<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thestartutor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( ! is_page() ) : ?>
			<div class="entry-meta">
				<?php thestartutor_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php thestartutor_post_thumbnail(); ?>

	<div <?php thestartutor_content_class( 'entry-content' ); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'thestartutor' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'thestartutor' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php thestartutor_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->

<main class="flex flex-col items-center">
        <section class="mt-[60px]">
            <div class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
                <div class="h-[558px] bg-[url('./images/blog-article.png')] bg-center bg-cover"></div>
                <p class="my-[30px] text-heading1 font-heading1">What GMAT and GRE tests feel like and what you can do about it</p>
                <div class="text-subheading font-subheading">
                    <p class="py-[6px]">The cartoon above very closely depicts what it feels like taking the GMAT or the GRE. I am using metaphors to help you understand different types of experiences and challenges, and for each challenge, I am suggesting solutions that you can incorporate early on in your training. Some of the suggestions may not be immediately obvious and may require more research on your part.</p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">1. You</h3>
                    </p>
                    <p class="py-[6px]">
                        You are an accomplished individual but want to be somewhere else in life.<br>
                        Believe in your potential!
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">2. The bridge</h3>
                    </p>
                    <p class="py-[6px]">
                        The narrow bridge represents the test you are taking, which connects where you are right now to where you want to go. Crossing this bridge feels difficult and demands very meticulous and focused steps. The latter part of the journey will be even more challenging because of the adaptive nature of the test. Strategy: Get to know the content of the test, the scoring algorithm, and the details of the adaptive nature (GRE and GMAT are both adaptive, but in different ways), and the common distractions it presents. Give the test all the time and seriousness it deserves. Respect the difficulty of the test and prepare accordingly.
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">3. The briefcase</h3>
                    </p>
                    <p class="py-[6px]">
                        All of your accumulated experience and training are carried with you. They give you balance in the moment and will also be the tools you use to succeed when you reach your destination.
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">4. Rush</h3>
                    </p>
                    <p class="py-[6px]">
                        Even though the path holds some risks, you are in a rush and have to maintain a certain speed as you have limited time to cross the bridge (finish the exam).<br>
                        Also, as you have an appointment with success on the other side of the bridge, you feel a great sense of urgency and impatience while navigating challenges on your chosen path. However, you should take your time to train yourself and not attempt the cross prematurely.
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">5. Treacherous traversal</h3>
                    </p>
                    <p class="py-[6px]">
                        The test is relatively short, and your career success waiting on the other side will be long. Nevertheless, the 3.5-hour test can be grueling due to fear and self-doubt that is normal for everyone. To reach your goal, you must train in a systematic way, as though putting one foot in front of the other while walking. And in moments of pressure and stress, you must trust in your training. Strategy: You have 3-4 short hours to apply all your training and attain the scores you need for admissions to your desired schools. Practice enduring the time-pressure, physical lethargy and mental fatigue you may confront during the test. Practice a lot and be psychologically prepared to win!
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">5. Treacherous traversal</h3>
                    </p>
                    <p class="py-[6px]">
                        The test is relatively short, and your career success waiting on the other side will be long. Nevertheless, the 3.5-hour test can be grueling due to fear and self-doubt that is normal for everyone. To reach your goal, you must train in a systematic way, as though putting one foot in front of the other while walking. And in moments of pressure and stress, you must trust in your training. Strategy: You have 3-4 short hours to apply all your training and attain the scores you need for admissions to your desired schools. Practice enduring the time-pressure, physical lethargy and mental fatigue you may confront during the test. Practice a lot and be psychologically prepared to win!
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">5. Treacherous traversal</h3>
                    </p>
                    <p class="py-[6px]">
                        The narrow bridge represents the test you are taking, which connects where you are right now to where you want to go. Crossing this bridge feels difficult and demands very meticulous and focused steps. The latter part of the journey will be even more challenging because of the adaptive nature of the test.<br><br>

                        <strong>Strategy:</strong> Get to know the content of the test, the scoring algorithm, and the details of the adaptive nature (GRE and GMAT are both adaptive, but in different ways), and the common distractions it presents. Give the test all the time and seriousness it deserves. Respect the difficulty of the test and prepare accordingly.
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">6. Sharp rocks</h3>
                    </p>
                    <p class="py-[6px]">
                        Thankfully, GMAT and GRE will allow you to make some mistakes, and one or two errors will not be fatal especially if the mistakes are made on difficult questions. Without taking some calculated risks, it’s unlikely that your journey will be successful.<br><br>

                        <strong>Strategy:</strong> The clock is ticking, so learn how to remove bad answers and maximize the odds of choosing the right answer in case you are behind on time in the test. Train yourself to guess and estimate the answer when you don’t know the solution to the problem.
                    </p>
                    <p class="py-[6px]">
                        <h3 class="text-heading3 font-heading3">7. Gamble</h3>
                    </p>
                    <p class="py-[6px]">
                        Thankfully, GMAT and GRE will allow you to make some mistakes, and one or two errors will not be fatal especially if the mistakes are made on difficult questions. Without taking some calculated risks, it’s unlikely that your journey will be successful.<br><br>
                        <strong>Strategy:</strong> The clock is ticking, so learn how to remove bad answers and maximize the odds of choosing the right answer in case you are behind on time in the test. Train yourself to guess and estimate the answer when you don’t know the solution to the problem.
                    </p>
                    <p class="py-[26px]">
                        To summarize, you have already made a long journey arriving at the place where you must cross this bridge to success. Merely facing this challenge is a proof of achievement and intent. To continue onward, it is important to consider what you carry with you from the past, and quickly gather anything you will need for facing the challenges of the near future. This process constitutes rigorous training and will help you stay confidently balanced while avoiding the inner and outer barriers to your goal.<br><br>

    For any important journey, the wisest use a guide. The guide can help you determine your readiness, advise you on what is useful and what can be left behind, and can clearly narrate the challenges along the path. Making use of a guide takes the worry out of travel and ensures a safe arrive at your destination.<br><br>

    The Star Tutor has guided very many clients through their GMAT and GRE journeys, and they have moved on to great careers. If you need some help preparing to face these tests, please check out the reviews of others who have gone on to their appointments with success (on Yelp, for instance). The Star Tutor is always ready to help.<br><br>
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-[8px]">
                            <span class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">GMAT/GRE Prep</span>
                            <span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
                        </div>
                        <div class="flex items-center gap-[16px]">
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">3 Comments</span>
                            </div>
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="w-full px-[350px] mt-[76px]">
            <h2 class="text-heading2 font-heading2">Comments (24)</h2>
            <div class="flex py-[24px] px-[24px] gap-[8px]">
                <div class="w-[40px] h-[40px] bg-[url('./src/images/user.jpg')] bg-center bg-cover rounded-full"></div>
                <input class="h-[40px] outline-none w-full bg-surface-secondary resize-none rounded-full indent-[10px]" placeholder="Write a comment" />
            </div>
            <hr>
            <div>
                <div class="flex flex-col py-[24px] px-[24px] gap-[8px]">
                    <div class="flex gap-[7px]">
                        <div class="w-[40px] h-[40px] bg-[url('./src/images/user1.jpg')] bg-center bg-cover rounded-full"></div>
                        <div class="flex flex-col">
                            <span class="text-semibold font-semibold">Sam W</span>
                            <span class="text-captionSmall font-captionSmall">15 Dec 2023</span>
                        </div>
                    </div>
                    <div>
                        Thanks so much for including my article! I greatly appreciate your support!! &lt;3
                    </div>
                    <div class="mt-[10px] flex items-center gap-[16px]">
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">3 Replies</span>
                        </div>
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-[24px] px-[24px] gap-[8px]">
                    <div class="flex gap-[7px]">
                        <div class="w-[40px] h-[40px] bg-[url('./src/images/user1.jpg')] bg-center bg-cover rounded-full"></div>
                        <div class="flex flex-col">
                            <span class="text-semibold font-semibold">Michael J</span>
                            <span class="text-captionSmall font-captionSmall">15 Dec 2023</span>
                        </div>
                    </div>
                    <div>
                        Indeed, and I've got some thoughts, at least when it comes to AI writing in museums!
                    </div>
                    <div class="mt-[10px] flex items-center gap-[16px]">
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">3 Replies</span>
                        </div>
                        <div class="flex items-center gap-[4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button class="flex flex-col py-[24px] px-[24px] gap-[8px]">See more comments...</button>
        </section>

        <section class="w-full px-[350px] mt-[76px]">
            <h2 class="text-heading2 font-heading2">More Blogs For You</h2>
            <div class="flex my-[16px] gap-[10px]">
                <div class="border-2 border-grey-200 rounded-lg">
                    <img class="h-[304px] rounded-t-lg object-cover" src="../images/article1.png" />
                    <div class="mt-[16px] px-[20px]">
                        <h2 class="text-heading2 font-heading2">What Healthy Habits Can Help You Get A Higher GMAT/GRE Or SAT/ACT Score</h2>
                        <p>The cartoon above very closely depicts what it feels like taking the GMAT or the GRE. I am using metaphors to help you unders...</p>
                    </div>
                    <div class="flex flex-col px-[20px] pb-[20px]">
                        <div class="flex items-center gap-[8px] mt-[10px]">
                            <span class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">GMAT/GRE Prep</span>
                            <span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
                        </div>
                        <div class="flex items-center gap-[16px] mt-[16px]">
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">3 Comments</span>
                            </div>
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 border-grey-200 rounded-lg">
                    <img class="h-[304px] rounded-t-lg object-cover" src="../images/stress.png" />
                    <div class="mt-[16px] px-[20px]">
                        <h2 class="text-heading2 font-heading2">The Science Behind Test Anxiety and How to Overcome It</h2>
                        <p>The cartoon above very closely depicts what it feels like taking the GMAT or the GRE. I am using metaphors to help you unders...</p>
                    </div>
                    <div class="flex flex-col px-[20px] pb-[20px]">
                        <div class="flex items-center gap-[8px] mt-[10px]">
                            <span class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">GMAT/GRE Prep</span>
                            <span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
                        </div>
                        <div class="flex items-center gap-[16px] mt-[16px]">
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">3 Comments</span>
                            </div>
                            <div class="flex items-center gap-[4px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full px-[350px] mt-[48px]">
            <button class="border-2 border-secondary-800 rounded-[60px] py-[16px] px-[32px] text-button font-button text-[#d93726]">Explore More Topics</button>
        </section>
    </main>

