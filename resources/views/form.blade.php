<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <input type="text" name="Comprador" placeholder="Comprador"><br><br>
        <input type="text" name="Endereco" placeholder="Endereço"><br><br>
        <button type="submit">Enviar</button>
    </form><br><br>
    <a href="/list">Lista de Endereços Cadastrados</a>
</body>
</html>