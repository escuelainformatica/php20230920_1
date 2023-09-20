<?php
namespace App\servicio;
use App\Models\Album;
class AlbumServicio {
    /**
     * Esta funcion regresa un listado de album con los artistas ordenado por el titulo de los albumes.
     */
    public function listarOrdenPorTitle()
    {
        return Album::with(['artist'])->orderBy('Title')->get();
    }
    public function listarFiltrado($artistId) 
    {
        return Album::with(['artist'])->where('ArtistId',$artistId)->orderBy('Title')->get();
    }
}