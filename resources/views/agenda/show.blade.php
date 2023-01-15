<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
        Nome: {{ $contact->name }}<br>
        E-mail: {{ $contact->email }}<br>
        Telefone: {{ $contact->phone }}<br>
        <a href="/contacts/edit/{{ $contact->id }}">Editar</a>

        <form action="/contacts/delete/{{$contact->id}}" method="GET">
            @csrf
            <button type="submit">Deletar</button>
        </form>
    </body>
</html>
