<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h1>Adicionar contato</h1>
    <form action="/contacts/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome"  type="text">
        <input name="email" placeholder="email"  type="text">
        <input name="phone" placeholder="phone" type="text">
        <button type="submit">Enviar</button>
    </form>
</body>
</html