<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\servicio\ArtistServicio;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function listar(ArtistServicio $as) {
        $artistas=$as->listarTodo();
        return view('artist.listar',['artistas'=>$artistas]);
    }
}
