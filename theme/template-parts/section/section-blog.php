<?php

$wp_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 2,
	)
);

?>
<div class="container flex items-center justify-center w-full m-auto">
	<div class="2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] w-[327px]">
		<!-- Blogs section -->
		<section
			class=" w-full 2xl:mb-[320px] xl:mb-[200px] lg:mb-[140px] md:mb-[120px] mb-[80px] flex flex-col md:gap-[60px] gap-[40px] md:items-center"
			id="blogsSection">
			<section class="inline-flex flex-col gap-4 md:items-center">
				<section class="relative flex flex-col gap-2 md:items-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="174" height="139" viewBox="0 0 174 139" fill="none"
						class="absolute top-[-97px] right-[50px] hidden xl:block">
						<g clip-path="url(#clip0_950_8705)">
							<path
								d="M108.739 44.7684C109.658 45.0616 110.589 45.3718 111.506 45.6914C112.364 45.9901 113.3 45.5395 113.597 44.6855C113.868 43.9017 113.508 43.051 112.785 42.6844C112.719 42.6509 112.65 42.6219 112.58 42.5972C111.636 42.2678 110.677 41.9486 109.729 41.6464C108.863 41.3711 107.94 41.8453 107.666 42.7068C107.393 43.569 107.873 44.4909 108.739 44.7684Z"
								fill="#7A7A7A" />
							<path
								d="M81.0856 39.8745C82.0528 39.913 83.0318 39.9648 83.993 40.0296C84.8992 40.0904 85.6799 39.4085 85.7374 38.5051C85.7809 37.8296 85.4066 37.2215 84.8372 36.933C84.6449 36.8356 84.4305 36.7747 84.2027 36.7583C83.2091 36.6918 82.2 36.6376 81.2019 36.5981C80.2942 36.5623 79.5332 37.267 79.5015 38.1706C79.469 39.0756 80.1787 39.8371 81.0864 39.873L81.0856 39.8745Z"
								fill="#7A7A7A" />
							<path
								d="M90.4321 40.6692C91.3902 40.7949 92.3593 40.9353 93.3144 41.0888C94.2114 41.2331 95.053 40.6242 95.192 39.7309C95.3062 39.0105 94.9292 38.3239 94.3084 38.0094C94.1587 37.9335 93.9957 37.8803 93.8223 37.8512C92.8364 37.6931 91.835 37.5473 90.8475 37.4178C89.9467 37.2991 89.1242 37.9323 89.0094 38.8287C88.8939 39.7265 89.5306 40.5484 90.4314 40.667L90.4321 40.6692Z"
								fill="#7A7A7A" />
							<path
								d="M117.561 48.0045C118.455 48.3767 119.355 48.7651 120.239 49.1615C121.069 49.5325 122.039 49.1649 122.408 48.3386C122.766 47.5378 122.426 46.6001 121.648 46.206C121.624 46.1941 121.599 46.1814 121.575 46.171C120.664 45.7627 119.737 45.3624 118.817 44.979C117.978 44.6292 117.016 45.0232 116.669 45.8585C116.321 46.6938 116.719 47.6554 117.56 48.0023L117.561 48.0045Z"
								fill="#7A7A7A" />
							<path
								d="M99.6747 42.3105C100.617 42.5218 101.57 42.7493 102.51 42.987C103.39 43.2111 104.283 42.6795 104.502 41.803C104.692 41.0457 104.321 40.2793 103.648 39.9387C103.541 39.8844 103.427 39.8411 103.306 39.8109C102.336 39.5656 101.353 39.3298 100.382 39.1132C99.4959 38.914 98.6185 39.4699 98.4222 40.3524C98.2258 41.235 98.7866 42.1121 99.6725 42.3112L99.6747 42.3105Z"
								fill="#7A7A7A" />
							<path
								d="M141.952 62.0203C142.722 62.6034 143.497 63.2071 144.253 63.8122C144.963 64.3795 145.997 64.2683 146.563 63.5635C147.129 62.8574 147.013 61.8259 146.305 61.2594C145.525 60.6351 144.728 60.0143 143.934 59.4142C143.853 59.3527 143.769 59.3008 143.681 59.2562C142.985 58.9037 142.117 59.0844 141.63 59.7244C141.083 60.4439 141.226 61.4726 141.95 62.021L141.952 62.0203Z"
								fill="#7A7A7A" />
							<path
								d="M134.227 56.6658C135.045 57.1825 135.867 57.717 136.673 58.2571C137.427 58.764 138.448 58.5639 138.952 57.8133C139.456 57.0627 139.253 56.0438 138.498 55.5385C137.67 54.9828 136.822 54.432 135.98 53.8989C135.935 53.8707 135.89 53.844 135.843 53.8202C135.096 53.4417 134.169 53.6843 133.714 54.403C133.231 55.1677 133.461 56.1801 134.227 56.6658Z"
								fill="#7A7A7A" />
							<path
								d="M126.076 51.983C126.935 52.429 127.8 52.8934 128.647 53.3628C129.439 53.7988 130.442 53.5179 130.879 52.728C131.317 51.9366 131.028 50.9384 130.233 50.4987C129.36 50.016 128.47 49.5375 127.585 49.0781C127.579 49.0751 127.574 49.0729 127.569 49.0699C126.766 48.6632 125.783 48.9749 125.368 49.7724C124.951 50.5742 125.266 51.5653 126.074 51.9838L126.076 51.983Z"
								fill="#7A7A7A" />
							<path
								d="M149.193 68.0091C149.911 68.6579 150.63 69.325 151.332 69.9904C151.989 70.6175 153.03 70.5957 153.655 69.9413C154.281 69.2876 154.253 68.2494 153.596 67.6246C152.875 66.9377 152.133 66.2499 151.392 65.5827C151.281 65.4822 151.158 65.4 151.031 65.3353C150.385 65.0081 149.577 65.1349 149.07 65.6949C148.463 66.3656 148.517 67.4024 149.192 68.0106L149.193 68.0091Z"
								fill="#7A7A7A" />
							<path
								d="M8.65369 61.777C9.20769 62.4964 10.24 62.6322 10.9593 62.0825C11.725 61.4958 12.5092 60.9128 13.2903 60.3504C14.0235 59.8206 14.1865 58.7964 13.6524 58.0632C13.4936 57.8451 13.2913 57.6765 13.0653 57.562C12.5325 57.292 11.8723 57.321 11.3573 57.6933C10.5518 58.2746 9.74341 58.8764 8.95261 59.4798C8.23331 60.0295 8.10116 61.0584 8.65515 61.7778L8.65369 61.777Z"
								fill="#7A7A7A" />
							<path
								d="M16.3672 56.2246C16.8556 56.9897 17.8729 57.2169 18.6369 56.7321C19.4509 56.2175 20.284 55.7053 21.1134 55.2114C21.8919 54.7487 22.1438 53.7419 21.6745 52.9645C21.5079 52.6891 21.2748 52.4793 21.0077 52.344C20.5205 52.0971 19.9214 52.0964 19.4191 52.3962C18.5639 52.9046 17.7043 53.4328 16.8674 53.9633C16.102 54.4474 15.8788 55.4595 16.3672 56.2246Z"
								fill="#7A7A7A" />
							<path
								d="M1.47452 68.0002C2.09192 68.6673 3.13117 68.7092 3.79776 68.0961C4.50639 67.4438 5.23487 66.7923 5.96108 66.1598C6.64378 65.5659 6.71273 64.5307 6.1145 63.8476C5.97099 63.6831 5.80162 63.5551 5.61817 63.4622C5.03846 63.1684 4.31345 63.2343 3.79516 63.6857C3.0461 64.3378 2.29403 65.0104 1.56181 65.6839C0.896677 66.2977 0.857131 67.3331 1.47452 68.0002Z"
								fill="#7A7A7A" />
							<path
								d="M24.5442 51.3711C24.9648 52.1753 25.9568 52.4889 26.7617 52.0725C27.6188 51.6294 28.4936 51.1915 29.3632 50.7712C30.179 50.3769 30.5168 49.3971 30.1182 48.5821C29.9539 48.2474 29.6916 47.9933 29.382 47.8364C28.9388 47.6119 28.3993 47.5882 27.9192 47.8222C27.0246 48.2555 26.1226 48.7071 25.2405 49.1633C24.4356 49.5797 24.1242 50.5691 24.5456 51.3719L24.5442 51.3711Z"
								fill="#7A7A7A" />
							<path
								d="M33.1121 47.2412C33.4628 48.0779 34.4251 48.4755 35.2628 48.129C36.1564 47.7594 37.0662 47.398 37.9671 47.0542C38.8136 46.7304 39.2343 45.7835 38.9064 44.9382C38.7541 44.5435 38.4648 44.2409 38.114 44.0632C37.7134 43.8602 37.2321 43.82 36.7794 43.9927C35.8513 44.3466 34.915 44.7203 33.9941 45.0999C33.1564 45.4464 32.7613 46.4045 33.1121 47.2412Z"
								fill="#7A7A7A" />
							<path
								d="M71.7022 39.9239C72.6727 39.8759 73.6512 39.8412 74.6134 39.8203C75.5213 39.8012 76.2376 39.0499 76.2143 38.146C76.1987 37.5214 75.8338 36.9859 75.3098 36.7204C75.075 36.6014 74.8091 36.5365 74.5291 36.5432C73.5388 36.5647 72.528 36.6013 71.5274 36.6506C70.6209 36.696 69.9251 37.4651 69.9742 38.3692C70.0233 39.2733 70.7972 39.9701 71.7037 39.9246L71.7022 39.9239Z"
								fill="#7A7A7A" />
							<path
								d="M62.3591 40.7962C63.3166 40.6646 64.2888 40.5441 65.2499 40.4382C66.1522 40.3391 66.7989 39.5287 66.6961 38.6286C66.6311 38.0579 66.2799 37.5899 65.8015 37.3475C65.5255 37.2077 65.206 37.1431 64.8758 37.1795C63.8853 37.2889 62.8837 37.4129 61.8968 37.548C60.9989 37.6712 60.3734 38.4979 60.4997 39.3952C60.6268 40.2911 61.4582 40.918 62.3576 40.7955L62.3591 40.7962Z"
								fill="#7A7A7A" />
							<path
								d="M53.1267 42.4697C54.0698 42.2573 55.0283 42.0546 55.9757 41.8665C56.8657 41.6897 57.4406 40.8282 57.2598 39.9399C57.1565 39.4268 56.8234 39.0176 56.389 38.7975C56.072 38.6369 55.6988 38.5763 55.3236 38.6506C54.3475 38.8443 53.3603 39.0527 52.3893 39.2729C51.5043 39.4725 50.9522 40.351 51.1565 41.2328C51.36 42.1161 52.2432 42.67 53.1267 42.4697Z"
								fill="#7A7A7A" />
							<path
								d="M44.0737 44.922C44.9965 44.6297 45.9332 44.3462 46.8596 44.0794C47.73 43.8285 48.2308 42.9202 47.9743 42.0505C47.8413 41.5959 47.5294 41.2432 47.136 41.0439C46.7765 40.8618 46.351 40.8096 45.9338 40.9304C44.9795 41.205 44.0141 41.4978 43.0648 41.7988C42.2009 42.0733 41.7251 42.9942 42.0037 43.8567C42.2823 44.7193 43.2076 45.1973 44.0715 44.9228L44.0737 44.922Z"
								fill="#7A7A7A" />
							<path d="M166.484 85.1129L163.371 66.0664L148.397 78.2174L166.484 85.1129Z"
								fill="#7A7A7A" />
						</g>
						<defs>
							<clipPath id="clip0_950_8705">
								<rect width="156" height="75" fill="white"
									transform="translate(139.63 138.115) rotate(-153.13)" />
							</clipPath>
						</defs>
					</svg>
					<h2 id="blogsSubHeading"
						class="uppercase text-tertiary md:font-subheading md:text-subheading font-subheading_mobile text-subheading_mobile">
						<?php echo get_field( 'blogs_heading', 13 ); ?>
					</h2>
					<?php echo the_field( 'blogs_title', 13 ); ?>
				</section>
				<h3 id="blogsHeading3"
					class="md:font-normal text-secondary md:text-heading3 font-subtitle_mobile text-subtitle_mobile">
					<?php echo get_field( 'blogs_subheading', 13 ); ?>
				</h3>
			</section>

            <section class="grid grid-cols-1 lg:grid-cols-2 gap-[60px] lg:gap-[20px] xl:gap-[20px] 2xl:gap-[20px]"
                id="blogsContent">
                <?php
          if($wp_query->have_posts()) {
            while($wp_query->have_posts()) {
              $wp_query->the_post();
        ?>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                    fill="none">
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
          }

				wp_reset_postdata();
				?>
			</section>
			<div id="blogsButton">
				<a href="/blog"
					class="bg-cta-400 hover:bg-cta-default active:bg-cta-800 rounded-[60px] py-[16px] px-[32px] text-primary-dark font-button">
					<?php echo get_field( 'blogs_button', 13 ); ?>
				</a>
			</div>
		</section>
	</div>
</div>
