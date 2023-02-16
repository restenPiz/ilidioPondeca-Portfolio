<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="{{route('enviar_email')}}">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Nome">
        
        <label>Nome</label>
        <input type="email" name="email" placeholder="Email">
        
        <label>Nome</label>
        <input type="text" name="apelido" placeholder="Apelido">
        
        <label>Nome</label>
        <input type="text" name="mensagem" placeholder="Mensagem">

        <button type="submit" name="submit">Enviar Mensage</button>
    </form>

</body>
</html>