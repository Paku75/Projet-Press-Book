<div class="clientContainer">
     <h3><?= $tableName ?></h3>


<a href="#" id="btn_add" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter un article</a>
<br><br><br>



<!--Table 1-->
<div class="table-responsive">
  <table id="myTable" class="table table-bordered display" style="width:100%">
    <thead>
     
      <tr>
       <th>
          Date récupéré
        </th>
        <th>
          Titre
        </th>
        <th>
          Url
        </th>
        <th>
          Date publié
        </th>
        <th>
          Image
        </th>
        <th>
          Description
        </th>
        <th>
          Auteur
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php $articles = get_article(); ?>
    <?php foreach ($articles as $article) { ?>
    <?php if($article['tables'] == "Table 1") { ?>
      <tr>
       <td>
           <?php echo $article['date_recup']; ?>
       </td>
       <td>
           <?php echo $article['titre_a']; ?>
       </td>
       <td>
           <?php echo $article['url_a']; ?>
       </td>
       <td>
           <?php echo $article['date_publi']; ?>
       </td>
       <td>
           <?php echo $article['img_desc']; ?>
       </td>
       <td>
           <?php echo $article['description']; ?>
       </td>
       <td>
           <?php echo $article['auteur']; ?>
       </td>
        
        <td>
            <div class="edit">
                <a href="#edit_<?php echo $article['id_a']; ?>" data-toggle="modal" class="btn btn-default">
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
                </a>
                <a href="#delete_<?= $article['id_a'] ?>" data-toggle="modal" class="btn btn-default">
                  <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                </a>
            </div>
        </td>
        <?php //include ('Modals/addarticle.php') ?>
      </tr>
    <?php } ?>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>

