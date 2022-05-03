<table method="post" border = "1">
    <tr>
        <td>Nome</td>
        <td>Endereço</td>
    </tr>
    @foreach($enderecos as $endereco)
    <tr>
        <td>{{$endereco['Comprador']}}</td>
        <td>{{$endereco['Endereco']}}</td>
        <td><a href={{"delete/".$endereco['id']}}>Delete</a></td>
    </tr>
    @endforeach
    <a href="/">Voltar à Página Inicial</a><br><br>
</table>