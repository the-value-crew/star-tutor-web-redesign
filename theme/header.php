<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-[#121212] p-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
      <nav class="lg:flex lg:items-center">
        <div class="flex justify-between items-center">
        <?php
          $custom_logo_id = get_theme_mod("custom_logo");
          $logo = wp_get_attachment_image_src($custom_logo_id, "full");
          if(has_custom_logo()) {
            echo '<img
            src="' . $logo[0] . '"
            class="w-[166px] h-[31px] flex-shrink-0"
          />';
          }
        ?>
          <button id="navBtn" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path d="M3 12.5H21M3 6.5H21M9 18.5H21" stroke="#FCFCFC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

          </button>

        </div>
        <div id="navMenu" class="hidden lg:w-full lg:flex lg:items-center text-secondary-dark">
          <?php
            wp_nav_menu(
              array(
                "theme_location" => "primary_menu",
                "container" => false,
                "menu_class" => "flex flex-col lg:w-full lg:flex-row lg:justify-center lg:items-center",
                "items_wrap" => '<div class="%2$s">%3$s</div>',
                "walker" => new Custom_Walker_Nav_Menu
              )
            );
          ?>
          <button
            class="bg-cta-default font-button shrink-0 py-[10px] px-[20px] rounded-[60px]"
          >
            Book A Free Consultation
          </button>
        </div>
      </nav>
    </header>
