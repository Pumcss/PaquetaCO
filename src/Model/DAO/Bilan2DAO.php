<?php

namespace DAO;

require_once 'Database.php';
require_once 'Bilan2BO.php';

class Bilan2DAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(Bilan2BO $bilan2) {
        try {
            $query = "INSERT INTO bilan2 (idBilz, datbil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBi2) 
                      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan2->getIdBilz(), $bilan2->getDatbil2(), $bilan2->getNotedosBil2(), $bilan2->getNoteoralBil2(), $bilan2->getRemarqueBil2(), $bilan2->getMemoirBi2()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idBilz) {
        try {
            $query = "SELECT * FROM bilan2 WHERE idBilz = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBilz]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Bilan2BO($result['idBilz'], $result['datbil2'], $result['notedosBil2'], $result['noteoralBil2'], $result['remarqueBil2'], $result['memoirBi2']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(Bilan2BO $bilan2) {
        try {
            $query = "UPDATE bilan2 SET datbil2 = ?, notedosBil2 = ?, noteoralBil2 = ?, remarqueBil2 = ?, memoirBi2 = ? WHERE idBilz = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan2->getDatbil2(), $bilan2->getNotedosBil2(), $bilan2->getNoteoralBil2(), $bilan2->getRemarqueBil2(), $bilan2->getMemoirBi2(), $bilan2->getIdBilz()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idBilz) {
        try {
            $query = "DELETE FROM bilan2 WHERE idBilz = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBilz]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}