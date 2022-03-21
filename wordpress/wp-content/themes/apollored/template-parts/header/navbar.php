<?php
/**
 * Affiche la navbar du site
 */

 // https://developer.wordpress.org/reference/functions/wp_nav_menu/
 // wp_nav_menu affiche notre menu et prend en param un tableau

/*
'menu' = le nom du menu ('Menu' pour mon paramétrage BO)

'menu_class' = les classes de notre élément ul de menu (nous avons besoin de 'left__nav')

'container' = le conteneur de notre menu (par défaut div mais pour nous nav)

'echo' = est-ce que notre menu sera affiché automatiquement à l'exec de wp_nav_menu (true par defaut)
 */

wp_nav_menu(
    [
        'menu' => 'Menu',
        'menu_class' => 'left__nav',
        'container' => 'nav',
        'echo' => true
    ]
);
?>
<!--
<nav>
    <ul class="left__nav">
    <li class="left__nav-item"><a href="./plan_de_site.html" class="left__nav-link">Plan du site</a></li>
    <li class="left__nav-item"><a href="./mentions_legales.html" class="left__nav-link">Mentions légales</a></li>
    <li class="left__nav-item"><a href="./contact.html" class="left__nav-link">Contact</a></li>
    </ul>
</nav>
-->
