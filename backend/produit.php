<?php
include_once("DAO.php");

class Produit{
    private $reference;
    private $libelle;
    private $prixUni;
    private $quantite;
    private $seuil;
    private $prixAchat;
    private $dao;



    function __construct($r,$l,$p,$q,$s,$a){
        $this->reference = $r;
        $this->libelle = $l;
        $this->prix = $p;
        $this->quantite = $q;
        $this->seuil = $s;
        $this->prixAchat = $a;
        $this->dao = new DAO();

    }

    function get($c){
        switch($c){
            case "r" : return $this->reference;
            case "l" : return $this->libelle;
            case "p" : return $this->prix;
            case "q" : return $this->quantite;
            case "s" : return $this->seuil;
            case "a" : return $this->prixAchat;
        }
    }

    function save(){
        $this->dao->ajouterProduit($this);
    }

    static function afficher(){
        $dao = new DAO();
        $cl=$dao->afficherProduits();
        return $cl;
    }

    static function alertes(){
        $dao = new DAO();
        $cm=$dao->alertesProduits();
        return $cm;
    }

    function update($cli){
        $this->dao->updateProduit($cli);
    }

    static function deleteProduit($cli){
        $dao = new DAO();
        $dao->deleteProduit($cli);
    }

}

?>
