<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $id)
    {
        echo "El ID del producto que quieres ver es el $id (llamado desde el controlador)";
    }
    
    public function productComments(int $id)
    {
        echo "Estás viendo los comentarios del producto con ID: $id (contrnolaor)";
    }
    
    
    public function productCommentsByType(int $id, string $type = 'todos los')
    {
        echo "Estás viendo los comentarios de tipo $type, del producto con ID $id";
    }
}
