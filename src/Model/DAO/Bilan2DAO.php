<?php

namespace DAO;

use BO\Bilan2BO;
use PDO;
use PDOException;

require_once 'Database.php';
require_once 'Bilan2BO.php';

class Bilan2DAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(Bilan2BO $bilan2): bool
    {
        try {
            $query = "INSERT INTO bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2) 
                      VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan2->getIdBil2(), $bilan2->getDateBil2(), $bilan2->getNotedosBil2(), $bilan2->getNoteoralBil2(), $bilan2->getRemarqueBil2(), $bilan2->getMemoirBil2()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idBil2) {
        try {
            $query = "SELECT * FROM bilan_2 WHERE idBil2 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBil2]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new Bilan2BO($result['idBil2'], $result['dateBil2'], $result['notedosBil2'], $result['noteoralBil2'], $result['remarqueBil2'], $result['memoirBil2'],['idEtu']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(Bilan2BO $bilan2): bool
    {
        try {
            $query = "UPDATE bilan_2 SET dateBil2 = ?, notedosBil2 = ?, noteoralBil2 = ?, remarqueBil2 = ?, memoirBil2 = ? WHERE idBil2 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$bilan2->getDateBil2(), $bilan2->getNotedosBil2(), $bilan2->getNoteoralBil2(), $bilan2->getRemarqueBil2(), $bilan2->getMemoirBil2(), $bilan2->getIdBil2()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idBil2): bool
    {
        try {
            $query = "DELETE FROM bilan_2 WHERE idBil2 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idBil2]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}