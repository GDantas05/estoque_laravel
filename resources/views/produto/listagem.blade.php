@extends('layouts.app')
@section('content')
    <h1 class="text-center">Listagem de Produtos</h1>
    @if (old('nome'))
      <div class="alert alert-success">Produto {{ old('nome') }} adicionado com sucesso</div>
   @endif
    <a href="/produtos/novo" class="btn btn-default">Novo</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Categoria</th>
        <th>Dimensões</th>
        <th>Descrição</th>
        <th>Acão</th>
      </tr>
      @foreach ($produtos as $produto)
      <tr class="{{ $produto->quantidade <= 1 ? 'danger' : '' }}">
        <td>
          {{ $produto->nome }}
        </td>
        <td>
          {{ $produto->valor }}
        </td>
        <td>
          {{ $produto->quantidade }}
        </td>
        <td>
          {{ $produto->categoria->nome }}
        </td>
        <td>
          {{ $produto->dimensoes }}
        </td>
        <td>
          {{ $produto->descricao }}
        </td>
        <td>
          <a href="/produtos/mostra/{{ $produto->id }}">
            <span class="glyphicon glyphicon-search"></span>
          </a>
          <a href="/produtos/remove/{{ $produto->id }}">
            <span class="glyphicon glyphicon-remove"></span>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
    <h4>
      <span class="label label-danger pull-right">
         Um ou menos itens no estoque
      </span>
   </h4>
@stop
