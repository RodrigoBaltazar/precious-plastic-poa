<?php
// Habilitar suporte a imagens destacadas
add_theme_support('post-thumbnails');

add_theme_support('title-tag');

// Habilitar menus personalizados
add_theme_support('menus');

// Registrar um menu principal
function precious_plastic_registrar_menus() {
    register_nav_menu('menu-principal', 'Menu Principal');
}
add_action('after_setup_theme', 'precious_plastic_registrar_menus');

add_theme_support('custom-logo', [
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
]);

function precious_plastic_scripts() {
    // Adiciona o Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Adiciona o Bootstrap JS e dependências
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Seu próprio CSS do tema
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'precious_plastic_scripts');

