<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo() ?></title>
    <?php wp_head() ?>
    <link href="<?php get_theme_file_uri()?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body <?php body_class() ?>>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid d-flex justify-content-around">
            <a class="navbar-brand" href="<?php echo site_url() ?>"><?php bloginfo() ?></a>
            <button class="navbar-toggler border-0 hover:border-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarNavDropdown',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => ' bootstrap_5_wp_nav_menu_walker::fallback',
                    'walker'            => new bootstrap_5_wp_nav_menu_walker(),
                ));
                ?>
        </div>
    </nav>