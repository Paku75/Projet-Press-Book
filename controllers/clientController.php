<?php 
    require __DIR__ ."/../models/clientModel.php";
    require __DIR__ ."/../views/clientView.php";

    
//    if(isset($_GET['client_id']))
//    {
//        $id = $_GET['client_id'];
//        $services = get_contrat_service($id);
//    } else 
//        {
//            file_put_contents("test123.php","");
//        }
    
    if(isset($_POST['clientadd_horus']))
    {
        $entreprise = $_POST['entreprise'];
        $effectif = $_POST['effectif'];
        $superficie = $_POST['superficie'];
        $activite = $_POST['activite'];
        $departement = $_POST['departement'];
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $fonction= $_POST['fonction'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $suivi = $_POST['suivi'];
        $entreprise_sous = $_POST['suivi'];
        
        add_client_horus($entreprise,$effectif,$superficie,$activite,$departement,$nom,$prenom,$fonction,$tel,$email,$suivi);
    }
    if(isset($_POST['clientadd_kework']))
    {
        $entreprise = $_POST['entreprise'];
        $effectif = $_POST['effectif'];
        $superficie = $_POST['superficie'];
        $activite = $_POST['activite'];
        $departement = $_POST['departement'];
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $fonction= $_POST['fonction'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $suivi = $_POST['suivi'];
        $entreprise_sous = $_POST['suivi'];
        
        add_client_kework($entreprise,$effectif,$superficie,$activite,$departement,$nom,$prenom,$fonction,$tel,$email,$suivi);
    }

    if(isset($_POST['clientedit']))
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
    
    if(isset($_POST['detail_client_edit']))
    {
        $id = $_POST['client_id'];
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $fonction= $_POST['fonction'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $date = date('Y-m-d H:i:s');
        $historique = $_POST['historique'];
        
        edit_detail_client($id,$nom,$prenom,$fonction,$tel,$email,$date,$historique);
    }
     
    if (isset($_POST['client_delete']))
    {
        $id = $_POST['id_delete'];
        delete_client($id);
    }
?>