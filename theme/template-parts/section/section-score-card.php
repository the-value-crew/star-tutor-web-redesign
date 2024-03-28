<?php

$score_card_img = thestartutor_get_static_img("scoreCard.png");

?>
<!-- Score card -->

<div class="relative">
    <div class="bg-heroSectionGradient h-[50%] w-screen absolute top-[-90px] md:top-[-120px]"></div>
    <div id="scoreCardSection"
        class=" xl:h-[621px] lg:h-[546px] md:h-[347px] mt-[90px] mb-[120px] w-full m-auto relative md:mt-[120px] hidden md:block overflow-x-hidden">


        <div class="isActiveImageLeft" id="scoreCardDup">
            <div
                class="xl:h-[621px] lg:h-[546px] sm: 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px]">
                <img src="<?php echo get_field("score_card"); ?>" class="w-full h-full rounded-2xl" />
            </div>
        </div>

        <div class="isActiveImageRight" id="scoresCard">
            <div
                class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px]">
                <img src="<?php echo get_field("scores"); ?>" class="w-full h-full rounded-2xl" />
            </div>
        </div>

        <div id="scoresCard2" class="inactive">
            <div
                class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px]">
                <img src="<?php echo get_field("scores"); ?>" class="w-full h-full rounded-2xl" />
            </div>
        </div>
        <div id="scoresCard3" class="inactive">
            <div
                class="xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px]">
                <img src="<?php echo get_field("score_card"); ?>" class="w-full h-full rounded-2xl" />
            </div>
        </div>

        <div id="mainScoreCard" class="isActive">
            <div
                class="relative flex justify-center xl:h-[621px] lg:h-[546px] 2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] md:h-[347px] w-[327px] bg-transparent perspective flipImage rounded-2xl flipCardTransform">
                <figure
                    class=" xl:mb-[200px] absolute z-10 hiddenBackface xl:h-[621px] xl:w-[1090px] lg:w-[942px] lg:h-[546px] md:h-[347px]">
                    <img id="scoreCard" src="<?php echo get_field("score_card"); ?>"
                        class="xl:h-[621px] xl:w-[1090px] lg:w-[942px] lg:h-[546px] md:h-[347px] rounded-2xl" />
                </figure>
                <div
                    class="xl:h-[621px] xl:w-[1084px] lg:w-[942px] lg:h-[546px] md:h-[347px] h-[190px] w-[327px] md:w-[597px] bg-[#1D222B] flex justify-center items-center text-invert absolute flipDiv rounded-2xl p-5">
                    <div class="flex flex-col gap-[47px] xl:w-[685px]">
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


<div class="relative flex items-center justify-center w-screen m-auto md:hidden">
    <div class="bg-heroSectionGradient h-[25%] absolute top-[-55px] -z-10 w-screen"></div>
    <div class="block md:hidden mb-[80px] relative">

        <div class="flex gap-[12px] flex-col">
            <div>
                <div class="w-[328px] h-[190px]">
                    <img src="<?php echo get_field("score_card"); ?>" class="w-full h-full shadow-lg rounded-2xl" />
                </div>
            </div>
            <div>
                <div class="w-[328px] h-[190px]">
                    <img src="<?php echo get_field("scores"); ?>" class="w-full h-full shadow-lg rounded-2xl" />
                </div>
            </div>
        </div>
    </div>
</div>