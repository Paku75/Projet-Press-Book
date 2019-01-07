<!-- Modal edit-->
  <div class="modal fade" id="edit_<?php echo $user['id_u']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Modifier user</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form method="POST" role="form">
            <div class="form-group">
              <input type="hidden" name="id_u" value="<?= $user['id_u'] ?>">
              <label for="login"><span class="glyphicon glyphicon-user"></span> Nouveau login</label>
              <input name="login" type="text" class="form-control" value="<?= $user['login'];?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Nouveau mot de passe</label>
              <input name="new_mdp1" type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Confirmer le nouveau mot de passe</label>
              <input name="new_mdp2" type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Nouvel email</label>
              <input name="email" type="text" class="form-control" value="<?= $user['email'];?>">
            </div>
              <button name="useredit" type="submit" class="btn btn-success btn-block">Valider</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
  
 <!-- Modal delete-->
<div class="modal fade" id="delete_<?php echo $user['id_u']; ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un utilisateur</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $user['login'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $user['id_u'] ?>">
         <button type="submit" name="userdelete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 