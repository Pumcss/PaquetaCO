<?php
include '../../Config/globalConfig.php';

use BO\Bilan1BO;
use DAO\Bilan1DAO;

$bilan1DAO = new Bilan1DAO();

$datevisitebilan1= $_POST['DateVisiteBilan1'];
$notedosbilan1=$_POST['NotedosBilan1'];
$noteentrebilan1=$_POST['NoteEntretienBilan1'];
$noteoraleBilan1=$_POST['NoteOraleBilan1'];
$remarquebilan1=$_POST['RemarqueBilan1'];

$bilan1 = new Bilan1BO();