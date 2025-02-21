<?php

/**
 * Plugin Name: Administration
 * Plugin URI:  https://www.cookinfamily.fr
 * Description: Ajoutez une page d'administration pour modifier la couleur de fond de votre site WordPress.
 * Version:     1.0.0
 * Author:      Cycle9898
 * Author URI:  https://github.com/Cycle9898
 * Text Domain: administration
 */

/* Sub-menu inside WP parameters */

function administration_add_admin_page()
{
    add_submenu_page(
        'options-general.php',
        'Mes options',
        'Mes réglages',
        'manage_options',
        'administration',
        'administration_page'
    );
}

function administration_page()
{
    $colors = array(
        'ffffff' => 'Blanc',
        '000000' => 'Noir',
        'ff0000' => 'Rouge',
        '00ff00' => 'Vert',
        '0000ff' => 'Bleu'
    );

    if (isset($_POST['submit'])) {
        update_option('bg_color', $_POST['bg_color']);
    }

    $current_color = get_option('bg_color');
?>
    <div class="wrap">
        <h1>Mes options</h1>
        <form method="post" action="">
            <label for="bg_color">Choisissez une couleur : </label>
            <select id="bg_color" name="bg_color">
                <?php foreach ($colors as $value => $label) { ?>
                    <option value="<?php echo $value; ?>" <?php selected($current_color, $value); ?>><?php echo $label; ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="submit" class="button button-primary" value="Enregistrer" />
        </form>
    </div>
<?php
}

add_action('admin_menu', 'administration_add_admin_page');

/* Apply parameters */

function administration_apply_bg_color()
{
    $bg_color = get_option('bg_color');
?>
    <style>
        body {
            background-color: <?php echo "#" . esc_attr($bg_color); ?>;
        }
    </style>
<?php
}

add_action('wp_head', 'administration_apply_bg_color');
