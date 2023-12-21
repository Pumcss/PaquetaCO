<?php

namespace DAO;

use BO\ParametreBO;
use PDOException;

require_once 'Database.php';
require_once 'ParametreBO.php';

class ParametreDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(ParametreBO $parametre) {
        try {
            $query = "INSERT INTO parametre_ (idParametreBil1, datelimiteBil1, dateLimiteBil2) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$parametre->getIdParametreBil1(), $parametre->getDatelimiteBil1(), $parametre->getDateLimiteBil2()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idParametreBil1) {
        try {
            $query = "SELECT * FROM parametre_ WHERE idParametreBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idParametreBil1]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new ParametreBO($result['idParametreBil1'], $result['datelimiteBil1'], $result['dateLimiteBil2']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(ParametreBO $parametre) {
        try {
            $query = "UPDATE parametre_ SET datelimiteBil1 = ?, dateLimiteBil2 = ? WHERE idParametreBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$parametre->getDatelimiteBil1(), $parametre->getDateLimiteBil2(), $parametre->getIdParametreBil1()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idParametreBil1) {
        try {
            $query = "DELETE FROM parametre_ WHERE idParametreBil1 = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idParametreBil1]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}