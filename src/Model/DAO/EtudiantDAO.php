<?php

namespace DAO;
use BO\EtudiantBO;


require_once '../../../Config/appConfig.php';


class EtudiantDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(EtudiantBO $etudiant) {
        try {
            $query = "INSERT INTO etudiant (idEtu, nomEtu, preEtu, photoEtu, mailEtu, telEtu, loginEtu, mapEtu, speEtu) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$etudiant->getIdEtu(), $etudiant->getNomEtu(), $etudiant->getPreEtu(), $etudiant->getPhotoEtu(), $etudiant->getMailEtu(), $etudiant->getTelEtu(), $etudiant->getLoginEtu(), $etudiant->getMapEtu(), $etudiant->getSpeEtu()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function read($idEtu) {
        try {
            $query = "SELECT * FROM etudiant WHERE idEtu = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idEtu]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new EtudiantBO($result['idEtu'], $result['nomEtu'], $result['preEtu'], $result['photoEtu'], $result['mailEtu'], $result['telEtu'], $result['loginEtu'], $result['mapEtu'], $result['speEtu']);
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(EtudiantBO $etudiant) {
        try {
            $query = "UPDATE etudiant SET nomEtu = ?, preEtu = ?, photoEtu = ?, mailEtu = ?, telEtu = ?, loginEtu = ?, mapEtu = ?, speEtu = ? WHERE idEtu = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$etudiant->getNomEtu(), $etudiant->getPreEtu(), $etudiant->getPhotoEtu(), $etudiant->getMailEtu(), $etudiant->getTelEtu(), $etudiant->getLoginEtu(), $etudiant->getMapEtu(), $etudiant->getSpeEtu(), $etudiant->getIdEtu()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idEtu) {
        try {
            $query = "DELETE FROM etudiant WHERE idEtu = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idEtu]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
