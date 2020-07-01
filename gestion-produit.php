<?php
function afficher_updatedispo($quantite)
{
    if (quantite>0){
        return true;
    }
    else if(quantite==0)
    {
        return false;
    }
}
function afficher_restockage($quantite,$nb_ajout)
{
    echo "<p>$nb_ajout ont été ajoutés au stock</p>";
}
function addition ($quantite,$nb_ajout)
{
    return $quantite + $nb_ajout;
}
?>