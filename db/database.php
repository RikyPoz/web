<?php

//classe generale per interfacciarsi al db, siccome verrà utilizzata in ogni pagina, la istanziamo dentro bootstrap che a sua volta verrà istanziata in ogni pagina (per evitare di istanziare entrambi in ogni pagina)
class DatabaseHelper{
    private $db; // variabile di riferimento alla connessione del db

    //costruttore della classe
    public function __construct($servername, $username, $password, $dbname, $port){

        $this->db = new mysqli($servername, $username, $password, $dbname, $port);

        if($this->db->connect_error){ //controllo della connessione al db
            die("Connessione fallita al db");
        }

    }

    //query per prendere tutti i valori necessari del sider 
    public function getRandomPost($n=2){ //prende un parametro n, se non viene specificato valoroe default = 2

        $stmt = $this->db->prepare("SELECT idarticolo, titoloarticolo, imgarticolo FROM articolo ORDER BY RAND () LIMIT ?");
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategories(){ 

        $stmt = $this->db->prepare("SELECT idcategoria, nomecategoria FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPost($n=-1){ 

        $query = ("SELECT idarticolo, titoloarticolo, imgarticolo, dataarticolo, nome,anteprimaarticolo FROM articolo,autore
        WHERE autore = idautore ORDER BY dataarticolo DESC");

        if($n > 0 ){
            $query = $query . " LIMIT ?"; //concatenazione di stringhe
        }
        $stmt = $this->db->prepare($query);

        if($n>0){
            $stmt->bind_param("i",$n);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>