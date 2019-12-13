<?php

include '../components/pdo.php';

    // $r1 = $dbh->query('SELECT*FROM articles ORDER BY date_creation DESC LIMIT 10');
    // $content = $r1->fetchAll(PDO::FETCH_OBJ);

echo '<section class="main_cont">';
    // foreach($content as $article){
    //     echo '<article class="article_top">';
    //         echo '<h2>'.$article->titre.'</h2>';
    //         echo '<img src="'.$article->image.'">';
    //         echo '<p class="article_text">'.$article->contenu.'</p>';
    //         echo '<p class="legend">'.$article->date_creation.'</p>';
    //     echo '</article>';
    // }
echo '</section>';

var_dump($content);

?>