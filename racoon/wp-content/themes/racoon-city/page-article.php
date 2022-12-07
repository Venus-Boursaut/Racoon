<?php /* Template Name: Page Article */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Racoon
 */




get_header('racoon');
//affiche une nouvelle fois une image
// the_post_thumbnail(); appel l'image du gogueur

?>
<main id="primary" class="site-main">

    <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {
    ?>
        <img src="<?= get_template_directory_uri() . "/assets/img/RaccoonBackground.png" ?>" alt="Racoon">

    <?php
    };

    $args = array(
        'posts_per_page' => 4, /* affichage de 4 articles maximum */
        'post_status' => 'publish', /* qui a le statut "publié" */
        'orderby' => 'date', /* trié par date ( par defaut sera trié du plus rescent au plus vieux) */
    );

    $all_articles = new WP_Query($args);
    $all_articles = $all_articles->posts; /* va récupérer le résultat contenu dans la clé nommée "posts" */
    ?>

    <div class="articles">

        <div class="articles_containeur"> <?php
            foreach ($all_articles as $art) : ?>
                <article>
                <?= get_the_post_thumbnail($art); /*get_the_post_thumbnail  va afficher l'image de l'article en se basant sur l'ID contenu dans le tableau */ ?>
                    <div>
                        <time datetime="<?= $art->post_date ?>"> publier le <?= get_the_time('j F Y') ?></time><!-- va afficher le résultat détenu dans $art avec pour clé post_date -->
                        <h2><?= $art->post_title ?></h2> <!-- va afficher le résultat détenu dans $art avec pour clé post_title  -->
                        <p><?= $art->post_content ?></p> <!-- va afficher le résultat détenu dans $art avec pour clé post_content -->
                    </div>
                </article>
            <?php
            endforeach; ?>

        </div>
      
        <?php get_sidebar(); ?> 
        <span class="span"></span>
    </div>
</main><!-- #main -->

<?php

get_footer('racoon');
