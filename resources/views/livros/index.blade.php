@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Livros</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Publisher</td>
          <td>Author</td>
          <td>Número de paginas</td>
          <td>Category</td>
          <td>Releasing Year</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <div>
    <a style="margin: 19px;" href="{{ route('livros.create')}}" class="btn btn-primary">Novo livro</a>
    </div>  
    <tbody>
        @foreach($livros as $livro)
        <tr>
            <td>{{$livro->id}}</td>
            <td>{{$livro->title}}</td>
            <td>{{$livro->publisher}}</td>
            <td>{{$livro->author}}</td>
            <td>{{$livro->pgNumber}}</td>
            <td>{{$livro->category}}</td>
            <td>{{$livro->releasingYear}}</td>
            <td>
                <a href="{{ route('livros.edit',$livro->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('livros.destroy', $livro->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
