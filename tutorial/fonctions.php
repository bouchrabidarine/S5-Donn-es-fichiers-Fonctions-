<?php
// fonctions.php — Module de gestion des données du Blog avec persistance JSON

/**
 * Récupère la liste des derniers articles depuis le fichier JSON
 * @return array Liste des articles sous forme de tableaux associatifs
 */

function get_derniers_articles(){
    $fichier=__DIR__.'/data/articles.json';
    if(!file_exists($fichier)){
        return [];
    }
    $file_contente=file_get_contents($fichier);
    $contente_json=json_decode($file_contente,true);
    return is_array($contente_json)?$contente_json:[];
}
function get_categories(){
    $fichier=__DIR__.'/data/articles.json';
    if(!file_exists($fichier)){
        return [];
    }
    $file_contente=file_get_contents($fichier);
    $contente_json=json_decode($file_contente,true);
    return is_array($contente_json)?$contente_json:[];
}