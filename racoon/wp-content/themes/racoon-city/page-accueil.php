<?php /* Template Name: Page Accueil */ ?>

<?php get_header('racoon'); ?>
<!--menu de navigation -->

<main>


    <?php //affiche l'image principal
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {
    ?>
        <img src="<?= get_template_directory_uri() . "/assets/img/RaccoonBackground.png" ?>" alt="Racoon">
    <?php
    }; ?>

    <h1><?= get_field('titre_principal') //afficher le contenue du h1
        ?></h1>


    <!-- var_dump(get_field('carrousel')) permet d'afficher le carouselle  -->
    <?php  /*echo get_field('carrousel'); affiche toutes les images du carrousel get_the_post_thumbnail  va afficher l'image de l'article en se basant sur l'ID contenu dans le tableau */ ?>

    <div class="owl-carousel">


    <?php
			$image = get_field('image');
			$size = 'full';
			if (!empty($image)) : ?>
				<img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
			<?php endif; ?>


  
    </div>


    <h2>
        <?= get_field('titre_de_second_niveau') //afficher le contenue du second niveau
        ?>
    </h2>


    <p>
        <?php get_field('paragraphe') //afficher le contenue du paragraphe
        ?>
    </p>
    <?php // echo get_field('prochain'); va afficher array (tableau)
    ?>

    <?php //var_dump(get_field('prochain')) 
    ?>



    <?php $prochain = get_field('prochain');

    foreach ($prochain as $single) : ?>
        <div class="next">
            <p> <?= $single['paragraphe'] ?></p>
            <img src="<?= $single['illustration']['url']; ?>" alt="<?= $single['illustration']['alt'] ?>">
        </div>
    <?php endforeach ?>

</main>

<?php get_footer('racoon');

?>