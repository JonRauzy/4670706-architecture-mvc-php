<?php

   // connexion à la base de donnée :
   require_once 'src/model.php';

   // recupére les posts:
   $posts = getPost();

   // affiche la vue : 
   require_once 'template/homepage.php';