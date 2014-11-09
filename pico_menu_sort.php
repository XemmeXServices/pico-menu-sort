<?php

class Pico_Menu_Sort {
  public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page) {
    usort($pages, function($a, $b) {
      return($a['weight'] > $b['weight']);
    });
  }
}
