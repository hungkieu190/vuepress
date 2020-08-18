<?php
if ( ! function_exists( 'vuepress_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function vuepress_setup() {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'vuepress', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'vuepress' ),
            'secondary' => __('Secondary Menu', 'vuepress' )
        ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
endif;
// vuepress_setup
add_action( 'after_setup_theme', 'vuepress_setup' );

if ( ! function_exists( 'vuepress_the_posts_navigation' ) ) :
    /**
     * Documentation for function.
     */
    function vuepress_the_posts_navigation() {
        the_posts_pagination(
            array(
                'mid_size'  => 2,
                'prev_text' => sprintf(
                    '%s <span class="nav-prev-text">%s</span>',
                    __( 'Newer posts', 'vuepress' )
                ),
                'next_text' => sprintf(
                    '<span class="nav-next-text">%s</span> %s',
                    __( 'Older posts', 'vuepress' )
                ),
            )
        );
    }
endif;