<?php 
//funzione per vedere se la pagina che gli passiamo è quella corrente che si sta visualizzando, 
//se si allora ritorna class = 'active' cche usato come attributo fa diventare la scritta rossa
function isActive($pagename){
    if(basename($_SERVER["PHP_SELF"])==$pagename){
        echo " class='active' ";
    }
}
//dato un autore ritorna l'id
function getIdFromName($name){
    return preg_replace("/[^a-z]/", '', strtolower($name));
    }
?>