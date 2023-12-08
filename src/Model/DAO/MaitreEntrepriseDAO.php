<?php

namespace DAO;

require_once 'Database.php';
require_once 'MaitreEntrepriseBO.php';

class MaitreEntrepriseDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(MaitreEntrepriseBO $maitre) {
        try {
            $query = "INSERT INTO maitreentreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre) 
                      VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$maitre->getIdMaitre(), $maitre->getNomMaitre(), $maitre->getPrenomMaitre(), $maitre->getTelMaitre(), $maitre->getMailMaitre()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read($idMaitre) {
        try {
            $query = "SELECT * FROM maitreentreprise WHERE idMaitre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idMaitre]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new MaitreEntrepriseBO($result['idMaitre'], $result['nomMaitre'], $result['prenomMaitre'], $result['telMaitre'], $result['mailMaitre']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(MaitreEntrepriseBO $maitre) {
        try {
            $query = "UPDATE maitreentreprise SET nomMaitre = ?, prenomMaitre = ?, telMaitre = ?, mailMaitre = ? WHERE idMaitre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$maitre->getNomMaitre(), $maitre->getPrenomMaitre(), $maitre->getTelMaitre(), $maitre->getMailMaitre(), $maitre->getIdMaitre()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idMaitre) {
        try {
            $query = "DELETE FROM maitreentreprise WHERE idMaitre = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idMaitre]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}