<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thestartutor
 */

?>
    <footer 
      class="mt-[160px] py-[80px] bg-surface-primary-dark text-primary-dark"
    >
      <div class="px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px] flex justify-between items-start">
        <div class="w-[256px] flex flex-col gap-[12px] items-start">
          <p class="capitalize text-heading2 font-heading2">Links</p>

          <a class="font-normal capitalize text-normal">Home</a>
          <a class="font-normal capitalize text-normal">About us</a>

          <a class="font-normal capitalize text-normal">Reviews</a>
          <a class="font-normal capitalize text-normal">Blog</a>
          <a class="font-normal capitalize text-normal">Contact</a>
        </div>
        <div>
          <div class="w-[256px] flex flex-col gap-[12px] items-start">
            <p class="capitalize text-heading2 font-heading2">Contact</p>
            <div class="flex gap-[22px] items-center">
              <div
                class="flex items-center justify-center px-[6px] h-[36px] bg-surface-brand-inverted rounded-[6px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"

                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"

                >
                  <path

                    d="M21.0591 18.0293V18.1593C20.9128 18.6977 20.6016 19.1768 20.169 19.5293C19.6846 20.0432 19.0943 20.4457 18.4391 20.7093C17.8557 20.9361 17.235 21.0515 16.609 21.0493H16.2791C14.9186 20.9821 13.5855 20.642 12.359 20.0493C12.069 19.9193 11.7891 19.7792 11.4991 19.6292C10.0853 18.8324 8.7867 17.8467 7.63905 16.6993C6.15672 15.3034 4.94027 13.6499 4.04902 11.8192C3.5497 10.8082 3.21225 9.72501 3.04902 8.60926C2.81808 7.42356 2.95414 6.19562 3.43904 5.08924V4.98926C3.73491 4.51487 4.0875 4.07827 4.48902 3.68921C4.69443 3.47242 4.93867 3.29608 5.20906 3.16925C5.49677 3.03184 5.81029 2.95684 6.12904 2.94922H6.26905C6.91753 3.0619 7.49768 3.42003 7.88905 3.94922C8.28905 4.38922 8.74905 4.82924 9.19905 5.27924L9.77906 5.84925C9.97049 6.01014 10.1273 6.20813 10.24 6.43134C10.3528 6.65454 10.4191 6.89833 10.435 7.14789C10.4509 7.39745 10.416 7.6476 10.3325 7.8833C10.249 8.11901 10.1186 8.33535 9.94905 8.51923C9.78905 8.70923 9.58904 8.92922 9.37904 9.13922L9.18904 9.32923C9.11005 9.40501 9.04862 9.49719 9.00904 9.59925C8.99865 9.67221 8.99865 9.74625 9.00904 9.81922C9.1341 10.1669 9.33184 10.484 9.58906 10.7492L9.66902 10.8293C10.079 11.3993 10.4991 11.9393 10.9991 12.5293C11.833 13.488 12.8196 14.3023 13.919 14.9392C13.9922 15.0037 14.0825 15.0454 14.1791 15.0592C14.2476 15.0795 14.3205 15.0795 14.3891 15.0592C14.6758 14.8932 14.93 14.6764 15.1391 14.4193C15.3209 14.195 15.5452 14.0088 15.7992 13.8715C16.0532 13.7342 16.3318 13.6484 16.6191 13.6192H16.7391C17.2751 13.6468 17.78 13.8796 18.1491 14.2693C18.3526 14.4451 18.5462 14.6321 18.729 14.8293L18.9991 15.1192L19.2791 15.3893L19.789 15.8993C20.082 16.1558 20.3561 16.4332 20.609 16.7293C20.9029 17.0986 21.0617 17.5573 21.0591 18.0293Z"
                    fill="#0E0E0E"
                  />
                </svg>
              </div>

              <div class="relative">
                <p
                  class="text-button font-button hover:cursor-pointer"
                  id="phoneNumber"
                >
<?php echo get_field("footer_phone",13);?>
                </p>
                <span
                  id="phoneCopied"
                  class="rounded-[4px] text-xs font-medium text-[#344054] px-2 py-[2px] bg-[#EAECF0] whitespace-nowrap hidden absolute border border-solid"
                  >Phone number copied to clipboard</span
                >
              </div>

            </div>
            <div class="flex gap-[22px] items-center">
              <div
                class="flex items-center justify-center px-[6px] h-[36px] bg-surface-brand-inverted rounded-[6px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M18.3451 3.83984H5.65516C4.8948 3.84247 4.16633 4.14568 3.62867 4.68334C3.09101 5.221 2.7878 5.94947 2.78516 6.70983V17.2898C2.7878 18.0502 3.09101 18.7787 3.62867 19.3163C4.16633 19.854 4.8948 20.1572 5.65516 20.1598H18.3451C19.1054 20.1572 19.8339 19.854 20.3716 19.3163C20.9092 18.7787 21.2124 18.0502 21.2151 17.2898V6.70983C21.2124 5.94947 20.9092 5.221 20.3716 4.68334C19.8339 4.14568 19.1054 3.84247 18.3451 3.83984ZM19.7151 8.08984L12.3951 12.6399C12.2769 12.7098 12.1425 12.7477 12.0051 12.7499C11.8599 12.7488 11.7179 12.7072 11.5951 12.6298L4.28516 7.94982V6.70983C4.28303 6.54869 4.31361 6.38879 4.37513 6.23983L12.0051 11.1099L19.6651 6.35982C19.6804 6.47599 19.6804 6.59367 19.6651 6.70983L19.7151 8.08984Z"
                    fill="#0E0E0E"

                  />

                </svg>
              </div>
              <div class="relative">
                <p
                  class="text-button font-button hover:cursor-pointer"
                  id="email"
                >
<?php echo get_field("footer_email", 13); ?>
                </p>
                <span
                  id="emailCopied"
                  class=" rounded-[4px] text-xs font-medium text-[#344054] px-2 py-[2px] bg-[#EAECF0] whitespace-nowrap hidden absolute border border-solid "
                  >Email copied to clipboard</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
