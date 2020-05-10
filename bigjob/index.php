<?php
include 'include/class/bdd.php';
include 'include/class/user.php';
session_start();
if(!isset($_SESSION['bdd']))
{
    $_SESSION['bdd'] = new bdd();
}
if(!isset($_SESSION['user']))
{
    $_SESSION['user'] = new user();
}

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="styles/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="styles/style.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body>
    <header>
        <?php include "include/header.php"?>
    </header>
    <main class="container" id="ag">
    <?php if($_SESSION['user']->isConnected() == true)
    {
        include "include/agenda.php";
    }
    else
    {
        include "connexion.php";
        
    }
    ?>
    <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Demande d'entrée</h4>
      <p id="demande"></p>
    </div>
    <div class="modal-footer">
      <a href="#!" id="confirmer_demande" class="modal-close waves-effect waves-green btn-flat">Oui</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
    </div>
  </div>
    </main>
    <footer class="page-footer bk-s">
        <div class="footer-copyright">
            <div class="container">
                © 2020 Solenn Massot
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>