<form class="loginForm"action="" method="post">
  <h1>Inscription</h1>
      <div class="inset">
    	<input type="text" name="username" placeholder="Username"/>
        <input type="text" name="email1" placeholder="Email"/>
        <input type="password" name="pass1" placeholder="Password"/>
        <input type="password" name="pass2" placeholder="Confirmation du mot de passe"/>
        <input type="text" name="nom" placeholder="Nom"/>
<!--        <input type="hidden" name="date"/>-->
        <br>
        <input type="submit" name="submit" value="Valider">
      </div>
</form>
    
    <?php 
        if(isset($erreur))
        {
            echo '<font color="red">'.$erreur."</font>";
        }
    ?>