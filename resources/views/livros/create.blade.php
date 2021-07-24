@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Adicionar livro</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('livros.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Título:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="publisher">Editora:</label>
              <input type="text" class="form-control" name="publisher"/>
          </div>

          <div class="form-group">
              <label for="author">Autor(a):</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <div class="form-group">
              <label for="pgNumber">Número de páginas:</label>
              <input type="text" class="form-control" name="pgNumber"/>
          </div>
          <div class="form-group">
              <label for="category">Categoria:</label>
              <input type="text" class="form-control" name="category"/>
          </div>
          <div class="form-group">
              <label for="releasingYear">Ano de lançamento:</label>
              <input type="text" class="form-control" name="releasingYear"/>
          </div>                          
          <button type="submit" class="btn btn-primary">Adicionar livro</button>
      </form>
  </div>
</div>
</div>
@endsection