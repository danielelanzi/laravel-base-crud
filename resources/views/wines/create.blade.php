<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('wines.store')}}" method="post">
    @csrf
    <input type="text" name="categoria" placeholder="Inserisci la categoria">
    <input type="text" name="colore" placeholder="Inserisci il colore">
    <input type="text" name="tipologia" placeholder="Inserisci la tipologia">
    <input type="text" name="regione" placeholder="Inserisci la regione">
    <input type="text" name="nome" placeholder="Inserisci il nome">
    <input type="text" name="prezzo" placeholder="Inserisci il prezzo">
    <input type="text" name="voto" placeholder="Inserisci un voto da 1 a 10">
    <input type="text" name="annata" placeholder="Inserisci l'annata">

    <button type="submit" name="button">Salva</button>
    @method('POST')
    </form>
</body>
</html>