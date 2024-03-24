<?php

$args = array(
  "post_type"         => "reviews",
  "posts_per_page"    => 10
);
$wp_query = new WP_Query($args);
?>
    <!-- Reviews section -->
    <div class="container flex items-center justify-center w-full m-auto">
      <div
        class="2xl:w-[1084px] xl:w-[1040px] lg:w-[942px] md:w-[597px] w-[327px]"
      >
    <section class="2xl:mb-[320px] xl:mb-[200px] lg:mb-[140px] md:mb-[120px] mb-[80px]">
      <section
        id="reviewsSection"
        class="flex flex-col md:gap-[60px] gap-[40px] md:items-center"
      >
        <section
          class="inline-flex flex-col gap-4 md:items-center"
          id="reviewsText"
        >
          <div
            class="relative flex flex-col gap-2 md:items-center"
            id="reviewText"
          >
          <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="172"
                  height="151"
                  viewBox="0 0 172 151"
                  fill="none"
                  class="absolute top-[-110px] left-[85px] hidden xl:block"
                >
                  <g clip-path="url(#clip0_505_3370)">
                    <path
                      d="M110.898 54.4106C111.771 54.8217 112.654 55.2512 113.521 55.6882C114.332 56.0966 115.319 55.7725 115.725 54.9647C116.097 54.2232 115.851 53.3327 115.182 52.8745C115.121 52.8327 115.057 52.7949 114.99 52.7612C114.098 52.3111 113.189 51.869 112.288 51.4452C111.466 51.0589 110.489 51.4081 110.105 52.2262C109.722 53.0453 110.076 54.022 110.898 54.4106Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M84.1258 45.9365C85.0796 46.1014 86.0434 46.2809 86.9878 46.4711C87.8782 46.6501 88.7416 46.0763 88.9169 45.1883C89.0484 44.5243 88.7571 43.8723 88.2303 43.5117C88.0525 43.39 87.8479 43.3015 87.6241 43.2555C86.6478 43.0594 85.6546 42.8735 84.6702 42.7036C83.7751 42.5491 82.9283 43.1481 82.7785 44.0397C82.6277 44.9327 83.2315 45.7807 84.1267 45.9351L84.1258 45.9365Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M93.2876 47.9498C94.221 48.1999 95.1633 48.466 96.09 48.7433C96.9604 49.0038 97.8745 48.5104 98.1293 47.643C98.3369 46.9438 98.0531 46.2137 97.4789 45.8206C97.3404 45.7258 97.1858 45.6517 97.0177 45.6001C96.061 45.3142 95.0873 45.0385 94.1253 44.7807C93.2478 44.5451 92.3494 45.0651 92.1182 45.9387C91.8861 46.8137 92.4096 47.7119 93.2871 47.9475L93.2876 47.9498Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M119.222 58.7766C120.059 59.2628 120.901 59.7658 121.725 60.2744C122.5 60.751 123.51 60.5137 123.984 59.7428C124.443 58.9958 124.229 58.0216 123.509 57.529C123.488 57.5141 123.465 57.4983 123.442 57.4848C122.592 56.9607 121.725 56.4423 120.863 55.9418C120.078 55.485 119.073 55.7497 118.619 56.5323C118.165 57.3149 118.434 58.3203 119.221 58.7744L119.222 58.7766Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M102.235 50.7867C103.142 51.1196 104.057 51.4699 104.957 51.8287C105.801 52.1662 106.756 51.7561 107.088 50.9158C107.375 50.19 107.107 49.3815 106.486 48.9558C106.386 48.8879 106.279 48.83 106.162 48.7842C105.233 48.4141 104.289 48.0515 103.355 47.7095C102.503 47.396 101.56 47.8322 101.25 48.6814C100.94 49.5306 101.381 50.4736 102.233 50.7871L102.235 50.7867Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M141.567 75.8666C142.255 76.5457 142.944 77.2457 143.614 77.9445C144.244 78.6 145.283 78.6251 145.936 78.0006C146.59 77.3746 146.611 76.337 145.982 75.6824C145.291 74.9614 144.582 74.2416 143.874 73.5427C143.801 73.4711 143.724 73.4086 143.643 73.3528C143 72.9123 142.115 72.9777 141.549 73.5484C140.912 74.1901 140.919 75.2286 141.565 75.867L141.567 75.8666Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M134.611 69.5454C135.353 70.1648 136.099 70.8024 136.826 71.4434C137.507 72.0446 138.547 71.9801 139.144 71.3019C139.742 70.6238 139.674 69.5871 138.992 68.9873C138.244 68.3278 137.475 67.6707 136.71 67.0319C136.67 66.9981 136.628 66.9657 136.585 66.936C135.894 66.4629 134.943 66.5819 134.398 67.2349C133.819 67.9296 133.914 68.9635 134.611 69.5454Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M127.141 63.835C127.934 64.3896 128.731 64.9634 129.509 65.5396C130.237 66.0755 131.269 65.9286 131.806 65.2027C132.343 64.4755 132.187 63.448 131.456 62.9079C130.654 62.315 129.834 61.724 129.017 61.1527C129.012 61.149 129.008 61.1462 129.002 61.1425C128.26 60.6341 127.245 60.8145 126.729 61.5506C126.21 62.2909 126.393 63.3147 127.139 63.8354L127.141 63.835Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M147.96 82.7492C148.588 83.4866 149.213 84.2421 149.821 84.9937C150.391 85.7015 151.425 85.8161 152.131 85.2492C152.837 84.6832 152.946 83.6504 152.376 82.9448C151.751 82.1693 151.106 81.3904 150.459 80.6318C150.361 80.5176 150.251 80.42 150.133 80.3392C149.535 79.9302 148.718 79.9502 148.142 80.439C147.452 81.0243 147.37 82.0593 147.959 82.7506L147.96 82.7492Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M9.44885 58.163C9.90384 58.9487 10.9095 59.2185 11.6946 58.7678C12.5306 58.2864 13.3843 57.8112 14.2323 57.356C15.0286 56.9268 15.3244 55.9327 14.8909 55.1359C14.7621 54.8988 14.5836 54.7052 14.3745 54.5621C13.8817 54.2247 13.2234 54.1669 12.664 54.4685C11.7894 54.9393 10.9091 55.4301 10.0461 55.9247C9.26099 56.3754 8.9952 57.3781 9.4502 58.1639L9.44885 58.163Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M17.8238 53.6707C18.2078 54.4932 19.1866 54.8518 20.0074 54.4711C20.8818 54.0677 21.7749 53.669 22.6618 53.288C23.4942 52.9312 23.8758 51.9661 23.5124 51.1339C23.3833 50.8391 23.1797 50.6005 22.9327 50.4314C22.482 50.1228 21.8881 50.0437 21.3508 50.2751C20.4365 50.6671 19.515 51.0781 18.6159 51.4944C17.7937 51.8741 17.4398 52.8482 17.8238 53.6707Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M1.51491 63.3915C2.03961 64.1337 3.06441 64.3115 3.80557 63.791C4.59355 63.237 5.40108 62.6866 6.20387 62.1547C6.95849 61.6553 7.16244 60.638 6.65884 59.8825C6.53811 59.7006 6.38697 59.5515 6.21728 59.4353C5.68104 59.0682 4.95365 59.0385 4.38069 59.4182C3.55267 59.9666 2.71898 60.5348 1.90485 61.1066C1.16505 61.628 0.990219 62.6493 1.51491 63.3915Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M26.564 49.9307C26.8757 50.783 27.8181 51.2238 28.6706 50.9165C29.5784 50.5894 30.5029 50.2699 31.4201 49.9671C32.2805 49.683 32.7437 48.756 32.4553 47.8958C32.3363 47.5424 32.1096 47.2562 31.8231 47.0601C31.4131 46.7794 30.8814 46.6853 30.3748 46.8544C29.4312 47.1668 28.4778 47.4964 27.5435 47.833C26.691 48.1404 26.2527 49.0806 26.5654 49.9316L26.564 49.9307Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M35.6007 46.959C35.8388 47.8344 36.7408 48.3546 37.6166 48.1208C38.551 47.8715 39.5003 47.6324 40.4384 47.4095C41.32 47.1994 41.8611 46.3158 41.6468 45.4348C41.5475 45.0235 41.3003 44.6856 40.9759 44.4635C40.6053 44.2098 40.1333 44.1069 39.6619 44.2188C38.6955 44.4481 37.7183 44.6959 36.7556 44.9516C35.8798 45.1855 35.3626 46.0835 35.6007 46.959Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M74.8167 44.7573C75.785 44.8368 76.7597 44.9306 77.7164 45.0359C78.619 45.1359 79.4275 44.4849 79.5227 43.5857C79.5892 42.9644 79.2975 42.3857 78.8128 42.0539C78.5956 41.9052 78.3405 41.806 78.062 41.776C77.0775 41.6676 76.0705 41.5715 75.0721 41.4892C74.1675 41.4156 73.3769 42.0868 73.3072 42.9896C73.2374 43.8924 73.9134 44.6845 74.818 44.7582L74.8167 44.7573Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M65.4394 44.3994C66.4059 44.3943 67.3855 44.4022 68.3522 44.4231C69.2597 44.4431 70.007 43.7244 70.023 42.8185C70.0333 42.2442 69.7464 41.7343 69.3039 41.4313C69.0486 41.2565 68.7403 41.1506 68.4082 41.1435C67.4119 41.1222 66.4027 41.1139 65.4066 41.1186C64.5002 41.1231 63.7719 41.8608 63.7796 42.7669C63.7882 43.6718 64.5304 44.4021 65.4381 44.3985L65.4394 44.3994Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M56.0677 44.8485C57.0305 44.7615 58.0073 44.6861 58.9712 44.6237C59.8767 44.565 60.5595 43.7862 60.4966 42.8819C60.4614 42.3597 60.1848 41.9104 59.7829 41.6353C59.4897 41.4345 59.1276 41.3255 58.746 41.35C57.7529 41.4143 56.747 41.4916 55.7554 41.5827C54.8519 41.6646 54.1895 42.4633 54.2765 43.3642C54.3626 44.2665 55.1656 44.9313 56.0677 44.8485Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M46.7706 46.0951C47.7237 45.9261 48.6895 45.7677 49.6428 45.6247C50.5386 45.4899 51.154 44.6551 51.0136 43.7592C50.9413 43.2911 50.6783 42.9006 50.3145 42.6515C49.9818 42.4238 49.5669 42.3164 49.1375 42.3815C48.1554 42.5287 47.16 42.6926 46.1794 42.8666C45.287 43.0256 44.6947 43.8762 44.8579 44.7678C45.0211 45.6594 45.8758 46.2545 46.7683 46.0955L46.7706 46.0951Z"
                      fill="#7A7A7A"
                    />
                    <path
                      d="M162.862 101.971L162.271 82.6806L145.834 92.7655L162.862 101.971Z"
                      fill="#7A7A7A"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_505_3370">
                      <rect
                        width="156"
                        height="75"
                        fill="white"
                        transform="translate(129.297 151) rotate(-145.604)"
                      />
                    </clipPath>
                  </defs>
                </svg>
            <h2
              id="reviewsHeading"
              class="uppercase text-tertiary md:font-subheading md:text-subheading font-subheading_mobile text-subheading_mobile"
            >
            <?php echo get_field("reviews_heading"); ?>

            </h2>
            <?php echo the_field("reviews_title")?>
          </div>
          <h3
            id="reviewsSubTitle"
            class="md:font-normal text-secondary md:text-heading3 font-subtitle_mobile text-subtitle_mobile"
          >
            <?php echo the_field("reviews_subheading");?>
          </h3>
        </section>
        <section>
          <section
            id="reviewsContent"
            class="grid xl:grid-cols-3 gap-[20px] grid-cols-1 items-center justify-center  lg:grid-cols-2"
          >
            <?php
              if($wp_query->have_posts()) {
                while($wp_query->have_posts()) {
                  $wp_query->the_post();
            ?>
            <article
              class="2xl:w-[348px] flex flex-col border border-solid border-grey-200 bg-grey-100 rounded-lg px-[24px] py-[16px] item-start gap-[16px] flex-initial"
            >
              <div class="flex gap-[4px]">
                <?php
                  for ($i = 0; $i < (int)get_field("stars"); $i++) {
                ?>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
                    fill="#E4C045"
                  />
                </svg>
                <?php
                  }
                ?>
              </div>
              <div class="flex flex-col gap-2">
                <p
                  class="self-stretch font-normal leading-relaxed text-normal text-secondary"
                >
                   <?php echo wp_trim_words(get_field("review"), 20); ?> 

                  <!-- <span class="visible-content">
  <?php 
    $content = get_field("review");
    if(strlen($content) > 60) {
        echo wp_trim_words(get_field("review"), 60);
    } else {
        echo $content;
    }
    ?>
  </span>
  <span class="extra-content" style="display: none;">
    <?php echo ltrim(substr(get_field("review"), 60)); ?>
  </span>
  <br />
   <?php if(strlen(get_field("review")) > 60): ?>
    <a href="#" class="font-semibold see-more">See more...</a>
  <?php endif; ?> -->

                </p>
                <p
                  class="leading-relaxed text-heading3 font-heading3 text-primary"
                >
                  -<?php the_field("reviewer_name"); ?>
                  <span class="text-captionBig font-captionBig text-secondary"
                    >(<?php
                    $choices = get_field_object("review_from")["choices"];
                    $key = get_field("review_from");
                    echo $choices[$key];
                  ?>)</span
                  >
                </p>
              </div>
            </article>
            <?php
                  }
                }

                wp_reset_postdata();
            ?>
          </section>
        </section>

        <div id="reviewsButton">
          <a
            href="/reviews/"
            class="bg-cta-default rounded-[60px] py-[16px] px-[32px] text-primary-dark font-button"
          >
          <?php echo get_field("reviews_button", 13); ?>

          </a>
        </div>
      </section>
    </section>
              </div>
              </div>