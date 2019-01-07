<?php
    require __DIR__ ."/../models/registerModel.php";

        if(isset ($_POST['submit'])) 
        {    
            if(!empty($_POST['username']) AND !empty($_POST['email1']) AND !empty($_POST['pass1']) AND !empty($_POST['pass2']))
            { 
                $user_login = htmlspecialchars($_POST['username']);
                $user_email1 = htmlspecialchars($_POST['email1']);
                $user_pass1 = sha1($_POST['pass1']);
                $user_pass2 = sha1($_POST['pass2']);
                $nom = htmlspecialchars($_POST['nom']);
                $dt = date('Y-m-d H:i:s');
                $user_level = 1;
                
                $loginlength = strlen($user_login);
                if($loginlength <= 255)
                {
                        if (filter_var($user_email1, FILTER_VALIDATE_EMAIL))
                        {
                            if ($user_pass1 == $user_pass2)
                            {
                                $requete = $bdd->prepare("INSERT INTO user (login,mdp,email,nom,date_inscription) VALUES(:user_login,:user_pass1,:user_email1,:nom,:dt)");
                                $requete->bindValue(':user_login', $user_login);
                                $requete->bindValue(':user_pass1', $user_pass1);
                                $requete->bindValue(':user_email1', $user_email1);
                                $requete->bindValue(':nom', $nom);
                                $requete->bindValue(':dt', $dt);
                                try
                                {
                                    $requete->execute();
                                }
                                catch(PDOException $e)
                                {
                                    exit($e->getMessage());
                                }
                                
                                
                                $erreur = "Le compte a bien été crée";
//                                header('Location: admin');
                            } else {
                                $erreur = "Les mots de passes ne correspondent pas";
                            }
                        } else {
                            $erreur = "Format email invalide";
                        }
                } else {
                    $erreur = "Le login ne doit pas dépasser 255 caractères";
                }
            } else {
                $erreur = "Tous les champs doivent être complétés";
            }
            
        }

    require __DIR__ ."/../views/registerView.php";
?>