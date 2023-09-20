<?php
namespace App\servicio;
use App\Models\Artist;

class ArtistServicio {
    /**
     * Lista todos los artistas
     */
    public function listarTodo() {
        return Artist::all();
    }
    
}