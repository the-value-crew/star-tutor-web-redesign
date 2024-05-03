<?php

/*
 * Template Name: About Us Page
 */

get_header();

$about_bg_img = thestartutor_get_static_img( 'about-bg.png' );

$aboutme_args     = array(
	'post_type' => 'about_me_content',
	'order_by'  => 'id',
	'order'     => 'ASC',
);
$aboutme_wp_query = new WP_Query( $aboutme_args );

$myhobby_args     = array(
	'post_type' => 'hobbies',
	'order_by'  => 'id',
	'order'     => 'ASC',
);
$myhobby_wp_query = new WP_Query( $myhobby_args );

?>

<main>
	<section
		style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.00) 66.62%), linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $about_bg_img; ?>'), lightgray 50% / cover no-repeat; background-position: center; background-size: cover;">
		<div
			class="2xl:container p-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] flex flex-col justify-center h-[350px] text-title font-title">
			<div class="text-primary-dark">
				<p class="text-title font-title">Learn <span class="text-brand-invert">about</span></p>
				<p class="text-title font-title">The Star Tutor</p>
			</div>
		</div>
	</section>


	<section class="2xl:container  flex flex-col items-start py-[120px] p-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
			<div class="w-full relative">
				<svg class="hidden xl:block absolute top-[-70px] left-[260px]" xmlns="http://www.w3.org/2000/svg"
					width="174" height="128" viewBox="0 0 174 128" fill="none">
					<g clip-path="url(#clip0_578_9261)">

						<path
							d="M106.502 37.4327C107.444 37.6402 108.4 37.8635 109.342 38.0975C110.223 38.3161 111.115 37.7813 111.331 36.9037C111.53 36.0982 111.093 35.2843 110.339 34.9857C110.27 34.9585 110.199 34.9358 110.127 34.9177C109.157 34.6765 108.172 34.4468 107.2 34.233C106.313 34.0385 105.438 34.5954 105.244 35.4785C105.052 36.3621 105.613 37.2361 106.502 37.4327Z"
							fill="#2D2D2D" />
						<path
							d="M78.5158 35.0991C79.4825 35.0485 80.462 35.0101 81.4252 34.9863C82.3331 34.9636 83.0479 34.2128 83.0221 33.308C83.0033 32.6313 82.5747 32.0602 81.9811 31.8252C81.7807 31.7459 81.5616 31.7049 81.3333 31.7096C80.3377 31.7347 79.328 31.7735 78.3305 31.8259C77.4233 31.8736 76.7303 32.6453 76.7818 33.548C76.8326 34.4521 77.6093 35.1453 78.5164 35.0976L78.5158 35.0991Z"
							fill="#2D2D2D" />
						<path
							d="M87.8961 35.0324C88.8617 35.0695 89.8396 35.1203 90.8048 35.1853C91.7113 35.2465 92.4933 34.5629 92.5496 33.6606C92.5971 32.9327 92.1586 32.2837 91.5115 32.0276C91.3555 31.9658 91.1883 31.9278 91.013 31.9147C90.0167 31.8479 89.0061 31.7948 88.0109 31.7566C87.103 31.7212 86.3422 32.4273 86.3103 33.3304C86.2778 34.2351 86.9873 34.995 87.8952 35.0303L87.8961 35.0324Z"
							fill="#2D2D2D" />
						<path
							d="M115.585 39.8412C116.509 40.1297 117.442 40.4336 118.358 40.7471C119.219 41.0402 120.151 40.5851 120.442 39.7283C120.725 38.8981 120.3 37.9955 119.489 37.6746C119.465 37.6649 119.439 37.6546 119.414 37.6465C118.469 37.3236 117.509 37.0103 116.557 36.713C115.69 36.4418 114.769 36.9225 114.499 37.7862C114.23 38.6499 114.715 39.5709 115.584 39.8391L115.585 39.8412Z"
							fill="#2D2D2D" />

						<path
							d="M97.2491 35.8183C98.2069 35.9421 99.1764 36.0811 100.134 36.2314C101.032 36.3736 101.872 35.7622 102.01 34.8692C102.129 34.0977 101.689 33.3686 100.988 33.0913C100.876 33.0471 100.758 33.0145 100.635 32.9955C99.6471 32.8405 98.6461 32.6961 97.6593 32.5696C96.7589 32.4527 95.9363 33.0868 95.8219 33.9837C95.7076 34.8806 96.3466 35.7023 97.247 35.8193L97.2491 35.8183Z"
							fill="#2D2D2D" />
						<path
							d="M141.16 51.5553C141.981 52.0652 142.808 52.5951 143.616 53.1281C144.376 53.6278 145.395 53.4219 145.893 52.6682C146.392 51.913 146.182 50.8966 145.424 50.3976C144.591 49.8475 143.74 49.3027 142.895 48.778C142.808 48.7243 142.719 48.6804 142.627 48.6441C141.902 48.357 141.055 48.6167 140.629 49.2987C140.15 50.0655 140.387 51.0767 141.158 51.5562L141.16 51.5553Z"
							fill="#2D2D2D" />
						<path
							d="M132.975 46.9337C133.837 47.3732 134.705 47.8297 135.557 48.2936C136.354 48.7289 137.353 48.4358 137.786 47.6421C138.218 46.8483 137.923 45.8525 137.125 45.4186C136.248 44.9414 135.353 44.4709 134.466 44.0175C134.419 43.9935 134.371 43.9711 134.322 43.9517C133.543 43.6435 132.643 43.9702 132.256 44.7277C131.845 45.5335 132.167 46.5205 132.975 46.9337Z"
							fill="#2D2D2D" />
						<path
							d="M124.429 43.0228C125.325 43.388 126.229 43.7708 127.116 44.1604C127.944 44.5218 128.918 44.1499 129.28 43.3231C129.644 42.4948 129.264 41.5274 128.432 41.1627C127.518 40.7622 126.588 40.3676 125.664 39.9915C125.658 39.9891 125.653 39.9873 125.647 39.9848C124.811 39.6536 123.861 40.0543 123.521 40.8865C123.179 41.7233 123.584 42.6812 124.427 43.0237L124.429 43.0228Z"
							fill="#2D2D2D" />

						<path
							d="M148.92 56.854C149.695 57.4339 150.472 58.0321 151.232 58.6303C151.945 59.1942 152.978 59.0769 153.54 58.3678C154.104 57.6593 153.981 56.6281 153.27 56.0663C152.488 55.4487 151.686 54.832 150.887 54.2357C150.767 54.1458 150.637 54.0752 150.504 54.0225C149.831 53.7561 149.039 53.9566 148.585 54.5608C148.042 55.2845 148.191 56.312 148.919 56.8555L148.92 56.854Z"
							fill="#2D2D2D" />
						<path
							d="M8.40378 63.5684C9.02156 64.2338 10.062 64.2741 10.7277 63.6606C11.4363 63.006 12.1635 62.3535 12.8896 61.7216C13.571 61.1267 13.6392 60.0918 13.0399 59.4108C12.8618 59.2082 12.6448 59.0589 12.4093 58.9657C11.854 58.7459 11.1992 58.8354 10.7205 59.2534C9.97197 59.9063 9.22227 60.5799 8.49029 61.2534C7.82455 61.8669 7.78753 62.9036 8.4053 63.569L8.40378 63.5684Z"
							fill="#2D2D2D" />

						<path
							d="M15.5737 57.3307C16.1304 58.0476 17.1642 58.1804 17.8804 57.6274C18.6436 57.0402 19.4262 56.4536 20.2066 55.8856C20.9393 55.3532 21.0976 54.3275 20.5589 53.5965C20.3676 53.3377 20.1163 53.1501 19.8379 53.0399C19.33 52.8389 18.7334 52.8933 18.2607 53.238C17.4559 53.8228 16.6485 54.4278 15.8639 55.0329C15.1463 55.5853 15.017 56.6137 15.5737 57.3307Z"
							fill="#2D2D2D" />
						<path
							d="M1.82594 70.423C2.50203 71.0306 3.54074 70.9768 4.14816 70.305C4.79383 69.5903 5.45934 68.8746 6.12434 68.1781C6.74956 67.5239 6.72307 66.4868 6.06459 65.8616C5.90657 65.711 5.72615 65.599 5.53493 65.5233C4.93068 65.2842 4.2148 65.4164 3.74019 65.9135C3.05423 66.6317 2.36717 67.3706 1.69995 68.1085C1.09405 68.7808 1.14984 69.8155 1.82594 70.423Z"
							fill="#2D2D2D" />
						<path
							d="M23.2697 51.7456C23.7625 52.5077 24.7791 52.7288 25.5423 52.2402C26.3551 51.7201 27.1859 51.2037 28.0131 50.7052C28.7892 50.2376 29.0355 49.2309 28.5637 48.456C28.3694 48.1378 28.0849 47.909 27.7621 47.7812C27.3001 47.5983 26.7608 47.6243 26.3043 47.9015C25.4533 48.4152 24.5966 48.9478 23.7601 49.4831C22.9969 49.9717 22.7778 50.9856 23.2712 51.7462L23.2697 51.7456Z"
							fill="#2D2D2D" />
						<path
							d="M31.4232 46.845C31.8493 47.6459 32.8441 47.9534 33.6464 47.5314C34.5023 47.0812 35.375 46.6377 36.2405 46.2125C37.0536 45.8124 37.3855 44.8308 36.9813 44.0192C36.7934 43.6402 36.4775 43.3654 36.1119 43.2207C35.6943 43.0554 35.2113 43.0597 34.7764 43.2732C33.8847 43.7109 32.9868 44.1691 32.1047 44.6317C31.3024 45.0538 30.9971 46.0441 31.4232 46.845Z"
							fill="#2D2D2D" />
						<path
							d="M69.176 36.0127C70.1379 35.8757 71.1091 35.7512 72.0654 35.642C72.9677 35.5395 73.6119 34.7256 73.5055 33.8276C73.4327 33.2071 73.02 32.7074 72.4739 32.4912C72.2291 32.3943 71.9584 32.3541 71.6802 32.3865C70.6961 32.4989 69.6929 32.6283 68.7011 32.7693C67.8026 32.8979 67.1804 33.7276 67.3124 34.6234C67.4444 35.5192 68.279 36.1419 69.1775 36.0133L69.176 36.0127Z"
							fill="#2D2D2D" />
						<path
							d="M59.9535 37.7368C60.8949 37.5177 61.8519 37.3083 62.7992 37.1145C63.6885 36.933 64.258 36.0665 64.0729 35.1797C63.9558 34.6173 63.563 34.1836 63.0643 33.9862C62.7767 33.8724 62.4526 33.8374 62.1272 33.904C61.1509 34.104 60.1649 34.3195 59.1946 34.5447C58.3118 34.75 57.765 35.6307 57.9732 36.5126C58.1821 37.393 59.0676 37.9408 59.952 37.7362L59.9535 37.7368Z"
							fill="#2D2D2D" />

						<path
							d="M50.9148 40.2541C51.8343 39.9559 52.7702 39.666 53.6963 39.3916C54.5663 39.1337 55.0595 38.223 54.7979 37.3552C54.6478 36.8537 54.2785 36.4769 53.8257 36.2976C53.4953 36.1668 53.1181 36.1408 52.7514 36.2492C51.7972 36.5319 50.8334 36.8301 49.8867 37.1386C49.0238 37.4187 48.5548 38.3443 48.8392 39.2035C49.1231 40.0644 50.0534 40.5348 50.9148 40.2541Z"
							fill="#2D2D2D" />

						<path
							d="M42.1233 43.5273C43.0153 43.1514 43.922 42.783 44.82 42.4322C45.6637 42.1023 46.0788 41.1519 45.7434 40.3094C45.5692 39.8689 45.2262 39.5465 44.8162 39.3842C44.4415 39.2358 44.013 39.2229 43.6087 39.3816C42.6837 39.7428 41.7492 40.1231 40.8317 40.5101C39.9966 40.8628 39.6075 41.8235 39.9642 42.6568C40.3209 43.4901 41.2862 43.881 42.1212 43.5282L42.1233 43.5273Z"
							fill="#2D2D2D" />
						<path d="M167.712 72.2979L162.861 53.6182L149.067 67.0941L167.712 72.2979Z" fill="#2D2D2D" />
					</g>
					<defs>
						<clipPath id="clip0_578_9261">
							<rect width="156" height="75" fill="white"
								transform="translate(145.842 127.543) rotate(-158.404)" />
						</clipPath>
					</defs>
				</svg>
				<p class="text-title font-title mb-[28px]">Who is <span class="text-brand">The Star Tutor?</span></p>
				<div class="flex gap-[40px] border-b-[1px] py-3 overflow-x-auto">
					<?php
					if ( $aboutme_wp_query->have_posts() ) {
						while ( $aboutme_wp_query->have_posts() ) {
								$aboutme_wp_query->the_post();
							?>
					<button
						class="aboutme--tablinks pb-[8px] pr-[10px] border-brand-default whitespace-nowrap hover:underline"
						onclick="openTabContent(event, 'aboutme', '<?php the_ID(); ?>', 'block')"><?php echo the_field( 'short_title' ); ?></button>
							<?php
						}
					}

							wp_reset_postdata();
					?>
				</div>
			</div>
			<?php
			if ( $aboutme_wp_query->have_posts() ) {
				while ( $aboutme_wp_query->have_posts() ) {
						$aboutme_wp_query->the_post();
					?>
			<div id="aboutme-post-<?php the_ID(); ?>" class="aboutme--tabcontent hidden mt-[60px]">
				<h2 class="text-heading2 font-heading2"><?php the_title(); ?></h2>
				<p class="lg:max-w-[720px] xl:max-w-none mt-[12px] leading-[25.6px]">
					<?php the_field( 'content' ); ?>
				</p>
			</div>
					<?php
				}
			}

					wp_reset_postdata();
			?>

	</section>

	<section class="2xl:container flex flex-col items-start py-[120px] p-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
			<div class="w-full relative">
				<svg class="hidden xl:block absolute top-[-70px] left-[35px]" xmlns="http://www.w3.org/2000/svg"
					width="174" height="128" viewBox="0 0 174 128" fill="none">
					<g clip-path="url(#clip0_578_9261)">
						<path
							d="M106.502 37.4327C107.444 37.6402 108.4 37.8635 109.342 38.0975C110.223 38.3161 111.115 37.7813 111.331 36.9037C111.53 36.0982 111.093 35.2843 110.339 34.9857C110.27 34.9585 110.199 34.9358 110.127 34.9177C109.157 34.6765 108.172 34.4468 107.2 34.233C106.313 34.0385 105.438 34.5954 105.244 35.4785C105.052 36.3621 105.613 37.2361 106.502 37.4327Z"
							fill="#2D2D2D" />
						<path
							d="M78.5158 35.0991C79.4825 35.0485 80.462 35.0101 81.4252 34.9863C82.3331 34.9636 83.0479 34.2128 83.0221 33.308C83.0033 32.6313 82.5747 32.0602 81.9811 31.8252C81.7807 31.7459 81.5616 31.7049 81.3333 31.7096C80.3377 31.7347 79.328 31.7735 78.3305 31.8259C77.4233 31.8736 76.7303 32.6453 76.7818 33.548C76.8326 34.4521 77.6093 35.1453 78.5164 35.0976L78.5158 35.0991Z"
							fill="#2D2D2D" />
						<path
							d="M87.8961 35.0324C88.8617 35.0695 89.8396 35.1203 90.8048 35.1853C91.7113 35.2465 92.4933 34.5629 92.5496 33.6606C92.5971 32.9327 92.1586 32.2837 91.5115 32.0276C91.3555 31.9658 91.1883 31.9278 91.013 31.9147C90.0167 31.8479 89.0061 31.7948 88.0109 31.7566C87.103 31.7212 86.3422 32.4273 86.3103 33.3304C86.2778 34.2351 86.9873 34.995 87.8952 35.0303L87.8961 35.0324Z"
							fill="#2D2D2D" />
						<path
							d="M115.585 39.8412C116.509 40.1297 117.442 40.4336 118.358 40.7471C119.219 41.0402 120.151 40.5851 120.442 39.7283C120.725 38.8981 120.3 37.9955 119.489 37.6746C119.465 37.6649 119.439 37.6546 119.414 37.6465C118.469 37.3236 117.509 37.0103 116.557 36.713C115.69 36.4418 114.769 36.9225 114.499 37.7862C114.23 38.6499 114.715 39.5709 115.584 39.8391L115.585 39.8412Z"
							fill="#2D2D2D" />
						<path
							d="M97.2491 35.8183C98.2069 35.9421 99.1764 36.0811 100.134 36.2314C101.032 36.3736 101.872 35.7622 102.01 34.8692C102.129 34.0977 101.689 33.3686 100.988 33.0913C100.876 33.0471 100.758 33.0145 100.635 32.9955C99.6471 32.8405 98.6461 32.6961 97.6593 32.5696C96.7589 32.4527 95.9363 33.0868 95.8219 33.9837C95.7076 34.8806 96.3466 35.7023 97.247 35.8193L97.2491 35.8183Z"
							fill="#2D2D2D" />
						<path
							d="M141.16 51.5553C141.981 52.0652 142.808 52.5951 143.616 53.1281C144.376 53.6278 145.395 53.4219 145.893 52.6682C146.392 51.913 146.182 50.8966 145.424 50.3976C144.591 49.8475 143.74 49.3027 142.895 48.778C142.808 48.7243 142.719 48.6804 142.627 48.6441C141.902 48.357 141.055 48.6167 140.629 49.2987C140.15 50.0655 140.387 51.0767 141.158 51.5562L141.16 51.5553Z"
							fill="#2D2D2D" />
						<path
							d="M132.975 46.9337C133.837 47.3732 134.705 47.8297 135.557 48.2936C136.354 48.7289 137.353 48.4358 137.786 47.6421C138.218 46.8483 137.923 45.8525 137.125 45.4186C136.248 44.9414 135.353 44.4709 134.466 44.0175C134.419 43.9935 134.371 43.9711 134.322 43.9517C133.543 43.6435 132.643 43.9702 132.256 44.7277C131.845 45.5335 132.167 46.5205 132.975 46.9337Z"
							fill="#2D2D2D" />

						<path
							d="M124.429 43.0228C125.325 43.388 126.229 43.7708 127.116 44.1604C127.944 44.5218 128.918 44.1499 129.28 43.3231C129.644 42.4948 129.264 41.5274 128.432 41.1627C127.518 40.7622 126.588 40.3676 125.664 39.9915C125.658 39.9891 125.653 39.9873 125.647 39.9848C124.811 39.6536 123.861 40.0543 123.521 40.8865C123.179 41.7233 123.584 42.6812 124.427 43.0237L124.429 43.0228Z"
							fill="#2D2D2D" />
						<path
							d="M148.92 56.854C149.695 57.4339 150.472 58.0321 151.232 58.6303C151.945 59.1942 152.978 59.0769 153.54 58.3678C154.104 57.6593 153.981 56.6281 153.27 56.0663C152.488 55.4487 151.686 54.832 150.887 54.2357C150.767 54.1458 150.637 54.0752 150.504 54.0225C149.831 53.7561 149.039 53.9566 148.585 54.5608C148.042 55.2845 148.191 56.312 148.919 56.8555L148.92 56.854Z"
							fill="#2D2D2D" />
						<path
							d="M8.40378 63.5684C9.02156 64.2338 10.062 64.2741 10.7277 63.6606C11.4363 63.006 12.1635 62.3535 12.8896 61.7216C13.571 61.1267 13.6392 60.0918 13.0399 59.4108C12.8618 59.2082 12.6448 59.0589 12.4093 58.9657C11.854 58.7459 11.1992 58.8354 10.7205 59.2534C9.97197 59.9063 9.22227 60.5799 8.49029 61.2534C7.82455 61.8669 7.78753 62.9036 8.4053 63.569L8.40378 63.5684Z"
							fill="#2D2D2D" />
						<path
							d="M15.5737 57.3307C16.1304 58.0476 17.1642 58.1804 17.8804 57.6274C18.6436 57.0402 19.4262 56.4536 20.2066 55.8856C20.9393 55.3532 21.0976 54.3275 20.5589 53.5965C20.3676 53.3377 20.1163 53.1501 19.8379 53.0399C19.33 52.8389 18.7334 52.8933 18.2607 53.238C17.4559 53.8228 16.6485 54.4278 15.8639 55.0329C15.1463 55.5853 15.017 56.6137 15.5737 57.3307Z"
							fill="#2D2D2D" />
						<path
							d="M1.82594 70.423C2.50203 71.0306 3.54074 70.9768 4.14816 70.305C4.79383 69.5903 5.45934 68.8746 6.12434 68.1781C6.74956 67.5239 6.72307 66.4868 6.06459 65.8616C5.90657 65.711 5.72615 65.599 5.53493 65.5233C4.93068 65.2842 4.2148 65.4164 3.74019 65.9135C3.05423 66.6317 2.36717 67.3706 1.69995 68.1085C1.09405 68.7808 1.14984 69.8155 1.82594 70.423Z"
							fill="#2D2D2D" />
						<path
							d="M23.2697 51.7456C23.7625 52.5077 24.7791 52.7288 25.5423 52.2402C26.3551 51.7201 27.1859 51.2037 28.0131 50.7052C28.7892 50.2376 29.0355 49.2309 28.5637 48.456C28.3694 48.1378 28.0849 47.909 27.7621 47.7812C27.3001 47.5983 26.7608 47.6243 26.3043 47.9015C25.4533 48.4152 24.5966 48.9478 23.7601 49.4831C22.9969 49.9717 22.7778 50.9856 23.2712 51.7462L23.2697 51.7456Z"
							fill="#2D2D2D" />
						<path
							d="M31.4232 46.845C31.8493 47.6459 32.8441 47.9534 33.6464 47.5314C34.5023 47.0812 35.375 46.6377 36.2405 46.2125C37.0536 45.8124 37.3855 44.8308 36.9813 44.0192C36.7934 43.6402 36.4775 43.3654 36.1119 43.2207C35.6943 43.0554 35.2113 43.0597 34.7764 43.2732C33.8847 43.7109 32.9868 44.1691 32.1047 44.6317C31.3024 45.0538 30.9971 46.0441 31.4232 46.845Z"
							fill="#2D2D2D" />
						<path
							d="M69.176 36.0127C70.1379 35.8757 71.1091 35.7512 72.0654 35.642C72.9677 35.5395 73.6119 34.7256 73.5055 33.8276C73.4327 33.2071 73.02 32.7074 72.4739 32.4912C72.2291 32.3943 71.9584 32.3541 71.6802 32.3865C70.6961 32.4989 69.6929 32.6283 68.7011 32.7693C67.8026 32.8979 67.1804 33.7276 67.3124 34.6234C67.4444 35.5192 68.279 36.1419 69.1775 36.0133L69.176 36.0127Z"
							fill="#2D2D2D" />

						<path
							d="M59.9535 37.7368C60.8949 37.5177 61.8519 37.3083 62.7992 37.1145C63.6885 36.933 64.258 36.0665 64.0729 35.1797C63.9558 34.6173 63.563 34.1836 63.0643 33.9862C62.7767 33.8724 62.4526 33.8374 62.1272 33.904C61.1509 34.104 60.1649 34.3195 59.1946 34.5447C58.3118 34.75 57.765 35.6307 57.9732 36.5126C58.1821 37.393 59.0676 37.9408 59.952 37.7362L59.9535 37.7368Z"
							fill="#2D2D2D" />
						<path
							d="M50.9148 40.2541C51.8343 39.9559 52.7702 39.666 53.6963 39.3916C54.5663 39.1337 55.0595 38.223 54.7979 37.3552C54.6478 36.8537 54.2785 36.4769 53.8257 36.2976C53.4953 36.1668 53.1181 36.1408 52.7514 36.2492C51.7972 36.5319 50.8334 36.8301 49.8867 37.1386C49.0238 37.4187 48.5548 38.3443 48.8392 39.2035C49.1231 40.0644 50.0534 40.5348 50.9148 40.2541Z"
							fill="#2D2D2D" />
						<path
							d="M42.1233 43.5273C43.0153 43.1514 43.922 42.783 44.82 42.4322C45.6637 42.1023 46.0788 41.1519 45.7434 40.3094C45.5692 39.8689 45.2262 39.5465 44.8162 39.3842C44.4415 39.2358 44.013 39.2229 43.6087 39.3816C42.6837 39.7428 41.7492 40.1231 40.8317 40.5101C39.9966 40.8628 39.6075 41.8235 39.9642 42.6568C40.3209 43.4901 41.2862 43.881 42.1212 43.5282L42.1233 43.5273Z"
							fill="#2D2D2D" />
						<path d="M167.712 72.2979L162.861 53.6182L149.067 67.0941L167.712 72.2979Z" fill="#2D2D2D" />
					</g>
					<defs>
						<clipPath id="clip0_578_9261">

							<rect width="156" height="75" fill="white"
								transform="translate(145.842 127.543) rotate(-158.404)" />
						</clipPath>

					</defs>
				</svg>
				<p class="text-title font-title mb-[28px]"><span class="text-brand">Other Hobbies</span> outside of work
				</p>

				<div class="flex gap-[40px] border-b-[1px] py-3 overflow-x-auto">
					<?php
					if ( $myhobby_wp_query->have_posts() ) {
						while ( $myhobby_wp_query->have_posts() ) {
							$myhobby_wp_query->the_post();
							?>
					<button class="myhobby--tablinks pb-[8px] pr-[10px] whitespace-nowrap hover:underline"
						onclick="openTabContent(event, 'myhobby', '<?php the_ID(); ?>', 'block')"><?php the_title(); ?></button>
							<?php
						}
					}

						wp_reset_postdata();
					?>
				</div>


				<?php
				if ( $myhobby_wp_query->have_posts() ) {
					while ( $myhobby_wp_query->have_posts() ) {
						$myhobby_wp_query->the_post();
						?>
			<div id="myhobby-post-<?php the_ID(); ?>" class="myhobby--tabcontent hidden mt-[60px]">
				<h2 class="text-heading2 font-heading2"><?php the_title(); ?></h2>
				<p class="lg:max-w-[720px] xl:max-w-none mt-[12px] leading-[25.6px]">
						<?php the_content(); ?>
				</p>
						<?php
						if ( get_the_post_thumbnail_url() ) {
							?>
				<div class="mt-[40px]"
				style="height: 348px; border-radius: 12px; background-image: url('<?php the_post_thumbnail_url(); ?>'); background-position: center; background-size: cover;">
			</div>
							<?php
						}
						?>
			</div>
						<?php
					}
				}

				wp_reset_postdata();
				?>

</div>
</section>
</main>

<?php

get_footer();
