<?php
function affichage_titre($nom_produit) {
    echo "<h1>Fiche produit : $nom_produit</h1>";
} 
function affichage_description($couleur,$prix) {
    echo "<p> Couleur: $couleur, Prix: $prix </p>";
}
function affichage_produit($nom_produit, $couleur, $prix, $disponible){
    if($disponible==true){
        affichage_titre($nom_produit);
        affichage_description($couleur, $prix);
    }
    else if ($disponible==false){
        echo "<p>Le produit $nom_produit n'est malheureusement plus disponible</p>";
    }
} 
?>