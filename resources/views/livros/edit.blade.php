@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Atualizar cadastro do livro</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('livros.update', $livro->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Título:</label>
                <input type="text" class="form-control" name="title" value={{ $livro->title }} />
            </div>

            <div class="form-group">
                <label for="publisher">Editora</label>
                <input type="text" class="form-control" name="publisher" value={{ $livro->publisher }} />
            </div>

            <div class="form-group">
                <label for="author">Autor(a):</label>
                <input type="text" class="form-control" name="author" value={{ $livro->author }} />
            </div>
            <div class="form-group">
                <label for="pgNumber">Número de paginas:</label>
                <input type="number" class="form-control" name="pgNumber" value={{ $livro->pgNumber }} />
            </div>
            <div class="form-group">
                <label for="category">Categoria:</label>
                <input type="text" class="form-control" name="category" value={{ $livro->category }} />
            </div>
            <div class="form-group">
                <label for="releasingYear">Ano de lançamento:</label>
                <input type="number" class="form-control" name="releasingYear" value={{ $livro->releasingYear }} />
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection