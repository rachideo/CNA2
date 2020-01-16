# CNA-website

Projet sous Wordpress

Thème de base : [Shapely de Colorlib](https://colorlib.com/wp/themes/shapely/)

___

__Fichiers PHP modifiés :__
* Désactivation des sidebars dans les pages : inc/extra.php, archive.php, attachment.php, index.php, page.php, search.php, single.php
* Suppression de `<?php echo esc_attr( $layout_class ); ?>` : page-templates/full-width.php, sidebar-left.php, sidebar-right.php
* Autres modifications spécifiques : 
    - template-parts/content-grid-small.php (Passage d'un H2 en H5)
    - template-parts/content-page.php (suppresion d'un titre `<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>`)
    - header.php (modification des classes de div : passage de right en left, suppression d'un lien vide)
    - index.php (suppression code sidebars, modification nombre de colonne bootstrap, suppresion $layout_class)


__Fichiers CSS modfiés :__
* layouts/content-sidebar.css (suppression du contenu)
* layouts/sidebar-content.css (suppression du contenu)
* Modification de style.css :
    - Ajoutés :
        - propriétés pour le bouton "goDown" du cover de la page d'accueil
        - propriétés de l'image principale du cover de la page d'accueil
        - propriétés des cartes de la page d'accueil
        - propriétés pour empêcher Chrome d'ajouter la sélection d'une div
        - propriétés d'une div dans les pages villes
        - ajout de "scroll-behavior: smooth;" à html
    - Modifiés : 
        - couleurs des liens de la navigation
        - margin de .hentry dans Content/Posts and pages
        - max-width de `.content hr` dans Global Styles
        - couleur des liens dans Typography
        - bg-primary dans Colours
        - padding dans `section, footer` dans Sections
        - color, border, background dans Buttons
        - taille et bordure de nav-bar dans Navigation
        - logo et dropdown dans Navigation
        - blocage des propriétés top-stick de nav-bar (code en commentaire)
        - couleur des icônes dans Icon Features
        - bg-color des blockquote dans Blog
        - couleur lien dans footer
        - bg-color de .video-widget .video-controls button
        - couleur bordure blockquote
        - d'autres couleurs en général dans la section Layout, Widget, Content
    - Supprimés : 
        - du margice entre content et footer 
        - bloquequote dans Typography
        - propriétés inutiles des réseaux sociaux dont on a pas besoin dans Layout
        - toutes la parties concernant les commentaires
        
