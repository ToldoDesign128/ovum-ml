<?php
/*Replace = testimonials*/

function testimonials()
{
    register_post_type(
        'testimonials',
        array(
            'labels'                =>          array(
                'name'              =>          'Testimonianze',
                'singular_name'     =>          'testimonianza',
                'all_items'         =>          'Tutti le testimonianze',
                'add_new'           =>          'Aggiungi un nuovo testimonianza',
                'add_new_item'      =>          'Aggiungi un nuovo testimonianza',
                'edit_item'         =>          'Modifica testimonianza',
                'new_item'          =>          'Nuovo testimonianza',
                'view_item'         =>          'Visualizza testimonianza',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'testimonials',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          20,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'testimonials',
                'with-front'        =>          false,
            ),
            'has_archive'           =>          true,
            'capability_type'       =>          'post',
            'hierarchycal'          =>          false,
            'show_in_rest'          =>          false, //gutemberg disattivato
            'supports'              =>          array('title') //campi supportati
        ),
        flush_rewrite_rules() /*fine delle opzioni*/
    );
}
add_action('init', 'testimonials');