	<!-- Introduction section -->
	<div class="container flex items-center justify-center w-full m-auto overflow-x-hidden">
		<div class="2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] w-[327px]">
			<section id="introSection"
				class="2xl:mb-[320px] xl:mb-[200px] lg:mb-[140px] md:mb-[120px] mb-[80px] flex lg:flex-row flex-col gap-[40px] xl:gap-[108px] 2xl:[gap-112px] lg:gap-[88px] md:items-center">
				<figure style="background-image: url(<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'hero_image' ) ), 'large', false ); ?>)"
					class=" bg-[#F1E4B8] xl:w-[348px] xl:h-[426px] lg:h-[338px] lg:w-[343px] w-[149px] h-[138px] flex-shrink-0 bg-cover bg-no-repeat rounded-lg"
					id="introLeft"></figure>

				<div class="md:w-[600px] w-full flex flex-col gap-[20px] md:text-center lg:text-left" id="introRight">
					<div class="relative inline-flex flex-col gap-2 xl:items-start" id="introIntroduction">
						<h2 class="uppercase text-tertiary font-subheading text-subheading">
							<?php echo get_field( 'intro_heading' ); ?>

						</h2>
						<?php echo the_field( 'intro_title' ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="112" height="98" viewBox="0 0 112 98" fill="none"
							class="absolute bottom-[-80px] right-[110px] hidden xl:block">
							<g clip-path="url(#clip0_950_8725)">
								<path
									d="M48.3568 64.4689C47.3379 64.4782 46.303 64.4663 45.2813 64.4353C44.3161 64.4045 43.5159 65.1575 43.491 66.116C43.4661 67.0745 44.2287 67.8757 45.1946 67.905C46.2643 67.9382 47.3463 67.9502 48.4122 67.9409C49.1419 67.9342 49.7597 67.4837 50.0114 66.8504C50.0927 66.6458 50.1363 66.4224 50.1311 66.189C50.1167 65.2298 49.3208 64.4601 48.3568 64.4689Z"
									fill="#7A7A7A" />
								<path
									d="M64.9168 62.4514C63.9799 62.6762 63.4096 63.6139 63.6419 64.5459C63.8743 65.4778 64.8214 66.052 65.7589 65.8255C66.794 65.5763 67.8403 65.3036 68.866 65.0115C69.4053 64.8582 69.8105 64.4688 70.002 63.987C70.139 63.6421 70.1667 63.2501 70.0523 62.8651C69.7801 61.9434 68.8098 61.4085 67.8836 61.673C66.9028 61.9513 65.9058 62.2138 64.9168 62.4514Z"
									fill="#7A7A7A" />
								<path
									d="M55.1746 64.0994C54.2153 64.1959 53.5195 65.0464 53.6238 66.0021C53.7271 66.9555 54.5879 67.6521 55.5494 67.5547C56.6122 67.449 57.6869 67.3181 58.7433 67.1669C59.3839 67.0763 59.8902 66.6505 60.1118 66.093C60.2206 65.819 60.2608 65.5141 60.2133 65.2023C60.0705 64.2536 59.18 63.5938 58.2258 63.7296C57.2174 63.8737 56.1923 63.9982 55.1785 64.0991L55.1746 64.0994Z"
									fill="#7A7A7A" />
								<path
									d="M38.4644 63.9208C37.4487 63.7989 36.4231 63.6545 35.4157 63.493C34.4615 63.3396 33.5681 63.981 33.4192 64.9294C33.2708 65.8761 33.924 66.7682 34.8782 66.9216C35.9318 67.0902 37.0035 67.2418 38.066 67.3692C38.8692 67.4663 39.6084 67.0044 39.8914 66.2921C39.9459 66.1551 39.9837 66.0078 40.0013 65.8544C40.1123 64.9021 39.4239 64.0371 38.4638 63.9224L38.4644 63.9208Z"
									fill="#7A7A7A" />
								<path
									d="M29.9918 64.2224C30.2233 63.2938 29.6533 62.3489 28.7158 62.1108C27.7247 61.8606 26.726 61.5869 25.7448 61.2978C24.8175 61.0245 23.8485 61.5481 23.5777 62.4667C23.3085 63.386 23.8413 64.3534 24.7685 64.6267C25.7934 64.9294 26.8395 65.2164 27.8738 65.4762C28.7349 65.6934 29.6033 65.238 29.9196 64.4419C29.9478 64.371 29.9711 64.2982 29.9901 64.2218L29.9918 64.2224Z"
									fill="#7A7A7A" />
								<path
									d="M101.39 41.6755C100.685 42.4013 99.9524 43.1215 99.2149 43.821C98.5177 44.4807 98.4952 45.5801 99.1645 46.2751C99.8331 46.9718 100.94 47.0013 101.636 46.341C102.408 45.6105 103.174 44.8548 103.912 44.0959C104.074 43.9291 104.196 43.7367 104.277 43.5321C104.529 42.8988 104.387 42.1465 103.861 41.6408C103.165 40.9721 102.058 40.9878 101.39 41.6755Z"
									fill="#7A7A7A" />
								<path
									d="M107.75 34.1869C107.15 34.9992 106.525 35.8104 105.886 36.6016C105.285 37.3478 105.41 38.4405 106.165 39.0428C106.92 39.6451 108.02 39.5278 108.621 38.7817C109.289 37.9538 109.946 37.101 110.574 36.2514C110.664 36.1286 110.736 35.9988 110.79 35.865C111.074 35.1495 110.849 34.3027 110.192 33.8233C109.413 33.2542 108.318 33.4163 107.75 34.1869Z"
									fill="#7A7A7A" />
								<path
									d="M94.0771 48.2614C93.2791 48.8903 92.4584 49.5102 91.6372 50.1075C90.8593 50.6716 90.6936 51.757 91.2665 52.5333C91.8395 53.3095 92.9334 53.4811 93.7113 52.917C94.571 52.2939 95.4282 51.6438 96.2614 50.9878C96.5084 50.793 96.6878 50.5452 96.796 50.2729C97.0176 49.7153 96.9406 49.056 96.5336 48.5491C95.9306 47.7963 94.8305 47.6689 94.0765 48.263L94.0771 48.2614Z"
									fill="#7A7A7A" />
								<path
									d="M85.9599 53.8486C85.0857 54.3708 84.1916 54.8813 83.3 55.3666C82.4547 55.8256 82.1505 56.8802 82.618 57.7228C83.0862 58.5637 84.1493 58.8742 84.9947 58.4153C85.9267 57.9087 86.8625 57.3737 87.7756 56.8297C88.1159 56.6272 88.359 56.3283 88.4941 55.9883C88.6875 55.5016 88.6571 54.9335 88.362 54.4486C87.8602 53.626 86.7859 53.3577 85.9609 53.8509L85.9599 53.8486Z"
									fill="#7A7A7A" />
								<path
									d="M74.3436 59.5117C73.4451 59.858 73.0056 60.8645 73.3608 61.7576C73.7153 62.6523 74.7315 63.0952 75.6284 62.7482C76.6208 62.3645 77.619 61.957 78.5954 61.5333C79.0325 61.3431 79.3513 60.9959 79.514 60.5866C79.6766 60.1773 79.6833 59.6911 79.4868 59.2473C79.096 58.368 78.0638 57.9653 77.1811 58.3479C76.2478 58.7532 75.2927 59.1424 74.3443 59.51L74.3436 59.5117Z"
									fill="#7A7A7A" />
								<path d="M4.14545 53.355L15.981 70.1376L24.6318 51.6567L4.14545 53.355Z"
									fill="#7A7A7A" />
							</g>
							<defs>
								<clipPath id="clip0_950_8725">
									<rect width="68.5948" height="92.6476" fill="white"
										transform="translate(0 63.7874) rotate(-68.3289)" />
								</clipPath>
							</defs>
						</svg>
					</div>

					<h3 class="hidden font-normal text-secondary text-heading3 xl:block" id="introQuestion">
						<?php echo get_field( 'intro_subheading' ); ?>

					</h3>

					<article class="flex flex-col items-start md:gap-[20px] gap-2" id="introContent">
						<span
							class="font-normal leading-relaxed text-secondary text-normal overflow-hidden h-[104px] xl:h-[156px] text-ellipsis w-full">
							<?php echo get_field( 'intro_content', 13 ); ?>

						</span>
						<p class="font-semibold text-secondary text-normal md:text-cemter">
							<?php echo get_field( 'intro_name' ); ?>

						</p>
					</article>
					<div id="introButton">
						<a href="/about/"
							class="bg-cta-400 hover:bg-cta-default active:bg-cta-800 rounded-[60px] 2xl:py-[16px] py-[14px] px-[32px] text-primary-dark font-button">
							Read More...
						</a>
					</div>
				</div>
			</section>
		</div>
	</div>
