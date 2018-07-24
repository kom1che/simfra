<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SimFRA - Service</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput']; ?>.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo_art.png" />

</head>
<body>
<div class="loader">
    <div class="loader_inner"></div>
</div>

<header class="main_head main_color_bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/gifka_bgc_2s.gif" data-z-index="1" data-position="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo_container">
                    <?php dynamic_sidebar('logo'); ?>
                </div>
                <div class="mnu_wrap">
                    <div class="burger-menu">
                        <span class="line-1"></span>
                        <span class="label">menu</span>
                        <span class="line-3"></span>
                    </div>
                </div>
                <nav class="top-mnu">
                    <ul>
                        <li><a href="#about_ser">About Service</a></li>
                        <li><a href="#project">Projects</a></li>
                        <li><a href="#about_me">About Me</a></li>
                        <li><a href="#contacts">Contacts</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="top-wrapper">
        <div class="top-description">
            <div class="top-center">
                <div class="layer-topper"></div>
                <div class="top-text">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <p><?php echo get_bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</header>