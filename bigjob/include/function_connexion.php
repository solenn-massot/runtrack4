<?php
include 'class/bdd.php';
include 'class/user.php';
session_start();

if(isset($_POST['function']))
{
    $function = $_POST['function'];
    switch($function)
    {
        case "inscription":
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $password = $_POST["password"];
            $email = $_POST['email'];
            $rang = "membre";
            $_SESSION['user']->inscription($firstname, $lastname, $password, $email, $rang);
        break;

        case "connexion":
            $email = $_POST['email'];
            $password = $_POST['password'];
            $_SESSION['user']->connexion($email, $password);
        break;

        case "demande_acces":
            $id = $_SESSION['user']->getId();
            $timestamp = $_POST['date'];
            $timestamp = $timestamp + 86400;
            $date = date('Y-m-d', $timestamp);
            $_SESSION['user']->demande_acces($id, $date);
        break;

        case "getdemande":
            $id = $_SESSION['user']->getId();
            $_SESSION['user']->getdemande($id);
        break;

        case "acces_autorise":
            $id = $_SESSION['user']->getId();
            $_SESSION['user']->getdemande_auto($id);
        break;


        case "demande_admin":
            $_SESSION['user']->demande_admin();
        break;

        // case "modifier_admin":
        //     $id = $_SESSION["id"];
        //     $titre = $_POST['titre'];
        //     $description = $_POST['description'];
        //     $deadline = $_POST['deadline'];
        //     $bdd->create_Task($id, $titre, $description, $deadline);
        // break;
    }


}

?>