<?php
/**
 * Le header
 * 
 * Affiche le header sur tous les templates
 *
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php 
    // Chargement des headers WP ainsi que de la barre d'affichage en haut
    // il est INDISPENSABLE
    wp_head(); 
    ?>
</head>
<body>
    <div class="wrapper"><!--div wrapper-->
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <?php 
        // Récupération du template site-header.php dans le dossier template-parts/header/
        get_template_part('template-parts/header/navbar'); 
        ?>
      </header>