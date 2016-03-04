@extends('layouts.app')
@section('content')
    <h1 class="text-center">Detalhes do produto: {{ $produto->nome }}</h1>
    <ul>
      <li>
        <b>Valor:</b> R$ {{ $produto->valor }}
      </li>
      <li>
        <b>Descrição:</b> {{ $produto->descricao }}
     </li>
     <li>
        <b>Quantidade em estoque:</b> {{ $produto->quantidade }}
     </li>
    </ul>
@stop
