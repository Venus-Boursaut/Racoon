<?php /* Template Name: Page Contact */?>
<?php get_header('racoon'); ?>


<main id="primary" class="site-main">

    <?php
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
        else{	
            ?>
            <img src="<?= get_template_directory_uri()."/assets/img/RaccoonBackground.png" ?>" alt="Racoon" >
            <?php
        };?>

<?php
// the_content();
?>
</main>
