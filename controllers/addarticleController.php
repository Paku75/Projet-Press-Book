<?php
require __DIR__ ."/../models/addarticleModel.php";
require __DIR__ ."/../views/addarticleView.php";


    if(isset($_POST['articleadd1']))
    {
        $date_recup = $_POST['date_recup'];
        $titre = $_POST['titre'];
        $url = $_POST['url'];
        $date_publi = $_POST['date_publi'];
        $img_desc = $_POST['img_desc'];
        $desc= $_POST['desc'];
        $auteur= $_POST['auteur'];
        
        add_article1($date_recup,$titre,$url,$date_publi,$img_desc,$desc,$auteur);
    }

    if(isset($_POST['articleadd2']))
    {
        $date_recup = $_POST['date_recup'];
        $titre = $_POST['titre'];
        $url = $_POST['url'];
        $date_publi = $_POST['date_publi'];
        $img_desc = $_POST['img_desc'];
        $desc= $_POST['desc'];
        $auteur= $_POST['auteur'];
        
        add_article2($date_recup,$titre,$url,$date_publi,$img_desc,$desc,$auteur);
    }

    if(isset($_POST['articleedit']))
    {
        $id = $_POST['client_id'];
        $pertinance = $_POST['pertinance'];
        $entreprise = $_POST['entreprise'];
        $effectif = $_POST['effectif'];
        $superficie = $_POST['superficie'];
        $activite = $_POST['activite'];
        $departement = $_POST['departement'];
        $suivi = $_POST['suivi'];
        
        
            $accueil = $_POST['accueil'];
            $conciergerie = $_POST['conciergerie'];
            $buisness = $_POST['buisness'];
            $happiness = $_POST['happiness'];
            $cowork = $_POST['cowork'];
            edit_services($id,$accueil,$conciergerie,$buisness,$happiness,$cowork);
        
        
        edit_client($id,$pertinance,$entreprise,$effectif,$superficie,$activite,$departement,$suivi);
        
    }

    if (isset($_POST['article_delete']))
    {
        $id = $_POST['id_delete'];
        delete_article($id);
    }
?>