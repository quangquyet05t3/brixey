<?php

/*
 <div class="row justify-content-center">
    <div>
        <a class="nav-link active" href="#">Trang chủ</a>
    </div>
    <div>
        <a class="nav-link" href="#">Dự án</a>
    </div>
</div>
 */

if ( ! class_exists( 'WP_Footer_Navwalker' ) ) {
    class WP_Footer_Navwalker extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = array()) { //ul

        }

        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
            $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
            $output .= $indent . '<div>';

            $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= 'class="nav-link"';

            $item_output = '<a' . $attributes . '>';
            $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= '</a>';

            $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

            $output .= '</div>';

        }

        /*
        function end_el(){ // closing li a span

        }

        function end_lvl(){ // closing ul

        }*/
    }
}