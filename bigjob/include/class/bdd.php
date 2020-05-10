<?php

class bdd
{
    
protected $connexion = "";

public function connect()
    {
        $connexion = new PDO('mysql:host=127.0.0.1;dbname=bigjob', 'root', '');
        if($connexion == NULL){
            return false;
        }
        return($connexion);
    }

   
}
