<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= ucfirst($page) ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->        
        
        <header>
            <!-- Navigation -->
            <ul>
                <li><a href="./?page=home">Accueil - (Home page)</a></li>
                <li><a href="./?page=contact">Contact - (Contact page)</a></li>
            </ul> <!-- /Navigation -->
        </header>

        <main>
            <!-- Page Content -->
            <h1><?= ucfirst($page) ?></h1>
            <hr>
            <article>
                <h2>Définition de SASS et de SCSS</h2>
                <p>Sass est un pré-processeur permettant d'écrire plus facilement et surtout beaucoup plus rapidement du CSS. Il existe deux syntaxe pour écrire du SASS. La première méthode s'appel : "SASS". qui elle est dépourvue d'accolade et surtout de point virgule... Imaginez un instant avoir un site tout fait, écrit en CSS surtout que votre fichier css fait lui plus de 2000 lignes de code et que pour X raisons vous souhaitez inclure sass et surtout la première méthode, vous devrez alors, enlevez chaque accolade et point virgule afin de respecter la syntaxe de la première méthode... D'avance bon courage à vous!
                La seconde méthode elle, appelé : "SCSS" permet d'écrire du code SASS de la même manière que l'on écrirait du code CSS. Ainsi si nous reprenons notre site écrit précédemment en CSS, nous n'aurions rien à changé sachant que SCSS s'écrit comme du CSS classique avec les accolades et les points virgules. A la différence qu'il sera possible d'imbriqué des sélecteurs dans des sélecteurs...
                La toute première méthode est aujourd'hui toujours fonctionnel et donc il est tout à fait possible d'écrire du CSS en SASS ou bien en SCSS. Bien entendu la seconde syntaxe sera beaucoup plus apprécié de la communauté.</p>
                <h2>Mais que veut dire SASS</h2>
                <dl>
                    <dt>S</dt>
                    <dd>Syntaticaly</dd>
                    <dt>A</dt>
                    <dd>Awesome</dd>
                    <dt>S</dt>
                    <dd>Style</dd>
                    <dt>S</dt>
                    <dd>Sheets</dd>
                </dl>
                <p>A savoir qu'un fichier écrit en SASS devra se terminer par .sass alors qu'en SCSS il devra quant à lui se terminer par .scss</p>
            </article>
            
        </main>

        <footer>
            <!-- Pied de page -->
            Je suis le footer....
        </footer>

        <script src="" async defer></script>
    </body>
</html>