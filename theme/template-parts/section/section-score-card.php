<?php

$score_card_img = thestartutor_get_static_img( 'scoreCard.png' );

?>
<!-- Score card -->

<div class="relative">
	<div class="bg-heroSectionGradient h-[50%] w-screen absolute top-[-90px] md:top-[-120px]"></div>

	<div class="swiper-container overflow-hidden hidden md:block scoreCardSectionUp">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php echo get_field( 'scores' ); ?>" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_field( 'score_card' ); ?>" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_field( 'scores' ); ?>" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_field( 'score_card' ); ?>" />
			</div>
		</div>
	</div>
</div>


<div class="relative flex items-center justify-center w-screen m-auto md:hidden">
	<div class="bg-heroSectionGradient h-[25%] absolute top-[-55px] -z-10 w-screen"></div>
	<div class="block md:hidden mb-[80px] relative">

		<div class="flex gap-[12px] flex-col">
			<div>
				<div class="w-[328px] h-[190px]">
					<img src="<?php echo get_field( 'score_card' ); ?>" class="w-full h-full shadow-lg rounded-2xl" />
				</div>
			</div>
			<div>
				<div class="w-[328px] h-[190px]">
					<img src="<?php echo get_field( 'scores' ); ?>" class="w-full h-full shadow-lg rounded-2xl" />
				</div>
			</div>
		</div>
	</div>
</div>
