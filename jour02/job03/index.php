<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <header>
        <nav class="nav-wrapper deep-purple lighten-1">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Recherche</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="index.php">
            <label for="civilité">Civilité:</label>
            <input type="radio" name="civilité" value="Monsieur" />
            <label for="Monsieur">Monsieur</label>
            <input type="radio" name="civilité" value="Madame" />
            <label for="Madame">Madame</label>
            <label for="name">Votre nom</label>
            <input type="text" name="name" />
            <label for="firstname">Votre prénom</label>
            <input type="text" name="firstname" />
            <input type="email" id="email" />
                    <label for="email">Votre adresse mail</label>
            <label for="adress">Votre adresse</label>
            <input type="text" name="adress" />
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" />
            <label for="pass">Confimer votre mot de passe</label>
            <input type="password" name="pass" />
            <label for="passion">Quelles sont vos passions ?</label>
            <input type="checkbox" name="info" />
            <label for="info">Informatique</label>
            <input type="checkbox" name="voyage" />
            <label for="voyage">Voyages</label>
            <input type="checkbox" name="sport" />
            <label for="sport">Sport</label>
            <input type="checkbox" name="lecture"/>
            <label for="lecture">Lecture</label>
            <input type="submit" />
        </form>
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
</body>

</html>
