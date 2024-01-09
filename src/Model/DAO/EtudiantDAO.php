<?php

namespace DAO;

//require_once './../../../Config/appConfig.php';

use BO\EtudiantBO;
use PDO;
use PDOException;


class EtudiantDAO {
    private PDO $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create(EtudiantBO $etudiant): bool
    {
        try {
            $query = "INSERT INTO etudiant ( nomEtu, prenomEtu, photoEtu, mailEtu, telEtu, loginEtu, mdpEtu, speEtu,idClasse, idTut) 
                      VALUES ( ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([ $etudiant->getNomEtu(), $etudiant->getPrenomEtu(), $etudiant->getPhotoEtu(), $etudiant->getMailEtu(), $etudiant->getTelEtu(), $etudiant->getLoginEtu(), $etudiant->getmdpEtu(), $etudiant->getSpeEtu(),$etudiant->getIdClasse(),$etudiant->getIdTut()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function read($idEtu): ?EtudiantBO
    {
        try {
            $query = "SELECT * FROM etudiant WHERE idEtu = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$idEtu]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return new EtudiantBO(
                    nomEtu: $result['nomEtu'],
                    prenomEtu: $result['prenomEtu'],
                    photoEtu: $result['photoEtu'],
                    mailEtu: $result['mailEtu'],
                    telEtu: $result['telEtu'],
                    loginEtu: $result['loginEtu'],
                    mdpEtu: $result['mdpEtu'],
                    speEtu: $result['speEtu'],
                    idClasse: $result['idClasse'],
                    idTut: $result['idTut'],
                    idEtu: $result['idEtu'],

                );
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function update(EtudiantBO $etudiant): bool
    {
        try {
            $query = "UPDATE etudiant SET nomEtu = ?, prenomEtu = ?, photoEtu = ?, mailEtu = ?, telEtu = ?, loginEtu = ?, mdpEtu = ?, speEtu = ? WHERE idEtu = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$etudiant->getNomEtu(), $etudiant->getPrenomEtu(), $etudiant->getPhotoEtu(), $etudiant->getMailEtu(), $etudiant->getTelEtu(), $etudiant->getLoginEtu(), $etudiant->getmdpEtu(), $etudiant->getSpeEtu(), $etudiant->getIdEtu()]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function delete($idEtu): bool
    {
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
    /*
    public function getall(){
        try {

            $stmt = $this->conn->prepare(
                "SELECT * FROM etudiant "
            );
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                var_dump($result);
            }
        } catch (PDOException $e){
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    */public function getAll(): ?array {
    $query = "SELECT * FROM Etudiant";
    $stmt = $this->conn->query($query);
    $etudiant = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    return $etudiant;
}
}
