<?php

/*
 * Template Name: Reviews Page
 */

get_header();

$wp_query = new WP_Query(
	array(
		'post_type'      => 'reviews',
		'posts_per_page' => -1,
	)
);

$reviews_from_wp_query = new WP_Query(
	array(
		'post_type'      => 'reviews_from',
		'posts_per_page' => -1,
	)
);

$total_reviews = 0;

?>

<main class="pb-[120px]">
	<div
		class="2xl:container mt-[100px] xl:mt-[116.3px] 2xl:mt-[122px] px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
		<div class="relative">
			<svg class="hidden xl:block absolute top-[-85px] left-[620px]" xmlns="http://www.w3.org/2000/svg"
				width="172" height="151" viewBox="0 0 172 151" fill="none">
				<g clip-path="url(#clip0_578_9161)">
					<path
						d="M110.658 54.4106C111.531 54.8217 112.413 55.2512 113.281 55.6882C114.092 56.0966 115.079 55.7725 115.485 54.9647C115.857 54.2232 115.611 53.3327 114.942 52.8745C114.881 52.8327 114.817 52.7949 114.75 52.7612C113.858 52.3111 112.948 51.869 112.048 51.4452C111.226 51.0589 110.249 51.4081 109.865 52.2262C109.481 53.0453 109.835 54.022 110.658 54.4106Z"
						fill="#2D2D2D" />
					<path
						d="M83.8856 45.9365C84.8394 46.1014 85.8031 46.2809 86.7476 46.4711C87.638 46.6501 88.5013 46.0763 88.6766 45.1883C88.8082 44.5243 88.5168 43.8723 87.9901 43.5117C87.8122 43.39 87.6076 43.3015 87.3839 43.2555C86.4076 43.0594 85.4143 42.8735 84.43 42.7036C83.5348 42.5491 82.6881 43.1481 82.5382 44.0397C82.3875 44.9327 82.9913 45.7807 83.8865 45.9351L83.8856 45.9365Z"
						fill="#2D2D2D" />
					<path
						d="M93.0473 47.9498C93.9807 48.1999 94.9231 48.466 95.8498 48.7433C96.7202 49.0038 97.6342 48.5104 97.8891 47.643C98.0967 46.9438 97.8129 46.2137 97.2386 45.8206C97.1002 45.7258 96.9455 45.6517 96.7775 45.6001C95.8207 45.3142 94.847 45.0385 93.885 44.7807C93.0075 44.5451 92.1092 45.0651 91.878 45.9387C91.6458 46.8137 92.1694 47.7119 93.0469 47.9475L93.0473 47.9498Z"
						fill="#2D2D2D" />
					<path
						d="M118.982 58.7766C119.819 59.2628 120.661 59.7658 121.485 60.2744C122.26 60.751 123.269 60.5137 123.743 59.7428C124.203 58.9958 123.989 58.0216 123.269 57.529C123.247 57.5141 123.224 57.4983 123.202 57.4848C122.352 56.9607 121.485 56.4423 120.623 55.9418C119.837 55.485 118.833 55.7497 118.379 56.5323C117.925 57.3149 118.193 58.3203 118.981 58.7744L118.982 58.7766Z"
						fill="#2D2D2D" />
					<path
						d="M101.995 50.7867C102.902 51.1196 103.816 51.4699 104.717 51.8287C105.561 52.1662 106.515 51.7561 106.847 50.9158C107.135 50.19 106.867 49.3815 106.245 48.9558C106.146 48.8879 106.038 48.83 105.922 48.7842C104.993 48.4141 104.049 48.0515 103.115 47.7095C102.263 47.396 101.32 47.8322 101.01 48.6814C100.7 49.5306 101.141 50.4736 101.993 50.7871L101.995 50.7867Z"
						fill="#2D2D2D" />
					<path
						d="M141.327 75.8666C142.014 76.5457 142.704 77.2457 143.374 77.9445C144.004 78.6 145.043 78.6251 145.696 78.0006C146.35 77.3746 146.37 76.337 145.742 75.6824C145.051 74.9614 144.342 74.2416 143.634 73.5427C143.561 73.4711 143.484 73.4086 143.403 73.3528C142.759 72.9123 141.875 72.9777 141.309 73.5484C140.672 74.1901 140.679 75.2286 141.325 75.867L141.327 75.8666Z"
						fill="#2D2D2D" />
					<path
						d="M134.37 69.5454C135.113 70.1648 135.859 70.8024 136.586 71.4434C137.267 72.0446 138.306 71.9801 138.904 71.3019C139.502 70.6238 139.434 69.5871 138.752 68.9873C138.003 68.3278 137.235 67.6707 136.47 67.0319C136.429 66.9981 136.388 66.9657 136.344 66.936C135.653 66.4629 134.702 66.5819 134.158 67.2349C133.578 67.9296 133.674 68.9635 134.37 69.5454Z"
						fill="#2D2D2D" />
					<path
						d="M126.901 63.835C127.694 64.3896 128.491 64.9634 129.269 65.5396C129.997 66.0755 131.028 65.9286 131.565 65.2027C132.103 64.4755 131.947 63.448 131.216 62.9079C130.414 62.315 129.594 61.724 128.777 61.1527C128.772 61.149 128.768 61.1462 128.762 61.1425C128.02 60.6341 127.005 60.8145 126.489 61.5506C125.97 62.2909 126.152 63.3147 126.899 63.8354L126.901 63.835Z"
						fill="#2D2D2D" />
					<path
						d="M147.72 82.7492C148.348 83.4866 148.973 84.2421 149.581 84.9937C150.151 85.7015 151.185 85.8161 151.89 85.2492C152.597 84.6832 152.706 83.6504 152.136 82.9448C151.511 82.1693 150.865 81.3904 150.218 80.6318C150.121 80.5176 150.01 80.42 149.892 80.3392C149.295 79.9302 148.478 79.9502 147.902 80.439C147.212 81.0243 147.13 82.0593 147.719 82.7506L147.72 82.7492Z"
						fill="#2D2D2D" />
					<path
						d="M9.20861 58.163C9.66361 58.9487 10.6692 59.2185 11.4544 58.7678C12.2903 58.2864 13.1441 57.8112 13.9921 57.356C14.7884 56.9268 15.0841 55.9327 14.6507 55.1359C14.5218 54.8988 14.3434 54.7052 14.1343 54.5621C13.6415 54.2247 12.9832 54.1669 12.4238 54.4685C11.5492 54.9393 10.6689 55.4301 9.80586 55.9247C9.02075 56.3754 8.75497 57.3781 9.20996 58.1639L9.20861 58.163Z"
						fill="#2D2D2D" />
					<path
						d="M17.5836 53.6707C17.9676 54.4932 18.9464 54.8518 19.7672 54.4711C20.6416 54.0677 21.5346 53.669 22.4216 53.288C23.254 52.9312 23.6356 51.9661 23.2722 51.1339C23.1431 50.8391 22.9395 50.6005 22.6924 50.4314C22.2417 50.1228 21.6479 50.0437 21.1106 50.2751C20.1962 50.6671 19.2748 51.0781 18.3757 51.4944C17.5535 51.8741 17.1996 52.8482 17.5836 53.6707Z"
						fill="#2D2D2D" />
					<path
						d="M1.27468 63.3915C1.79938 64.1337 2.82418 64.3115 3.56534 63.791C4.35331 63.237 5.16085 62.6866 5.96364 62.1547C6.71825 61.6553 6.92221 60.638 6.41861 59.8825C6.29788 59.7006 6.14674 59.5515 5.97704 59.4353C5.44081 59.0682 4.71341 59.0385 4.14045 59.4182C3.31243 59.9666 2.47875 60.5348 1.66462 61.1066C0.924817 61.628 0.749985 62.6493 1.27468 63.3915Z"
						fill="#2D2D2D" />
					<path
						d="M26.3238 49.9307C26.6355 50.783 27.5779 51.2238 28.4303 50.9165C29.3381 50.5894 30.2627 50.2699 31.1798 49.9671C32.0402 49.683 32.5035 48.756 32.2151 47.8958C32.0961 47.5424 31.8693 47.2562 31.5829 47.0601C31.1729 46.7794 30.6412 46.6853 30.1346 46.8544C29.191 47.1668 28.2376 47.4964 27.3033 47.833C26.4508 48.1404 26.0125 49.0806 26.3251 49.9316L26.3238 49.9307Z"
						fill="#2D2D2D" />
					<path
						d="M35.3605 46.959C35.5986 47.8344 36.5005 48.3546 37.3764 48.1208C38.3107 47.8715 39.26 47.6324 40.1982 47.4095C41.0798 47.1994 41.6209 46.3158 41.4066 45.4348C41.3073 45.0235 41.0601 44.6856 40.7356 44.4635C40.365 44.2098 39.8931 44.1069 39.4217 44.2188C38.4552 44.4481 37.4781 44.6959 36.5154 44.9516C35.6395 45.1855 35.1224 46.0835 35.3605 46.959Z"
						fill="#2D2D2D" />
					<path
						d="M74.5764 44.7573C75.5448 44.8368 76.5194 44.9306 77.4762 45.0359C78.3787 45.1359 79.1873 44.4849 79.2825 43.5857C79.3489 42.9644 79.0572 42.3857 78.5726 42.0539C78.3554 41.9052 78.1003 41.806 77.8217 41.776C76.8373 41.6676 75.8303 41.5715 74.8319 41.4892C73.9272 41.4156 73.1367 42.0868 73.067 42.9896C72.9972 43.8924 73.6731 44.6845 74.5778 44.7582L74.5764 44.7573Z"
						fill="#2D2D2D" />
					<path
						d="M65.1992 44.3994C66.1657 44.3943 67.1453 44.4022 68.112 44.4231C69.0195 44.4431 69.7667 43.7244 69.7827 42.8185C69.7931 42.2442 69.5062 41.7343 69.0636 41.4313C68.8084 41.2565 68.5001 41.1506 68.168 41.1435C67.1717 41.1222 66.1625 41.1139 65.1664 41.1186C64.26 41.1231 63.5317 41.8608 63.5394 42.7669C63.548 43.6718 64.2901 44.4021 65.1978 44.3985L65.1992 44.3994Z"
						fill="#2D2D2D" />
					<path
						d="M55.8275 44.8485C56.7903 44.7615 57.7671 44.6861 58.731 44.6237C59.6365 44.565 60.3192 43.7862 60.2564 42.8819C60.2211 42.3597 59.9445 41.9104 59.5427 41.6353C59.2495 41.4345 58.8874 41.3255 58.5058 41.35C57.5127 41.4143 56.5067 41.4916 55.5152 41.5827C54.6117 41.6646 53.9493 42.4633 54.0363 43.3642C54.1224 44.2665 54.9254 44.9313 55.8275 44.8485Z"
						fill="#2D2D2D" />
					<path
						d="M46.5303 46.0951C47.4834 45.9261 48.4492 45.7677 49.4025 45.6247C50.2984 45.4899 50.9138 44.6551 50.7734 43.7592C50.7011 43.2911 50.438 42.9006 50.0742 42.6515C49.7416 42.4238 49.3267 42.3164 48.8972 42.3815C47.9152 42.5287 46.9197 42.6926 45.9392 42.8666C45.0468 43.0256 44.4545 43.8762 44.6177 44.7678C44.7809 45.6594 45.6356 46.2545 46.528 46.0955L46.5303 46.0951Z"
						fill="#2D2D2D" />
					<path d="M162.622 101.971L162.031 82.6806L145.594 92.7655L162.622 101.971Z" fill="#2D2D2D" />
				</g>
				<defs>
					<clipPath id="clip0_578_9161">
						<rect width="156" height="75" fill="white"
							transform="translate(129.057 151) rotate(-145.604)" />

					</clipPath>
				</defs>
			</svg>
			<p class="font-title text-title text-primary">
				We pride in having over <span class="text-brand"> 300 Reviews </span>
			</p>

			<div
				class="mt-[40px] flex gap-[40px] justify-start border-b border-surf border-solid border-grey-200 overflow-x-auto">
				<?php
							$thestartutor_reviews        = array();
							$review_of                   = array();
							$review_of                   = array(
								'all' => 'All Reviews',
								...acf_get_field( 'review_of' )['choices'],
							);
							$review_from                 = acf_get_field( 'review_from' )['choices'];
							$thestartutor_reviews['all'] = array();
							foreach ( $review_of as $key => $val ) {
								$thestartutor_reviews[ $key ] = array();
								?>
				<button
					class="reviews--tablinks text-primary pr-[10px] pb-[8px] font-normal text-normal hover:underline whitespace-nowrap"
					data-context="reviews" data-id="<?php echo $key; ?>" data-display="grid"><?php echo $val; ?></button>
								<?php
							}
							?>
			</div>
			<?php
			while ( $wp_query->have_posts() ) {
				if ( $wp_query->have_posts() ) {
					$wp_query->the_post();
					$thestartutor_reviews['all']                      = array(
						...$thestartutor_reviews['all'],
						array(
							'title' => get_the_title(),
							...get_fields(),
						),
					);
					$thestartutor_reviews[ get_field( 'review_of' ) ] = array(
						...$thestartutor_reviews[ get_field( 'review_of' ) ],
						array(
							'title' => get_the_title(),
							...get_fields(),
						),
					);
				}
			}

						wp_reset_postdata();
			?>

			<?php
			foreach ( $review_of as $key => $val ) {
				?>
			<div id="reviews-post-<?php echo $key; ?>"
				class="reviews--tabcontent max-w-[742px] mt-[28px] grid hidden grid-rows-[repeat(2, auto)] items-start lg:grid-cols-2 gap-[21px] xl:gap-y-[32px]">
				<?php
				$current_post = 0;
				if ( ! $thestartutor_reviews[ $key ] ) {
					echo 'No reviews';
				}

				foreach ( $thestartutor_reviews[ $key ] as $key_index => $val ) {
					if ( $current_post == 0 ) {
						?>
				<div id="review-content-<?php echo $key . '-' . $key_index; ?>"
					class="lg:col-span-2 flex flex-col border border-solid border-grey-200 bg-grey-100 rounded-lg px-[24px] py-[16px] item-start gap-[16px]">
					<div class="space-y-[8px]">
						<div class="flex items-center justify-between">
							<p class="leading-relaxed text-heading3 font-heading3 text-primary">
						<?php echo $val['reviewer_name']; ?>
							</p>

							<div class="flex gap-[4px]">
						<?php
						for ( $i = 0; $i < (int) $val['stars']; $i++ ) {
							?>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>
										<?php
						}
						?>
							</div>
						</div>
						<div
							class="flex items-center justify-between w-full text-captionBig font-captionBig text-secondary mt-[8px]">

							<p><?php echo DateTime::createFromFormat( 'm/d/Y', $val['date_posted'] )->format( 'M d, Y' ); ?>
							</p>
							<p>(Review on <?php echo $review_from[ $val['review_from'] ]; ?>)</p>
						</div>
					</div>

					<div class="flex flex-col gap-2">
						<div class="self-stretch space-y-2 font-normal leading-relaxed text-normal text-secondary">
							<div class="font-normal line-clamp-3 review-content-body text-normal">
								<?php echo $val['review']; ?>
							</div>
							<button class="font-semibold review-content-toggler text-secondary" data-status="less" data-context="review-content" data-id="<?php echo $key; ?>-<?php echo $key_index; ?>">See More...</button>
						</div>
					</div>
				</div>
						<?php
						$current_post += 1;
					} else {
						if ( count( $thestartutor_reviews[ $key ] ) % 2 == 0 && $current_post === count( $thestartutor_reviews[ $key ] ) - 1 ) {

							?>
				<div id="review-content-<?php echo $key . '-' . $key_index; ?>"
					class="lg:col-span-2 flex flex-col border border-solid border-grey-200 bg-grey-100 rounded-lg px-[24px] py-[16px] item-start gap-[16px]">
					<div class="space-y-[8px]">
						<div class="flex items-center justify-between">
							<p class="leading-relaxed text-heading3 font-heading3 text-primary">
							<?php echo $val['reviewer_name']; ?>
							</p>

							<div class="flex gap-[4px]">
							<?php
							for ( $i = 0; $i < (int) $val['stars']; $i++ ) {
								?>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>
									<?php
							}
							?>
							</div>
						</div>
						<div
							class="flex items-center justify-between w-full text-captionBig font-captionBig text-secondary mt-[8px]">

							<p><?php echo DateTime::createFromFormat( 'm/d/Y', $val['date_posted'] )->format( 'M d, Y' ); ?>
							</p>
							<p>(Review on <?php echo $review_from[ $val['review_from'] ]; ?>)</p>
						</div>
					</div>

					<div class="flex flex-col gap-2">
						<div class="self-stretch space-y-2 font-normal leading-relaxed text-normal text-secondary">
							<div class="font-normal line-clamp-3 review-content-body text-normal">
								<?php echo $val['review']; ?>
							</div>
							<button class="font-semibold review-content-toggler text-secondary" data-status="less" data-context="review-content" data-id="<?php echo $key; ?>-<?php echo $key_index; ?>">See More...</button>
						</div>
					</div>
				</div>

				<?php } else { ?>
				<div id="review-content-<?php echo $key . '-' . $key_index; ?>"
					class="flex flex-col border border-solid border-grey-200 bg-grey-100 rounded-lg px-[24px] py-[16px] item-start gap-[16px]">
					<div class="space-y-[8px]">
						<div class="flex items-center justify-between">
							<p class="leading-relaxed text-heading3 font-heading3 text-primary">
								<?php echo $val['reviewer_name']; ?>
							</p>

							<div class="flex gap-[4px]">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">

									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />

								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
										fill="#E4C045" />
								</svg>
							</div>
						</div>
						<div
							class="flex items-center justify-between w-full text-captionBig font-captionBig text-secondary mt-[8px]">
							<p><?php echo DateTime::createFromFormat( 'm/d/Y', $val['date_posted'] )->format( 'M d, Y' ); ?>
							</p>
							<p>(Review on <?php echo $review_from[ $val['review_from'] ]; ?>)</p>
						</div>
					</div>

					<div class="flex flex-col justify-start gap-2">
						<div class="self-stretch space-y-2 font-normal leading-relaxed text-normal text-secondary">
							<div class="font-normal line-clamp-3 review-content-body text-normal">
								<?php echo $val['review']; ?>
							</div>
							<button class="font-semibold review-content-toggler text-secondary" data-status="less" data-context="review-content" data-id="<?php echo $key; ?>-<?php echo $key_index; ?>">See More...</button>
						</div>
					</div>
				</div>
				<?php } ?>


						<?php
						$current_post += 1;
					}
				}
				?>
			</div>
				<?php
			}
			?>
		</div>
		<div>
			<div>

				<div class="mt-[96px] 2xl:mt-[37.5px] flex flex-col gap-[20px] w-[full]">
					<p class="text-subtitle font-subtitle text-primary">
						Read directly on
					</p>
					<div class="flex gap-[18px] flex-wrap">
						<?php
						if ( $reviews_from_wp_query->have_posts() ) {
							while ( $reviews_from_wp_query->have_posts() ) {
								$reviews_from_wp_query->the_post();
								?>
						<div
							class="w-[164px] p-10 flex justify-center items-center rounded-xl border border-solid border-grey-200">
							<a href="<?php echo get_field( 'review_page_url' ); ?>"><img
									src="<?php echo get_field( 'reviews_from_image' ); ?>" alt="<?php echo get_field( 'review_page_url' ); ?>" /></a>
						</div>
								<?php
							}
						}

									wp_reset_postdata();
						?>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>

<?php

get_footer();
