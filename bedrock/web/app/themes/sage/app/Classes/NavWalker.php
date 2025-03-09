<?php

namespace App\Classes;

use Walker_Nav_Menu;

class NavWalker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = implode(' ', $item->classes);
        $output .= "<li class='menu-item {$classes}'>";
        $output .= "<a href='{$item->url}' class='text-nowrap no-underline hover:underline'>{$item->title}</a>";
        $output .= "</li>";
    }
}
