<?php

namespace DAO;

use BO\TuteurEcoleBO;
use PDO;
use PDOException;

require_once 'Database.php';
require_once 'TuteurEcoleBO.php';

class TuteurEcoleDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(TuteurEcoleBO $tuteur) {
        try {
            $query = "INSERT INTO tuteur_ecole ( nomTut, prenomTut, numTut, mailTut, nbalterTut, loginTut, mdpTut, roleTut) 
                      VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([ $tuteur->getNomTut(), $tuteur->getPrenomTut(), $tuteur->getNumTut(), $tuteur->getMailTut(), $tuteur->getNbalterTut(), $tuteur->getLoginTut(), $tuteur->getMdpTut(), $tuteur->getRoleTut()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idTut) {
        try {
            $query = "SELECT * FROM tuteur_ecole WHERE idTut = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idTut]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new TuteurEcoleBO(

                    nomTut: ['nomTut'],
                    prenomTut: ['prenomTut'],
                    numTut: ['numTut'],
                    mailTut: ['mailTut'],
                    nbalterTut: ['nbalterTut'],
                    loginTut: ['loginTut'],
                    mdpTut: ['mdpTut'],
                    roleTut: ['roleTut'],
                    idTut: ['idTut']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(TuteurEcoleBO $tuteur) {
        try {
            $query = "UPDATE tuteur_ecole SET nomTut = ?, prenomTut = ?, numTut = ?, mailTut = ?, nbalterTut = ?, loginTut = ?, mdpTut = ?, roleTut = ? WHERE idTut = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$tuteur->getNomTut(), $tuteur->getPrenomTut(), $tuteur->getNumTut(), $tuteur->getMailTut(), $tuteur->getNbalterTut(), $tuteur->getLoginTut(), $tuteur->getMdpTut(), $tuteur->getRoleTut(), $tuteur->getIdTut()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idTut) {
        try {
            $query = "DELETE FROM tuteur_ecole WHERE idTut = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idTut]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}