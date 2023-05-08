<?php

//On met le lien avec la BDD dans une fonction pour nous permettre de la rapppeler plus tard ! Sinon hors de portée
function connexion(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=landing_page;charset=utf8', 'root', '');
        return $db;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

// On récupère TOUT le contenu de la table pricing
function getAllPricings(){

    //Essentielle sinon pas de lien avec la base de données !!!
    $db = connexion();
    $sqlQuery = 'SELECT * FROM pricing';
    $pricing = $db->prepare($sqlQuery);
    $pricing->execute();
    return $pricing->fetchAll();

}

// function counterPricing(){

//     if(isset($_POST) && isset($_POST["submit"])){

//         $db = connexion();
//         $sqlQuery1 = 'UPDATE pricing SET counter = (counter + 1)
//         WHERE id_pricing = :id_pricing';
//         $pricing1 = $db->prepare($sqlQuery1);
//         $pricing1->bindValue('id_pricing', $_POST["id_pricing"], PDO::PARAM_INT);
//         $pricing1->execute();
//         return $pricing1->fetchAll();
//     }

//     for($i = 0; $i > 0; $i++){

//     }
//     }
// }

?>

