<?php
//  Basculer à TRUE pour activer les affichages de debug, les var_dump ou les dump_var
if(!defined('DUMP')) {
    define('DUMP', true);
}

//  L'url de votre site, sera utile dans les pages en cas de déplacement du site...
define('URL_BASE', "http://localhost/PaquetaCO");


/*
 *   Exercice 1 question 1 : Vos informations de connexion à la BDD
 */
$infoBdd = array(
    'interface' => 'pdo',
    'type' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'charset' => 'UTF8',
    'dbname' => 'P2024_2SIO_Projet_Tutorat',
    'user' => 'root',
    'pass' => '',
);

require_once 'globalConfig.php';

// function pour gérer les dump_var
if(!function_exists('dump_var'))
{
    function dump_var($var, $dump=DUMP, $msg=null)
    {
        if($dump) {
            if($msg)
                echo"<p><strong>$msg</strong></p>";
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }
    }
}