<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo cliente</title>
</head>
<body>
    <form action="{{url('api/message')}}" method="POST">
        @csrf
        <label>Nome</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Telefone</label>
        <input type="text" name="telephone">
        <label>Mensagem</label>
        <input type="text" name="message">

        <button>Enviar</button>


        
    </form>
    
</body>
</html>