<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_body_open(); ?>
    <script defer src="https://javascript.info/article/script-async-defer/long.js?speed=1"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/nouveaustyles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/webfils/js/OwlCarousel/dist/assets/owl.carousel.min.css">
    <!--Récupère l'URI=(url) du répertoire de modèles pour le thème actif. -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/webfils/js/OwlCarousel/dist/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <header>

        <nav>
            <!--menu cree avec wordpress-->
            <div class="menuprincip">
                <span><?php wp_nav_menu('primary')  ?></span>

            </div>

            <div class="body-top"></div>
                <div class="mobile-menu">☰</div>
                    <div class="nav-bar" id="nav-bar">
                        <ul>
                            <li><a href="https://fr-fr.facebook.com/" title="redirection vers Facebook" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/?lang=fr" title="redirection vers Twitter" target="_blank">Twitter</a></li>
                        </ul>
                    </div>
        </nav>
        <script src="./js/racoon.js"></script>

    </header>
</body>

</html>