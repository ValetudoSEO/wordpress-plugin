<?php
/**
 * Plugin Name: Valetudo Toolbox
 * Description: Outils pour les sites du réseau Valetudo
 * Version: 1.0
 * Author: ValeTudo
 */

// Hook pour ajouter un élément de menu
add_action('admin_menu', 'valetudo_toolbox_menu');

function valetudo_toolbox_menu() {
    // Ajoute un nouvel élément de menu dans la barre d'administration
    add_menu_page(
        'Boîte à outils', // Titre de la page
        'Valetudo', // Titre du menu
        'manage_options', // Capacité requise pour voir ce menu
        'valetudo-toolbox', // Slug du menu
        'valetudo_toolbox_page_content', // Fonction qui affiche le contenu de la page
        'https://www.valetudo.io/wp-content/uploads/2019/07/favicon-32x32.png' // URL de l'icône
    );
}

function valetudo_toolbox_page_content() {
    ?>
    <div class="wrap">
        <h1>Boîte à outil</h1>
        <h2>Générer une page Mentions légales, Contact, Plan de site</h2>
        <p>
            Avant de lancer le scénario, penser 
            <a href="https://eu2.make.com/556720/scenarios/2018106/edit" target="blank">à aller dans Make</a> 
            pour câbler le scénario avec le site actuel.
        </p>

        <form id="hostingForm">
            <input type="radio" id="n0c" name="hosting" value="n0c">
            <label for="n0c">n0c</label><br>
            <input type="radio" id="o2switch" name="hosting" value="o2switch">
            <label for="o2switch">o2switch</label>
        </form>
        <br/>
        <button onclick="setLink()">Lancer le scenario</button>

        <h2>Générer une photo et un profil auteur</h2>
        <p>
            Avant de lancer le scénario, penser 
            <a href="https://eu2.make.com/556720/scenarios/2540889/edit" target="blank">à aller dans Make</a> 
            pour câbler le scénario avec le site actuel.
        </p>
        <button onclick="window.open('https://hook.eu2.make.com/euc5vr3pohvt3hm3kqjqtosy938xwnnp', '_blank')">Lancer le scenario</button>
        
        <h2>Générer une description pour les catégories</h2>
        <p>
            Avant de lancer le scénario, penser 
            <a href="https://eu2.make.com/556720/scenarios/2006852/edit" target="blank">à aller dans Make</a> 
            pour câbler le scénario avec le site actuel.
        </p>
        <button onclick="window.open('https://hook.eu2.make.com/d2poljvxfngpuj59j65m386qiw8qs639', '_blank')">Lancer le scenario</button>

        <script>
            function setLink() {
                var form = document.getElementById('hostingForm');
                var hosting = form.hosting.value;
                var url = `https://hook.eu2.make.com/2h089ub5sgv704gtvlibac9melptl49l?hosting=${hosting}`;
                window.open(url, '_blank');
            }
        </script>
    </div>
    <?php
}


