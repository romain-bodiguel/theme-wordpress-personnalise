<?php

get_header();

//bloginfo('name');



// the_title: affiche le titre du post en cours
// get_the_title: retourne la valeur du titre

// Exemple:

// the_title();

// echo get_the_title();

// the_content();

// $content = get_the_content();

// Liste les catégories
//wp_list_categories());

?>
<main class="right">
    <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title">Latest News</h2>
        <div class="posts">

        <?php
            if(is_404()) {
                echo "Page introuvable...";
                ?>
                <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
                <?php
            };

            if (have_posts()) {
                while (have_posts()) {
                    // Très important: va dire que tous les tags font référence au post en cours de lecture par la boucle
                    // Et si on ne le met pas le while entre dans une boucle infinie
                    the_post(); 
                    $allCategories = get_the_category();
        ?> 
        <article class="post">
            <?php
                foreach($allCategories as $category) {
            ?>
            <a href="<?= get_category_link($category); ?>" class="post__category post__category--color-<?= $category->slug; ?>"><?= $category->name; ?></a>
            <?php
                };
            ?>
            <h3><?php the_title(); ?></h3>
            <div class="post__meta">
            <img class="post__author-icon" src="<?= get_template_directory_uri(); ?>/images/icon-<?= get_the_author_meta('nickname'); ?>.png" alt="">
                <strong class="post__author"><?php the_author(); ?></strong>
                <?php //https://developer.wordpress.org/reference/functions/get_the_date/ ?>
                <time datetime="<?= get_the_date('Y-m-d'); ?>">
                    <?php 
                        // the_date() nous retournait uniquement la date de l'article si il avait été modifié, mais get_the_date() récupère bien une date de création ou de modification, mais il faut l'afficher avec un echo
                        // get_the_date() accepte en premier paramètre le format de la date
                        echo get_the_date();
                    ?>
                </time>
            </div>
            <p>
                <?php 
                // Résumé de notre the_content() : the_excerpt()
                the_excerpt(); 
                ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="post__link">Continue reading</a>

            <?php 
                // Si je ne suis pas sur ma page d'accueil, afficher un bouton de retour vers la home
                if(!is_home()) {
            ?>
            <br>
            <a href="<?= home_url(); ?>" class="post__link">Back to home</a>
            <?php
                }
            ?>
        </article>
        <?php 
                }
            };
        ?>
</div>
</main>
<?php
get_footer();
?>
