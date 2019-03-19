<?php

    function get_article()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM articles");
        $requete->execute();
        return $requete->fetchAll();
    }

    function getContent($tableName)
    {
    	$description = null;

    	if ($tableName == "Table1")
        {
    		$description = "Ceci est table 1.";
            showTable1($tableName, $description);
        }
    	else if ($tableName == "Table2")
        {
    		$description = "Ceci est table 2.";
            showTable2($tableName, $description);
        }
    	
    }

	function showTable1($tableName, $description)
	{
		include __DIR__ ."/../views/addarticleTableView.php";
	}
    
    function showTable2($tableName, $description)
    {
        include __DIR__ ."/../views/addarticleTable2View.php";
    }
    
    function add_article1($date_recup,$titre,$url,$date_publi,$img_desc,$desc,$auteur)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO articles(date_recup,titre_a,url_a,date_publi,img_desc,description,auteur) VALUES(:date_recup,:titre_a,:url_a,:date_publi,:img_desc,:description,:auteur)");
            $requete->bindValue(":date_recup",$date_recup);
            $requete->bindValue(":titre_a",$titre);
            $requete->bindValue(":url_a",$url);
            $requete->bindValue(":date_publi",$date_publi);
            $requete->bindValue(":img_desc",$img_desc);
            $requete->bindValue(":description",$desc); 
            $requete->bindValue(":auteur",$auteur); 
               
            try
            {
                $requete->execute();
                header('Location: addarticle');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }
    
    function add_article2($date_recup,$titre,$url,$date_publi,$img_desc,$desc,$auteur)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO articles(date_recup,titre_a,url_a,date_publi,img_desc,description,auteur) VALUES(:date_recup,:titre_a,:url_a,:date_publi,:img_desc,:description,:auteur)");
            $requete->bindValue(":date_recup",$date_recup);
            $requete->bindValue(":titre_a",$titre);
            $requete->bindValue(":url_a",$url);
            $requete->bindValue(":date_publi",$date_publi);
            $requete->bindValue(":img_desc",$img_desc);
            $requete->bindValue(":description",$desc); 
            $requete->bindValue(":auteur",$auteur); 
               
            try
            {
                $requete->execute();
                header('Location: addarticle');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }


    function edit_article($date_recup,$titre,$url,$date_publi,$img_desc,$desc,$auteur)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE articles SET 
                                            date_recup = :date_recup,
                                            titre_a = :titre_a,
                                            url_a = :url_a,
                                            date_publi = :date_publi,
                                            img_desc = :img_desc,
                                            description = :description,
                                            auteur = :auteur
                                        WHERE id_a = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":date_recup",$date_recup);
            $requete->bindValue(":titre_a",$titre);
            $requete->bindValue(":url_a",$url);
            $requete->bindValue(":date_publi",$date_publi);
            $requete->bindValue(":img_desc",$img_desc);
            $requete->bindValue(":description",$desc); 
            $requete->bindValue(":auteur",$auteur); 
        
            try
            {
                $requete->execute();
                header('Location: addarticle');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>
      <?php }
    }


    function delete_article($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM articles WHERE id_a =:id" );
            $requete->bindParam(':id', $id);
               
            try
            {
                $requete->execute();
                ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>
               toastr.success('Client deleted successfully!', 'Success', {timeOut: 5000, fadeOut: 1000});
               </script>;
               <?php
                header('Location: addarticle');
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.error('Error on deleting this partener', 'Error', {timeOut: 5000});</script>;
      <?php }
    }

?>