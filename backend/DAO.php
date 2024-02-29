<?php
header("Access-Control-Allow-Origin: *");
    class DAO{

        function getPDO(){
            return new PDO("mysql:host=mysql;dbname=cloud;","willy","root");
        }

        function authentification($login, $password){
            $pdo = $this->getPDO();
            $stmt=$pdo->prepare("SELECT * FROM client  WHERE login = ? AND pass = ?");
            $stmt->execute(array($login,$password));
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $_GET=$row;
                return 1;
            }else return 0;
        }

        function executeQuery($sql){
            $pdo = $this->getPDO();
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $clients=[];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $clients[]=$row;
            }
            return $clients;
        }


//CLIENT////////

        function ajouterClient($obj){
            $pdo = $this->getPDO();
            $stmt=$pdo->prepare("INSERT INTO client( login,adresse,telephone,email,pass) VALUES(?,?,?,?,?)");
            $stmt->execute(array($obj->get("n"),$obj->get("a"),$obj->get("t"),$obj->get("e"),$obj->get("p")));
            
            header("location:http://192.168.42.201/Presentation/Client/afficherClients.html");
        }

        function afficherClient(){
            $pdo = $this->getPDO();
            $stmt=$pdo->prepare("SELECT * FROM client");
            $stmt->execute();
            $clients=[];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $cli=new Client($login,$adresse,$telephone,$email,$pass);
                $cli->setId($idClient);
                $clients[]=$cli;
            }
            return $clients;
        }

        static function getClient($id){
            $pdo=new PDO("mysql:host=mysql;dbname=cloud;","willy","root");
            $stmt=$pdo->prepare("SELECT * FROM client where idClient=?;");
            $stmt->execute(array($id));
    
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                return new Client($login,$adresse,$telephone,$email,$pass);
            }
            return null;
        }

        

        function getClientTotal(){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("SELECT count(*) as number FROM client;");
            $stmt->execute();
    
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                return $number;
            }
            return 0;
        }

        function updateClient($obj){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("UPDATE client SET login=?,adresse=?,telephone=?,email=?,pass=?,where idClient=?; ");
            $stmt->execute(array($obj->get("n"),$obj->get("a"),$obj->get("t"),$obj->get("e"),$obj->get("p"),$obj->get("i")));
        }

        static function deleteClient($id){
            // $pdo=$this->getPDO();
            $pdo=new PDO("mysql:host=mysql;dbname=cloud;","willy","root");
            $stmt=$pdo->prepare("DELETE FROM client where idClient=?; ");
            $stmt->execute(array($id));
        }

//PRODUIT///////////

        function ajouterProduit($obj){
            $pdo = $this->getPDO();
            $stmt=$pdo->prepare("INSERT INTO produit(reference,libelle,prixUnitaire,quantiteStock,seuil,prixAchat,image) VALUES(?,?,?,?,?,?,?)");
            $stmt->execute(array($obj->get("r"),$obj->get("l"),$obj->get("p"),$obj->get("q"),$obj->get("s"),$obj->get("a"),$obj->get("i")));
            //header("location:../Presentation/afficherProduits.php");
        }

        function afficherProduits(){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("SELECT * FROM produit");
            $stmt->execute();
            $produits=[];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $produits[]=new Produit($reference,$libelle,$prixUnitaire,$quantiteStock,$seuil,$prixAchat,$image);
            }
            return $produits;
        }

        function alertesProduits(){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("SELECT * FROM produit where quantiteStock<seuil");
            $stmt->execute();
            $alertes=[];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $alertes[]=new Produit($reference,$libelle,$prixUnitaire,$quantiteStock,$seuil,$prixAchat,$image);
            }
            return $alertes;
        }

        static function getProduit($ref){
            $pdo=new PDO("mysql:host=mysql;dbname=cloud;","willy","root");
            $stmt=$pdo->prepare("SELECT * FROM produit where reference=?;");
            $stmt->execute(array($ref));
    
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                return new Produit($reference,$libelle,$prixUnitaire,$quantiteStock,$seuil,$prixAchat,$image);
            }
            return null;
        }

        function updateProduit($obj){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("UPDATE produit SET libelle=?,prixUnitaire=?,quantiteStock=?,prixAchat=?,image=? where reference=?; ");
            $stmt->execute(array($obj->get("l"),$obj->get("p"),$obj->get("q"),$obj->get("a"),$obj->get("i"),$obj->get("r")));
        }

        function deleteProduit($id){
            $pdo=$this->getPDO();
            $stmt=$pdo->prepare("DELETE FROM produit where reference=?; ");
            $stmt->execute(array($id));
        }

    }
?>
