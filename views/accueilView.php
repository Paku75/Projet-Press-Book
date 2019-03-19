
  <body>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/gilet_jaune.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Les gilets jaunes</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/macron.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Macron</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/attentat.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>A Strasbourg, un hommage citoyen rendu aux victimes</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

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
    

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Revenir en haut</a>
        </p>
        <p>Projet Pressbook par Pham Tien Quyen</p>
      </div>
    </footer>
    </main>
  </body>
