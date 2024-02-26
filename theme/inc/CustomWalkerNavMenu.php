<?php

  class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
      $output .= '<a href="' . $data_object->url . '" class="py-[4px] px-[8px]">' . $data_object->title;
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
      $output .= "</a>";
    }
  }
