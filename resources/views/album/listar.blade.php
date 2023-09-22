<form>
<select name="ArtistId">
    @foreach($artistas as $art)
    <option value="{{$art->ArtistId}}">{{$art->Name}}</option>
    @endforeach
</select>&nbsp;&nbsp;
<input type="submit" name="Filtrar"></input>
</form>
<hr>
<table border=1>
    @foreach($albumes as $al)
    
    <tr>
        <td>{{$al->Title}} <a href="/album/actualizar/{{$al->AlbumId}}">Editar</a></td>
        <td>{{$al->artist->Name}}</td>
    </tr>

    @endforeach


</table>