
<table border=1>
    @foreach($artistas as $art)    
    <tr>
        <td>{{$art->Name}}</td>
    </tr>
    @endforeach
</table>