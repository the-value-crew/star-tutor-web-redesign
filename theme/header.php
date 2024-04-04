<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thestartutor
 */

 $currentUri = $_SERVER['REQUEST_URI'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header
        class="w-full sticky top-0 z-[1000] bg-[#121212] p-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px]">
        <nav class="2xl:max-w-[1084px] 2xl:container relative lg:flex lg:justify-center lg:items-center">
            <div class="flex items-center justify-between lg:justify-start">
                <?php
          $custom_logo_id = get_theme_mod("custom_logo");
          $logo = wp_get_attachment_image_src($custom_logo_id, "full");
          if(has_custom_logo()) {
            echo '<a href="/"><img
            src="' . $logo[0] . '"
            class="w-[166px] h-[31px] flex-shrink-0"
          /></a>';
          }
        ?>
                <button id="navBtn" class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path d="M3 12.5H21M3 6.5H21M9 18.5H21" stroke="#FCFCFC" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </button>

            </div>
            <div id="navMenu"
                class="w-full flex-grow-1 max-h-0 overflow-hidden lg:max-h-[500px] lg:overflow-auto transition-all ease-in-out duration-500 bg-[#121212] lg:flex lg:items-center text-secondary-dark">
                <?php
            wp_nav_menu(
              array(
                "theme_location" => "primary_menu",
								"container" => false,
								"container_class" => 'py-4',
                "menu_class" => "flex flex-col lg:w-full lg:flex-row lg:justify-center lg:items-center",
                "items_wrap" => '<div class="%2$s hover:underline">%3$s</div>',
                "walker" => new Custom_Walker_Nav_Menu
              )
            );
          ?>
                <a href="/#contact"
                    class="bg-cta-400 hover:bg-cta-800 active:bg-cta-default-dark font-button shrink-0 py-[10px] px-[20px] rounded-[60px]">
                    Book A Free Consultation
                </a>
            </div>
        </nav>
    </header>