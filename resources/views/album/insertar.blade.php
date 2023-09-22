<form method="post">
    @csrf
    Title:<input type="text" name="Title" value="{{$album->Title}}"/><br/>
    ArtistId:<select name="ArtistId">
            <option>--Seleccione un Artista--</option>
        @foreach($artistas as $artista)
            <option value="{{$artista->ArtistId}}">{{$artista->Name}}</option>
        @endforeach
    </select>
    <br/>
    <button name="boton" value="insertar">Insertar Album</button>
</form>