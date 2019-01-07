
<?php
    
    require __DIR__ ."/../models/usersModel.php";
    require __DIR__ ."/../views/usersView.php";

    //Update
    if(isset($_POST['login']) AND !empty($_POST['login']) AND $_POST['login'] != $user['login'])
    {
        $newlogin = htmlspecialchars($_POST['login']);
        $insertlogin = $bdd->prepare("UPDATE user SET login = ? WHERE id_u = ?");
        $insertlogin->execute(array($newlogin, $_POST['id_u']));
        header('Location: users');
    }

    if(isset($_POST['new_mdp1']) AND !empty($_POST['new_mdp1']) AND isset($_POST['new_mdp2']) AND !empty($_POST['new_mdp2']))
    {
        $newpass = sha1($_POST['new_mdp1']);
        $newpass2 = sha1($_POST['new_mdp2']);
        
        if($newpass == $newpass2)
        {   
            $insertpass = $bdd->prepare("UPDATE user SET mdp = ? WHERE id_u = ?");
            $insertpass->execute(array($newpass, $_POST['id_u']));
            header('Location: users');
        }
        else
        {       
            echo "Les deux mots de passes ne correspondent pas.";
        }
    }

    if(isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] != $user['email'])
    {   
        $newemail = htmlspecialchars($_POST['email']);
        $insertemail = $bdd->prepare("UPDATE user SET email = ? WHERE id_u = ?");
        $insertemail->execute(array($newemail, $_POST['id_u']));
        header('Location: users');
    }


 //Delete
    if (isset($_POST['userdelete']))
    {
        $id = $_POST['id_delete'];
        delete_user($id);
    }

?>

