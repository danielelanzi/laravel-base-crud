@extends('layouts.layout')
@section('header')
    <h1>Inserisci un Vino</h1>
    @if ($errors->any()) 
      <div class="alert alert-danger"> 
        <ul> 
          @foreach ($errors->all() as $error) 
          <li>{{ $error }}</li> 
          @endforeach
        </ul>
      </div> 
    @endif
@endsection
@section('main')
    <form action="{{(!empty($wine)) ? route('wines.update', $wine->id) : route('wines.store')}}" method="post"> 
      @csrf 
      @if(!empty($wine ?? ''))
        @method('PATCH')
        @else
        @method('POST')
      @endif

      <div>
          <input type="text" name="categoria" placeholder="Categoria del vino (esempio: 'Vino')" value="{{(!empty($wine ?? '')) ? $wine ?? ''->categoria : ''}}">
      </div>

      <div>
        @if(!empty($wine ?? ''))
          <input type="text" name="colore" placeholder="Inserisci il colore" value="{{$wine ?? ''->colore}}">
        @else
          <input type="text" name="colore" placeholder="Colore del vino">
        @endif
      </div>

      <div>
      <input type="text" name="tipologia" placeholder="Tipologia" value="{{(!empty($wine ?? '')) ?$wine ?? ''->tipologia : ''}}">
      </div>

      <div>
        <input type="text" name="regione" placeholder="Inserisci la regione" value="{{(!empty($wine ?? '')) ? $wine ?? ''->regione : ''}}">
      </div>

      <div>
        <input type="text" name="nome" placeholder="Nome del vino" value="{{(!empty($wine ?? '')) ? $wine ?? ''->nome : ''}}">
      </div>

      {{-- <div>
        <textarea name="description" id="" cols="30" rows="10">
          {{(!empty($wine ?? '')) ? $wine ?? ''->description : ''}}
        </textarea>
      </div> --}}

      <div>
        <input type="text" name="prezzo" placeholder="Inserisci il costo del vino" value="{{(!empty($wine ?? '')) ? $wine ?? ''->prezzo : ''}}">
      </div>

      <div>
        <input type="text" name="voto" placeholder="Inserisci un voto da 1 a 10" value="{{(($wine ?? '' <= 10) && ($wine ?? '' >= 1)) ? $wine ?? ''->voto : ''}}">
      </div>

      <div>
        <input type="date" name="annata" placeholder="Annata del vino" value="{{(!empty($wine ?? '')) ? $wine ?? ''->annata : ''}}">
      </div>
      
      @if(!empty($wine ?? ''))
    <input type="hidden" name="id" value="{{$wine ?? ''->id}}"> 
     @endif

      <input type="submit" value="Invia"> 
    </form>
@endsection


{{-- <!DOCTYPE html>
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
</html> --}}
