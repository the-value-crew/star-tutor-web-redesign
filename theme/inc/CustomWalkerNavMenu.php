<?php

  class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
    //   $output .= '<a href="' . $data_object->url . '" class="py-[4px] px-[8px] hover:underline">' . $data_object->title;
    // }

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
      $classes = 'py-[4px] px-[8px] hover:underline';
  
    $current_path = rtrim($_SERVER['REQUEST_URI'], '/');

    $item_path = rtrim(parse_url($data_object->url, PHP_URL_PATH), '/');

   
if ($item_path == $current_path) {
  if($data_object -> title == 'Contact'){
    $classes .= "";
  }else {
    $classes .= ' text-brand-invert'; 
  }
}



      $output .= '<a href="' . $data_object->url . '" class="' . $classes . '">' . $data_object->title;
  }

    public function end_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
      $output .= "</a>";
    }
  }