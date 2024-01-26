<?php
class Header_Nav_Walker extends Walker_Nav_Menu
{
    // Add classes to the list items and links
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '<ul class="submenu dropdown-menu">';
    }

    // Add classes to the list items and links
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $output .= '<li id="menu-item-' . $item->ID . '" class="nav-item ' . implode(' ', $classes) . '">';
    }

    // Add classes to the list items and links
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '<a href="' . esc_url($item->url) . '" class="nav-link';

        // Add dropdown toggle for items with children
        if (
            !empty($item->classes) &&
            is_array($item->classes) &&
            in_array('menu-item-has-children', $item->classes) && ($depth == 0)
        ) {

            $output .= ' dropdown-toggle" data-toggle="dropdown';
        }

        $output .= '">';
        $output .= esc_html($item->title);
        $output .= '</a></li>';
    }

    // Close the list after the elements are done
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</ul>';
    }
}
