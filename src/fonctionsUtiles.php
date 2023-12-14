<?php
require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';
function connectBdd(array $infoBdd): ?\PDO {
    $bd = null;
    $myport = ($infoBdd['port']);
    $type = ($infoBdd['type']);
    $myinterface = ($infoBdd['interface']);
    $myhost = ($infoBdd['host']);
    $Charset = ($infoBdd['charset']);
    $DBname = ($infoBdd['dbname']);
    $meUser = ($infoBdd['user']);
    $mdp = ($infoBdd['pass']);

    $dsn = "mysql:dbname=$DBname;host=$myhost;port=$myport;charset=$Charset";

    $bd = new \PDO($dsn, $meUser, $mdp);



    return $bd;

}