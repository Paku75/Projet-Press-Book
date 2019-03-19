<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php
            $rss = get_rss(); 
            foreach ($rss as $article) { 
            $originalDate = $article['date'];
            $newDate = date("D d-m-Y", strtotime($originalDate));
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                          <a href="<?= $article['link']?>"><b><?= $article['title']; ?></b></a> <br><br>
                          <?= $article['description']; ?> 
                              <div class="d-flex justify-content-between align-items-center">
                                <div style="margin-top: 10px;" class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted"><?= $newDate?></small>
                              </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
      

