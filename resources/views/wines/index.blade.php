@extends('layouts.layout')
@section('header')
    @if (session('id'))
        <div class="alert alert-success">
            Hai cancellato il prodotto id: {{ session('id') }}
        </div>
    @endif


    <h1>Tutti i Vini</h1>
    @if(!empty($id))
      <div>Hai cancellato il record {{$id}}</div>
    @endif
@endsection
@section('main')
<div class="wines">
  @foreach ($wines as $wine)
    <div class="wine">
      <ul>
        <li>Id: {{$wine->id}}</li>
        <li>Categoria: {{$wine->categoria}}</li>
        <li>Colore: {{$wine->colore}}</li>
        <li>Tipologia: {{$wine->tipologia}}</li>
        <li>Regione: {{$wine->regione}}</li>
        <li>Nome: {{$wine->nome}}</li>
        <li>Prezzo: {{$wine->prezzo}}</li>
        <li>Voto: {{$wine->voto}}</li>
        <li>Annata: {{$wine->annata}}</li>
        <li>Creato il: {{$wine->created_at}}</li>
        <li>Aggiornato il: {{$wine->updated_at}}</li>
        <li>
          <form action="{{route('wines.destroy', $wine->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    </div>   
  @endforeach
</div>
@endsection