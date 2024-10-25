<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- Custom Fonts for Hacker Aesthetic -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!-- Load WordPress Head -->
    <?php wp_head(); ?>
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    
    <!-- Custom Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>
<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="site-header">
        <!-- Logo has been removed -->

        <!-- Main Navigation Menu -->
        <nav class="main-navigation">
            <?php wp_nav_menu(); ?> <!-- Ensure custom menu is assigned to avoid default "Sample Page" -->
        </nav>

        <!-- Terminal Effect Text -->
        <p class="terminal-typing">root@HH.local:~$ _</p>
    </header>

    <!-- Start of Main Content -->
    <div id="main-content">
