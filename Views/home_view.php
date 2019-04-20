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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ducimus aspernatur iste harum culpa possimus est vero pariatur rem repellendus, accusantium minima ut labore beatae, perferendis soluta recusandae nesciunt eligendi.</p>
        </main>

        <footer>
            <!-- Pied de page -->
            Je suis le footer....
        </footer>

        <script src="" async defer></script>
    </body>
</html>