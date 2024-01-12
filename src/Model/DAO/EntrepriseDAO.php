<?php

namespace DAO;

use BO\EntrepriseBO;
use PDO;
use PDOException;

require_once 'Database.php';
require_once 'EntrepriseBO.php';

class EntrepriseDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(EntrepriseBO $entreprise): bool
    {
        try {
            $query = "INSERT INTO entreprise (idEntre, nomEntre, adresseEntre, villeEntre, codePostEntre) 
                      VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$entreprise->getIdEntre(), $entreprise->getNomEntre(), $entreprise->getAdresseEntre(), $entreprise->getVilleEntre(), $entreprise->getCodePostEntre()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function read($idEntre) {
        try {
            $query = "SELECT * FROM entreprise WHERE idEntre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idEntre]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new EntrepriseBO($result['idEntre'], $result['nomEntre'], $result['adresseEntre'], $result['villeEntre'], $result['codePostEntre']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(EntrepriseBO $entreprise): bool
    {
        try {
            $query = "UPDATE entreprise SET nomEntre = ?, adresseEntre = ?, villeEntre = ?, codePostEntre = ? WHERE idEntre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$entreprise->getNomEntre(), $entreprise->getAdresseEntre(), $entreprise->getVilleEntre(), $entreprise->getCodePostEntre(), $entreprise->getIdEntre()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idEntre): bool
    {
        try {
            $query = "DELETE FROM entreprise WHERE idEntre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idEntre]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}