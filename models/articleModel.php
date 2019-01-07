<?php

 // Récuperation du flux rss
function getFeed($feed_url) {
	$arrContextOptions=array(
		  "ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			), 
		"http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        ),
		); 
    //$content = file_get_contents($feed_url);
	$content = file_get_contents($feed_url, false, stream_context_create($arrContextOptions));
    $x = new SimpleXmlElement($content);
	
          // tri et affichage des flux rss par titre, description, lien, date et categorie.
    echo "<ul>";
    foreach($x->channel->item as $entry) {
        echo "<li>Titre : <a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>Description :" . $entry->description . "<br>
		lien :<a href='$entry->link' link='$entry->link'>" . $entry->link . "</a> <br>
		Date de publication : " . $entry->pubDate . "<br>
		Category : " . $entry->category . "<br>
		";
    }
    echo "</ul>";
}

?>