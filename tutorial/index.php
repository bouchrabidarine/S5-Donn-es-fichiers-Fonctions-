<?php
// 1. Inclusion sécurisée du module de données
require_once 'fonctions.php';

// 2. Récupération des données via les fonctions
$articles = get_derniers_articles();
$categories = get_categories();


echo "Articles trouvés : " . count($articles) . "\n";
echo "Catégories trouvées : " . count($categories) . "\n";
