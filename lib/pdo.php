<?php
define('DSN', 'mysql:host=localhost;dbname=bloc-so;charset=utf8');
define('DB_USER', 'root');
define('DB_PASS', '');

/**
 * Fonction de connexion à la BD
 *
 * @return PDO
 */
function getPDO()
{
    //option de connexion
    $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    return new PDO(DSN, DB_USER, DB_PASS, $option);
}


/**
 * on détermine si les données ont été postés
 * si l'ensemble des données est sup à 0 alors on retourne la var postée
 *
 * @return boolean
 */
function isPosted()
{
    $isPosted = count($_POST) > 0;
    return $isPosted;
}