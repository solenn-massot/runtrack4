<?php

class user extends bdd
{
    public $name = "";
    public $id = "";
    public $rang = "";

    public function inscription($firstname, $lastname, $password, $email, $rang)
    {
        $connexion = $this->connect();
        $req = $connexion->query("SELECT id FROM user WHERE email = \"" . $email . "\"");
        $fetch = $req->fetchAll(PDO::FETCH_ASSOC);
        if (empty($fetch)) {
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
            $request = $connexion->prepare("INSERT INTO user (name, lastname, email, password, grade) VALUES (\"" . $firstname . "\", \"" . $lastname . "\", \"" . $email . "\", \"" . $password . "\", \"" . $rang . "\")");
            $request->execute();
            echo "good";
        } else {
            echo "mail";
        }
    }

    public function connexion($email, $password)
    {
        $connexion = $this->connect();
        if ($email != NULL && $password != NULL) {
            $req = $connexion->query("SELECT * FROM user WHERE email = '$email'");
            $fetch = $req->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($fetch)) {
                if (password_verify($password, $fetch[0]["password"])) {
                   $this->name = $fetch[0]["lastname"];
                   $this->id = $fetch[0]["id"];
                   $this->rang = $fetch[0]['grade'];
                    echo "co";
                } else
                    echo "mdp";
            } else
                echo "create";
        } else
            echo "miss";
    }

    public function demande_acces($id, $date)
    {
        $connexion = $this->connect();
        $req = $connexion->prepare("SELECT id FROM calendar WHERE id_user = $id AND date_demande = \"" .$date. "\"");
        $req->execute();
        $fetch = $req->fetchAll(PDO::FETCH_ASSOC);
        if (empty($fetch)) {
        $request = $connexion->prepare("INSERT INTO calendar(id_user, date_demande, state) VALUES ('$id','$date','en attente')");
        $request->execute();
        }
        else
        {
            echo "déjà demandé";
        }
    }

    public function getdemande($id)
    {
        $connexion = $this->connect();
        $request = $connexion->prepare("SELECT * FROM calendar WHERE id_user = '$id'"); 
        $request->execute();
        $fetch = $request->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($fetch);

    }

    public function getName()
    {
        $name = $this->name;
        return($name);
    }

    public function isConnected()
    {
        if($this->id != "")
        {
            return(true);
        }
        else
        {
            return(false);
        }
    }

    public function getId()
    {
        $id = $this->id;
        return($id);
    }

    public function getdemande_auto($id)
    {
        $connexion = $this->connect();
        $request = $connexion->prepare("SELECT date_demande FROM calendar WHERE id_user = '$id' AND state = 'check'");
        $request->execute();
        $fetch = $request->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($fetch)) {
            $date = $fetch[0]['date_demande'];
            $date = strtotime($date);
            echo json_encode($date);
        }
    }
    public function getGrade()
    {
        $grade = $this->rang;
        return($grade);
    }
    
    public function demande_admin()
    {
        $connexion = $this->connect();
        $request = $connexion->prepare("SELECT date_demande, user.name, user.lastname FROM calendar INNER JOIN user ON calendar.id_user = user.id WHERE state = 'en attente'");
        $request->execute();
        $fetch = $request->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($fetch);
    }
}