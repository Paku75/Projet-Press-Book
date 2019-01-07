<?php
    if(isset ($_POST['submit']))
        {     
            $login = $_POST['username'];
            $mdp = sha1($_POST['pass']);
            $requete = $bdd->query("SELECT * FROM user WHERE login ='$login' AND mdp='$mdp'"); 
            if($reponse = $requete->fetch()) 
            {
                $_SESSION['connecte'] = true;
//                $user_id = $_SESSION['user_id'];
//                $user_login = $_SESSION['user_login'];
//                $user_level = $_SESSION['user_level'];
                $_SESSION['id_u'] = $reponse['id_u'];
                $_SESSION['login'] = $reponse['login'];
                $_SESSION['email'] = $reponse['email'];
                $_SESSION['lvl'] = $reponse['lvl'];

                
                    header("Location:accueil");
                 
            }
            else
            {
                echo 'Identifiant ou mot de passe incorrect';
            }
        }
?>