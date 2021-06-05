<?php
require "lib/pdo.php";

/**
 * Retourne toutes les citations de la BD à partir d'une requête
 * 
 * @return array
 */
function getAllListe()
{
    //création de la connection
    $cn = getPDO();

    //Requête pour extraire une citation
    $query = $cn->query("SELECT * FROM liste");

    //Récupération des données de la requête
    $listeBloc = $query->fetchAll(PDO::FETCH_ASSOC);

    return $listeBloc;
}