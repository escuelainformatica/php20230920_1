<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\servicio\AlbumServicio;
use App\servicio\ArtistServicio;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function listar(AlbumServicio $as,ArtistServicio $artistServicio,Request $request) {
        $id=$request->get('ArtistId',null);
        var_dump($id);
        if($id===null) {
            $albumes=$as->listarOrdenPorTitle();
        } else {
            $albumes=$as->listarFiltrado($id);
        }
            $artistas=$artistServicio->listarTodo();
        
        return view("album.listar",['albumes'=>$albumes,'artistas'=>$artistas]); // /resources/views/album/listar.blade.php
        
    }
}
