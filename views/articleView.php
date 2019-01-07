<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<div id="wrap">
 <!-- Affichage des flux rss trier par la fonction sur une page php -->
    <div id="mainContent">
		<li><a href="#content_1" class="selected">Les dernières nouvelles d'Alsace</a></li>
        <div id="content_1">
            <?php getFeed("https://www.dna.fr/une-sports/rss"); ?>
        </div><!--end content 1-->
		<li><a href="#content_2">Republicain Lorrain</a></li>
		<div id="content_2">
            <?php getFeed("https://www.republicain-lorrain.fr/sports/sport-lorrain/rss"); ?>
        </div><!--end content 2-->
		<li><a href="#content_3">Est Republicain</a></li>
        <div id="content_3">
            <?php getFeed("https://www.estrepublicain.fr/sport-lorrain/rss"); ?>
        </div><!--end content 3-->
		<li><a href="#content_4">Vosges Matin</a></li>
        <div id="content_4">
            <?php getFeed("https://www.vosgesmatin.fr/sport/sport-lorrain/rss"); ?>
        </div><!--end content 4-->
		<li><a href="#content_5">L'alsace</a></li>
        <div id="content_5">
            <?php getFeed("https://www.lalsace.fr/sport/rss"); ?>
        </div><!--end content 5-->
  
    </div><!--end main content -->
 
</div><!--end wrap-->
</body>
</html>