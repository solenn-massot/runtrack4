<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Recherche</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <section>
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
            <label for="adress">Votre adresse</label>
            <input type="text" name="adress" />
            <input type="email" id="email" />
                    <label for="email">Votre adresse mail</label>
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
            <input type="checkbox" name="lecture" />
            <label for="lecture">Lecture</label>
            <input type="submit" />
        </form>
    </section>
    </main>
    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Recherche</a></li>
        </ul>
    </footer>
</body>

</html>