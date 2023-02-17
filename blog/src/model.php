<?php 

function getPost(){
    try {
        $bd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
     } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
     }
  
     // On récupère les 5 derniers billets
     $statement = $bd->query('SELECT id, title, content,  DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY creation_date DESC LIMIT 0, 5');
  
     $posts = []; 
     while ($row = $statement->fetch()) {
        $post = [
           'title' => $row['title'],
           'french_creation_date' => $row['date_creation_fr'],
           'content' => $row['content'],
        ];
        $posts[] = $post;
     }
     return $posts;
};