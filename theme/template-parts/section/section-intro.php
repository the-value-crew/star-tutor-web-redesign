<?php

$intro_img = thestartutor_get_static_img("introImage.jpeg");

?>
    <!-- Introduction section -->
    <section
      id="introSection"
      class="md:mb-[120px] lg:mb-[120px] xl:mb-[200px] lg:mt-[140px] mb-[80px] flex lg:flex-row flex-col gap-[40px] xl:gap-[108px] 2xl:[gap-112px] lg:gap-[88px] container md:items-center md:justify-center overflow-hidden"
    >
      <figure
        style="background-image: url('<?php echo $intro_img; ?>')"
        class="xl:w-[348px] xl:h-[426px] lg:h-[338px] lg:w-[343px] w-[149px] h-[138px] flex-shrink-0 bg-cover bg-no-repeat"
        id="introLeft"
      ></figure>

      <div
        class="w-[624px] xl:w-[512.5px] flex flex-col gap-[20px] md:text-center lg:text-left"
        id="introRight"
      >
        <div
          class="relative inline-flex flex-col gap-2 xl:items-start"
          id="introIntroduction"
        >
          <h2 class="uppercase text-tertiary font-subheading text-subheading">
            Introduction
          </h2>
          <h1
            class="leading-tight text-primary xl:font-title xl:text-title lg:font-heading2 lg:text-heading2 md:font-title md:text-title font-mobileHeading2 text-mobileHeading2"
          >
            A short <span class="text-brand">Message</span>
          </h1>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="116"
            height="110"
            viewBox="0 0 116 110"
            fill="none"
            class="absolute bottom-[-55px] right-[190px] hidden xl:block"
          >
            <g clip-path="url(#clip0_505_3422)">
              <path
                d="M46.9087 68.3479C45.9149 68.1231 44.9104 67.8739 43.9231 67.6092C42.9908 67.3575 42.039 67.9067 41.7947 68.8339C41.5504 69.761 42.1088 70.716 43.0421 70.9662C44.0756 71.2442 45.1259 71.5043 46.1655 71.74C46.8772 71.9009 47.582 71.6044 47.9723 71.0458C48.0985 70.8652 48.1921 70.6578 48.2407 70.4295C48.4469 69.4926 47.849 68.5607 46.9087 68.3479Z"
                fill="#7A7A7A"
              />
              <path
                d="M63.4892 70.1858C62.5257 70.1894 61.7553 70.9711 61.7675 71.9315C61.7797 72.892 62.5697 73.6682 63.5341 73.6631C64.5988 73.6582 65.6797 73.633 66.7452 73.5842C67.3052 73.5588 67.789 73.2728 68.086 72.8479C68.2986 72.5437 68.4155 72.1685 68.3926 71.7675C68.3392 70.8079 67.5177 70.0646 66.5554 70.1093C65.537 70.155 64.5064 70.1815 63.4892 70.1858Z"
                fill="#7A7A7A"
              />
              <path
                d="M53.628 69.5556C52.6722 69.4293 51.7997 70.0973 51.6818 71.0514C51.5634 72.0031 52.2413 72.8787 53.1995 73.0046C54.2582 73.1458 55.3342 73.2652 56.3971 73.3606C57.0414 73.4194 57.6319 73.1213 57.9756 72.6295C58.1444 72.3879 58.2536 72.1003 58.2789 71.7859C58.3577 70.8298 57.6425 69.9831 56.6826 69.8962C55.6681 69.805 54.6418 69.6908 53.6319 69.5562L53.628 69.5556Z"
                fill="#7A7A7A"
              />
              <path
                d="M37.4065 65.5436C36.4459 65.1918 35.4809 64.8158 34.5374 64.4273C33.6439 64.0589 32.6272 64.4781 32.2645 65.3669C31.9027 66.2543 32.3336 67.2725 33.2271 67.6409C34.2138 68.0469 35.2221 68.4405 36.2269 68.8084C36.9864 69.0874 37.8119 68.8075 38.2509 68.1793C38.3354 68.0585 38.406 67.9238 38.4584 67.7785C38.785 66.8771 38.3137 65.8772 37.4055 65.5451L37.4065 65.5436Z"
                fill="#7A7A7A"
              />
              <path
                d="M29.0915 63.8907C29.5301 63.04 29.1922 61.9895 28.3345 61.5425C27.4273 61.0715 26.5181 60.5758 25.6295 60.0691C24.7897 59.5902 23.7264 59.8773 23.2519 60.7092C22.7788 61.5421 23.0753 62.606 23.915 63.0849C24.843 63.6148 25.7953 64.1343 26.7423 64.6247C27.5305 65.0338 28.4802 64.7899 28.9709 64.0878C29.0146 64.0252 29.054 63.9597 29.0901 63.8897L29.0915 63.8907Z"
                fill="#7A7A7A"
              />
              <path
                d="M103.758 58.3395C102.906 58.8841 102.028 59.4168 101.149 59.9284C100.319 60.4103 100.045 61.4752 100.537 62.3054C101.028 63.137 102.098 63.4198 102.927 62.9368C103.846 62.4032 104.765 61.8435 105.658 61.2744C105.854 61.1493 106.017 60.99 106.143 60.8095C106.533 60.2509 106.568 59.4861 106.172 58.8732C105.647 58.0624 104.567 57.8237 103.758 58.3395Z"
                fill="#7A7A7A"
              />
              <path
                d="M111.667 52.5105C110.897 53.1633 110.102 53.8092 109.299 54.4328C108.542 55.0208 108.413 56.1131 109.01 56.8727C109.606 57.6323 110.703 57.7706 111.46 57.1825C112.3 56.5301 113.136 55.8509 113.942 55.1681C114.058 55.0694 114.158 54.9596 114.24 54.8416C114.681 54.2105 114.657 53.3347 114.128 52.7173C113.5 51.9843 112.397 51.8908 111.667 52.5105Z"
                fill="#7A7A7A"
              />
              <path
                d="M95.1287 63.0712C94.2077 63.5 93.2666 63.9149 92.3302 64.3077C91.4435 64.6781 91.033 65.6965 91.4125 66.5835C91.7919 67.4706 92.8172 67.8888 93.7038 67.5183C94.6836 67.1093 95.6672 66.6734 96.6288 66.2262C96.9138 66.0933 97.1453 65.8933 97.3132 65.6531C97.6568 65.1613 97.7333 64.5019 97.4536 63.9151C97.0395 63.044 95.998 62.6674 95.1278 63.0726L95.1287 63.0712Z"
                fill="#7A7A7A"
              />
              <path
                d="M85.9457 66.6461C84.975 66.9536 83.9876 67.2452 83.0084 67.5128C82.0802 67.7654 81.5421 68.7221 81.8036 69.6495C82.0662 70.5754 83.0297 71.1217 83.9578 70.8691C84.9813 70.5901 86.0149 70.2843 87.0284 69.9644C87.4062 69.8455 87.7114 69.6103 87.921 69.3104C88.221 68.8812 88.3218 68.3213 88.1459 67.7816C87.8463 66.8658 86.8623 66.358 85.9461 66.6485L85.9457 66.6461Z"
                fill="#7A7A7A"
              />
              <path
                d="M73.3401 69.4915C72.3861 69.6223 71.7273 70.501 71.8679 71.4517C72.0075 72.4039 72.8948 73.0684 73.8475 72.9365C74.9015 72.791 75.9666 72.6235 77.0141 72.4353C77.4833 72.3506 77.8733 72.0858 78.1255 71.7248C78.3778 71.3638 78.496 70.8921 78.4066 70.415C78.2281 69.4695 77.316 68.8406 76.369 69.0102C75.3676 69.1905 74.3486 69.35 73.3411 69.4901L73.3401 69.4915Z"
                fill="#7A7A7A"
              />
              <path
                d="M6.42998 47.3801L14.0961 66.4319L26.7589 50.4309L6.42998 47.3801Z"
                fill="#7A7A7A"
              />
            </g>
            <defs>
              <clipPath id="clip0_505_3422">
                <rect
                  width="68.5948"
                  height="92.6476"
                  fill="white"
                  transform="translate(0 56.582) rotate(-55.0554)"
                />
              </clipPath>
            </defs>
          </svg>
        </div>

        <h3
          class="hidden font-normal text-secondary text-heading3 2xl:block"
          id="introQuestion"
        >
          What the founder has to say to you.
        </h3>

        <article
          class="flex flex-col items-start md:gap-[20px] gap-2"
          id="introContent"
        >
          <p
            class="font-normal leading-relaxed text-secondary text-normal overflow-hidden h-[104px] 2xl:h-[156px] text-ellipsis"
          >
            Hello, Prospective Clients, <br />
            Has your score hit a plateau after using conventional test prep
            services? Or have you just started and are struggling with your GMAT
            or GRE preparation? I can help! I understand that taking exams
            repeatedly can be expensive and demoralizing. After all, tests such
            as the GRE and the GMAT affect your entire career and even your
            future potential income. With an experienced guide, however, the
            maze of test preparation is far less daunting. Hundreds of my
            clients who had reached a cap and stopped progressing ultimately
            succeeded after seeking my help, and you can read their success
            stories We will be in this together, and you can do this! Let’s make
            this your last test!
          </p>
          <p class="font-semibold text-secondary text-normal md:text-cemter">
            Tara B, Founder
          </p>
        </article>
        <div id="introButton">
          <button
            class="bg-[#C84A3D] rounded-[60px] 2xl:py-[16px] py-[14px] px-[32px] text-primary-dark font-button"
          >
            Read More...
          </button>
        </div>
      </div>
    </section>