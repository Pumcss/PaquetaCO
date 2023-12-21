<?php

namespace DAO;

use BO\ClasseBO;
use PDO;
use PDOException;

require_once 'Database.php';
require_once 'ClasseBO.php';

class ClasseDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(ClasseBO $classe): bool
    {
        try {
            $query = "INSERT INTO classe (nomClasse) VALUES (?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$classe->getNomClasse()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($nomClasse) {
        try {
            $query = "SELECT * FROM classe WHERE nomClasse = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$nomClasse]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new ClasseBO($result['nomClasse']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(ClasseBO $classe): bool
    {
        try {
            $query = "UPDATE classe SET nomClasse = ? WHERE nomClasse = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$classe->getNomClasse(), $classe->getNomClasse()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($nomClasse): bool
    {
        try {
            $query = "DELETE FROM classe WHERE nomClasse = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$nomClasse]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}