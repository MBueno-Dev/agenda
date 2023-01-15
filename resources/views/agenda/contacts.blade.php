<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Meus Contatos</h1>
    <a href="/contacts/create">Criar contato</a>
    <ul>
        @foreach ($contacts as $item)
            <li>
                <a href="/contacts/show/{{ $item->id }}">
                {{ $item->name }}
            </li>    

        @endforeach
    </ul>
</body>
</html>