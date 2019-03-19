<?php
function get_rss()
{
    global $bdd;

    $requete = $bdd->prepare("SELECT * FROM rss_info WHERE categorie = 'economie' ORDER BY id DESC LIMIT 20");
    $requete->execute();
    return $requete->fetchAll();
}