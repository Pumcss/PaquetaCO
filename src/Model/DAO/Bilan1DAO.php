<?php

namespace DAO;


use BO\Bilan1BO;
use PDO;
use PDOException;


class Bilan1DAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(Bilan1BO $bilan1): bool
    {
        try {
            $query = "INSERT INTO bilan_1 (idBil1, datevisiteBil1, noteentreil1, notedosBil1, noteoraleBil1, remarqueBil1) 
                VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan1->getIdBil1(), $bilan1->getDatevisiteBil1(), $bilan1->getNoteentreil1(), $bilan1->getNotedosBil1(), $bilan1->getNoteoraleBil1(), $bilan1->getRemarqueBil1()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idBil1) {
        try {
            $query = "SELECT * FROM bilan1 WHERE idBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBil1]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Bilan1BO($result['idBil1'], $result['datevisiteBil1'], $result['noteentreil1'], $result['notedosBil1'], $result['noteoraleBil1'], $result['remarqueBil1'],$result['idEtu']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(Bilan1BO $bilan1) {
        try {
            $query = "UPDATE bilan_1 SET datevisiteBil1 = ?, noteentreil1 = ?, notedosBil1 = ?, noteoraleBil1 = ?, remarqueBil1 = ? WHERE idBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan1->getDatevisiteBil1(), $bilan1->getNoteentreil1(), $bilan1->getNotedosBil1(), $bilan1->getNoteoraleBil1(), $bilan1->getRemarqueBil1(), $bilan1->getIdBil1()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idBil1): bool
    {
        try {
            $query = "DELETE FROM bilan_1 WHERE idBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBil1]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}