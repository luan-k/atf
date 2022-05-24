<?php
require get_theme_file_path('/inc/search-route.php');
function wkode_files(){
    /* if (is_front_page()){
        wp_enqueue_script('wkode-slider-script', get_theme_file_uri('/dist/sliderScript.js'), NULL, '1.0', true);
    } */
    wp_enqueue_style('wkode_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/main.js'), NULL, '1.0', true);
    wp_localize_script('main-js', 'WKodeData', array(
        'root_url' => get_site_url()
    ));
    wp_enqueue_script('wkode-font_awesome', '//kit.fontawesome.com/fde7c29e46.js', NULL, '1.0', true);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.css');

}

add_action('wp_enqueue_scripts', 'wkode_files');

function wkode_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('ProductImageList', 500, 500, true);
    add_image_size('ProductImageSingle', 800, 1000, true);
}
add_action('after_setup_theme', 'wkode_features');


function fancy_lab_config(){
    register_nav_menus(
        array(
            'fancy_lab_main_menu' 	=> 'Fancy Lab Main Menu',
        )
    );

    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width'	=> 255,
        'product_grid' 			=> array(
            'default_rows'    => 3, //how many product rows
            'min_rows'        => 5, // minimum rows duh
            'max_rows'        => 10, // maximum rows duh
            'default_columns' => 1, // columns lol
            'min_columns'     => 3, // self explanatory duh
            'max_columns'     => 3,	 // self explanatory duh			
        )
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /* removendo o botao de comprar */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
    /* sku e categoria */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    /* addicional information */
    add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );
    /* breadcrumb */
    add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
    function jk_woocommerce_breadcrumbs() {
        return array(
                'delimiter'   => ' &#124; ',
                'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"> <i class="fas fa-home"></i>  ',
                'wrap_after'  => '</nav>',
                'before'      => '',
                'after'       => '',
                'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
            );
    }
    /* acf links mercado e magazine */
    add_action( 'woocommerce_share', 'woocommerce_template_top_category_desc', 1 );
	function woocommerce_template_top_category_desc (){

        if(get_field('link_mercado')){?>
            <a target="_blank" class='mercado-livre botoes ' href="<?php the_field('link_mercado')?>"> Comprar no Mercado Livre </a>
        <?php }
        if(get_field('link_submarino')){?>
            <a target="_blank" class='submarino botoes ' href="<?php the_field('link_submarino')?>"> Comprar no Submarino </a>
        <?php }
        if(get_field('link_amazon')){?>
            <a target="_blank" class='amazon botoes ' href="<?php the_field('link_amazon')?>"> Comprar no Amazon </a>
        <?php }
        if(get_field('link_americanas')){?>
            <a target="_blank" class='americanas botoes ' href="<?php the_field('link_americanas')?>"> Comprar no Americanas </a>
        <?php }
        
	}

    function my_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'], $tabs['reviews'] ); // To remove the additional information tab
        return $tabs;
    }
    /* remove product tabs */
    add_filter( 'woocommerce_product_data_tabs', 'custom_product_data_tabs' ); 
    function custom_product_data_tabs( $tabs ) {
    // unset( $tabs['general'] );
    unset( $tabs['inventory'] );
    unset( $tabs['shipping'] );
    unset( $tabs['linked_product'] );
    unset( $tabs['attribute'] );
    unset( $tabs['variations'] );
    unset( $tabs['advanced'] );
    return $tabs;
    }

    add_filter( 'product_type_selector', 'remove_product_types' );

    function remove_product_types( $types ){
        unset( $types['grouped'] );
        unset( $types['external'] );

        return $types;
    }

    add_filter( 'product_type_options', function( $options ) {
 
 
 
    
            // remove "Virtual" checkbox

            if( isset( $options[ 'virtual' ] ) ) {

                        unset( $options[ 'virtual' ] );

            }




            // remove "Downloadable" checkbox

            if( isset( $options[ 'downloadable' ] ) ) {

                        unset( $options[ 'downloadable' ] );

            }




            return $options;




    } );
	add_filter( 'wpforms_mailcheck_enabled', '__return_false' );
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }				
}

add_action( 'after_setup_theme', 'fancy_lab_config', 0 );


