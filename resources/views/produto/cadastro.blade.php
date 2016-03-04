@extends('layouts.app');
@section('content')
  <h1 class="text-center">Cadastro de Produto</h1>
  @if($errors->all())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <ul>
        <li>{{ $error }}</li>
      </ul>
    @endforeach
    </div>
  @endif
  <form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="Nome">Nome</label>
      <input type="text" name="nome" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="Valor">Valor</label>
      <input type="text" name="valor" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="Quantidade">Quantidade</label>
      <input type="number" name="quantidade" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="Categoria">Categoria</label>
      <select class="form-control" name="categoria_id">
        @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="Dimensoes">Dimensões</label>
      <input type="text" name="dimensoes" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="Descricao">Descrição</label>
      <textarea name="descricao" rows="8" cols="40" class="form-control"></textarea>
    </div>
    <input type="submit" name="name" value="Cadastrar" class="btn btn-primary">
  </form>
@stop
