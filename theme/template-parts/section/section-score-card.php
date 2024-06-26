<!-- Score card -->
<div class="relative 2xl:mb-[320px] xl:mb-[200px] lg:mb-[140px] md:mb-[120px] mb-[80px]">
	<div class="bg-heroSectionGradient h-[50%] w-screen absolute top-[-90px] md:top-[-55px] lg:top-0 z-[-10]"></div>

	<div id="scoreCardContainer" class="py-[50px] w-full overflow-hidden hidden md:block scoreCardSectionUp">
		<div class="flex items-center swiper-wrapper width-0">
			<div class="swiper-slide xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
				<div class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
					<img class="w-full rounded-2xl" src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'scores' ) ), 'large', false ); ?>" alt="Scores" />
				</div>
			</div>
			<div class="swiper-slide xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
				<div class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
					<div class="w-full h-full group [perspective:1000px]">
						<div class="w-full h-full relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
							<img class="absolute inset-0 object-fill w-full rounded-2xl" src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'score_card' ) ), 'large', false ); ?>" alt="Score Card" />
							<div class="w-full h-full bg-[#1D222B] flex justify-center items-center text-invert absolute inset-0 [transform:rotateY(180deg)] [backface-visibility:hidden]">
								<div class="flex flex-col gap-[47px] w-[70%] xl:w-[60%]">
									<div class="flex flex-col">
										<h2 class="lg:text-heading2 text-mobileHeading2">
											680 to 770 GMAT score
										</h2>
										<p class="uppercase lg:text-subheading text-subheading_mobile">
											Calvin
										</p>
									</div>
									<div class="text-invert lg:text-subtitle text-subtitle_mobile">
										Calvin scored a 770 on the GMAT on his first attempt, but before
										meeting with Tara B, he was at 680 on a GMATPrep practice test.
										Follwing this excellent score, Calvin was admitted to Harvard
										Business School. “I worked with Tara for several weeks this past
										spring on GMAT math, which culminated in a 770 GMAT score (99th
										percentile: 49Q / 45V). I'm writing this review because I am
										pleased with my score, and believe that Tara is directly
										responsible for the good results…
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
				<div class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
					<img class="w-full rounded-2xl" src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'scores' ) ), 'large', false ); ?>" alt="Scores" />
				</div>
			</div>
			<div class="swiper-slide xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
				<div class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] overflow-hidden rounded-2xl">
					<img class="w-full rounded-2xl" src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'score_card' ) ), 'large', false ); ?>" alt="Score Card" />
				</div>
			</div>
		</div>
	</div>
</div>


<div class="relative flex items-center justify-center w-screen m-auto md:hidden">
	<div class="bg-heroSectionGradient h-[25%] absolute top-[-80px] -z-10 w-screen"></div>
	<div class="block md:hidden mb-[80px] relative">
		<div class="flex gap-[12px] flex-col">
			<div>
				<div class="w-[328px] h-[190px]">
					<img src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'score_card' ) ), 'large', false ); ?>" class="w-full h-full shadow-lg rounded-2xl" alt="Score Card" />
				</div>
			</div>
			<div>
				<div class="w-[328px] h-[190px]">
					<img src="<?php echo wp_get_attachment_image_url( attachment_url_to_postid( get_field( 'scores' ) ), 'large', false ); ?>" class="w-full h-full shadow-lg rounded-2xl"  alt="Scores" />
				</div>
			</div>
		</div>
	</div>
</div>
