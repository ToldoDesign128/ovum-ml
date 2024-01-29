<?php
/*Replace = mele*/

function mele()
{
    register_post_type(
        'mele',
        array(
            'labels'                =>          array(
                'name'              =>          'Mele',
                'singular_name'     =>          'mela',
                'all_items'         =>          'Tutti i macchinari',
                'add_new'           =>          'Aggiungi un nuovo macchinario',
                'add_new_item'      =>          'Aggiungi un nuovo macchinario',
                'edit_item'         =>          'Modifica macchinario',
                'new_item'          =>          'Nuovo macchinario',
                'view_item'         =>          'Visualizza macchinario',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'Mele',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          20,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'mele',
                'with-front'        =>          false,
            ),
            'has_archive'           =>          true,
            'capability_type'       =>          'post',
            'hierarchycal'          =>          false,
            'show_in_rest'          =>          false, //gutemberg disattivato
            'supports'              =>          array('title','thumbnail','excerpt') //campi supportati
        ),
        flush_rewrite_rules() /*fine delle opzioni*/
    );
}
add_action('init', 'mele');