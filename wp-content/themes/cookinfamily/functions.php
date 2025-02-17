<?php
/* Admin page with custom settings */

function cookinfamily_add_admin_page()
{
    add_menu_page('Paramètres du thème CookInFamily', 'CookInFamily', 'manage_options', 'cookinfamily-settings', 'cookinfamily_theme_settings', 'dashicons-admin-settings', 60);
}

function cookinfamily_theme_settings()
{
    echo '<h1>' . get_admin_page_title() . '</h1>';

    echo '<form action="options.php" method="post" name="cookinfamily_settings">';

    echo '<div>';

    settings_fields('cookinfamily_settings_fields');

    do_settings_sections('cookinfamily_settings_section');

    submit_button();

    echo '</div>';

    echo '</form>';
}

add_action('admin_menu', 'cookinfamily_add_admin_page');

function cookinfamily_settings_fields_validate($inputs)
{
    if (!empty($_POST)) {
        if (!empty($_POST['cookinfamily_settings_field_introduction'])) {
            update_option('cookinfamily_settings_field_introduction', $_POST['cookinfamily_settings_field_introduction']);
        }
        if (!empty($_POST['cookinfamily_settings_field_phone_number'])) {
            update_option('cookinfamily_settings_field_phone_number', $_POST['cookinfamily_settings_field_phone_number']);
        }
        if (!empty($_POST['cookinfamily_settings_field_email'])) {
            update_option('cookinfamily_settings_field_email', $_POST['cookinfamily_settings_field_email']);
        }
    }
    return $inputs;
}

function cookinfamily_settings_section_introduction()
{
    _e('Paramétrez les différentes options de votre thème CookInFamily.', 'cookinfamily');
}

function cookinfamily_settings_field_introduction_output()
{
    $value = get_option('cookinfamily_settings_field_introduction');

    echo '<input name="cookinfamily_settings_field_introduction" type="text" value="' . $value . '" />';
}

function cookinfamily_settings_field_phone_number_output()
{
    $value = get_option('cookinfamily_settings_field_phone_number');

    echo '<input name="cookinfamily_settings_field_phone_number" type="text" value="' . $value . '" />';
}

function cookinfamily_settings_field_email_output()
{
    $value = get_option('cookinfamily_settings_field_email');

    echo '<input name="cookinfamily_settings_field_email" type="text" value="' . $value . '" />';
}

function cookinfamily_settings_register()
{
    register_setting('cookinfamily_settings_fields', 'cookinfamily_settings_fields', 'cookinfamily_settings_fields_validate');
    add_settings_section('cookinfamily_settings_section', __('Paramètres', 'cookinfamily'), 'cookinfamily_settings_section_introduction', 'cookinfamily_settings_section');
    add_settings_field('cookinfamily_settings_field_introduction', __('Introduction', 'cookinfamily'), 'cookinfamily_settings_field_introduction_output', 'cookinfamily_settings_section', 'cookinfamily_settings_section');
    add_settings_field('cookinfamily_settings_field_phone_number', __('Numéro de téléphone', 'cookinfamily'), 'cookinfamily_settings_field_phone_number_output', 'cookinfamily_settings_section', 'cookinfamily_settings_section');
    add_settings_field('cookinfamily_settings_field_email', __('Adresse e-mail', 'cookinfamily'), 'cookinfamily_settings_field_email_output', 'cookinfamily_settings_section', 'cookinfamily_settings_section');
}

add_action('admin_init', 'cookinfamily_settings_register');

/* Register a new type "Ingrédients" */

function cookinfamily_register_custom_post_types()
{
    $labels_ingredient = array(
        'menu_name'         => __('Ingrédients', 'cookinfamily'),
        'name_admin_bar'    => __('Ingrédient', 'cookinfamily'),
        'add_new_item'      => __('Ajouter un nouvel ingrédient', 'cookinfamily'),
        'new_item'          => __('Nouvel ingrédient', 'cookinfamily'),
        'edit_item'         => __('Modifier l\'ingrédient', 'cookinfamily'),
    );
    $args_ingredient = array(
        'label'             => __('Ingrédients', 'cookinfamily'),
        'description'       => __('Ingrédients', 'cookinfamily'),
        'labels'            => $labels_ingredient,
        'supports'          => array('title', 'thumbnail', 'excerpt', 'editor'),
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'menu_position'     => 40,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export'        => true,
        'has_archive'       => true,
        'exclude_from_search'   => false,
        'publicly_queryable' => true,
        'capability_type'   => 'post',
        'menu_icon'  => 'dashicons-drumstick',
    );
    register_post_type('cif_ingredient', $args_ingredient);
}

add_action('init', 'cookinfamily_register_custom_post_types', 11);
