
<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $article['id_a']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier l'article</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        
      </div>
    </div>
  </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $article['id_a'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un article</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="client_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $article['titre_a'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $article['titre_a'] ?>">
         <button type="submit" name="article_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>