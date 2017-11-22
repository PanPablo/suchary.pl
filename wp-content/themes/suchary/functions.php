<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function jokes_enqueue_script() {


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/style.css',
        true );

    wp_enqueue_script(
        'jq',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js',
        true );

    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/js/app.js',
        true );



}
add_action( 'wp_enqueue_scripts' , 'jokes_enqueue_script' );

//paginacja

if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
        global $wp_query;
        $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;
//
//add_action( 'pre_get_posts', 'include_tags_in_search' );
//function include_tags_in_search($query){
//    if($query->is_search){
//        $terms = explode(' ', $query->get('s'));
//        $query->set('tax_query', array(
//            'relation'=>'OR',
//            array(
//                'taxonomy'=>'post_tag',
//                'field'=>'slug',
//                'terms'=>'image'
//            )
//        ));
//    }
//}


