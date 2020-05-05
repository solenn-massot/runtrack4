<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <header>
        <nav class="nav-wrapper deep-purple lighten-1">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Recherche</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
        <div class="row">
            <h1>Merci de remplir ce formulaire</h1>
            <form action="index.php" class="col s12">
                <i class="material-icons prefix">contacts</i>
                <label for="group1">Civilité:</label>
                <p>
                    <label>
                        <input class="with-gap deep-purple darken-2" name="group1" type="radio" />
                        <span>Monsieur</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input class="deep-purple darken-2 with-gap" name="group1" type="radio" />
                        <span>Madame</span>
                    </label>
                </p>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="name" />
                    <label for="name">Votre nom</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">perm_identity</i>
                    <input type="text" id="firstname" />
                    <label for="firstname">Votre prénom</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">alternate_email</i>
                    <input type="email" id="email" />
                    <label for="email">Votre adresse mail</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">home</i>
                        <input type="text" id="adress" />
                        <label for="adress">Votre adresse</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" id="password" />
                    <label for="password">Votre mot de passe</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" id="pass" />
                    <label for="pass">Confimer votre mot de passe</label>
                </div>
                <i class="material-icons prefix">favorite</i>
                <label for="passion">Quelles sont vos passions ?</label>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Lecture</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Informatique</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Voyages</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="checkbox" />
                        <span>Sport</span>
                    </label>
                </p>
                <button class="btn waves-effect waves-light" type="submit" name="action">Valider
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
</section>
    </main>
    <footer class="page-footer deep-purple ">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Ceci est un footer</h5>

                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                        <li><a class="grey-text text-lighten-3" href="index.php">Recherche</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright deep-purple darken-2">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>