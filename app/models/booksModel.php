<?php 

namespace App\Models\BooksModel;

use \PDO; 

function findAll(PDO $connexion): array  {

    $sql = "SELECT * 
            FROM books b
            JOIN authors a ON b.author_id = a.id
            ORDER BY b.created_at DESC
            LIMIT 3;";
    
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// 4. ROUTE PAR DÉFAUT: LA PAGE D'ACCUEIL