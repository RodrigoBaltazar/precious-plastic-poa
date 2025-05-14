<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="header-wrapper d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/eventos'); ?>">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/nossa-missao'); ?>">Nossa Missão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/contato'); ?>">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
 
