<?php 

namespace App\Controllers\PagesController;

use \PDO;

function homeAction (PDO $connexion) {

    // Je vais demander des données aux modèles

    include_once '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);


    // Je charge la vue 'home' dans $content

    global $content, $title;
    $title = 'homePage';

    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();




    /* 
    include_once '../app/models/authorsModel.php';
    $authors = \Models\authorsModel\findAll($connexion);

    include_once '../app/models/booksModel.php';
    $books = \Models\BooksModel\findAll($connexion, 3);
 */
}