@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table livros">
    <thead>
        <tr>
          <td>ID</td>
          <td>titulo</td>
          <td>edicao</td>
          <td>editora</td>
          <td>autor</td>
          <td>genero</td>
          <td>ano</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livro)
        <tr>
            <td>{{$livro->id}}</td>
            <td>{{$livro->titulo}}</td>
            <td>{{$livro->edicao}}</td>
            <td>{{$livro->editora}}</td>
            <td>{{$livro->autor}}</td>
            <td>{{$livro->genero}}</td>
            <td>{{$livro->ano}}</td>
            <td><a href="{{ route('livros.edit',$livros->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('livros.destroy', $livros->id)}}" method="post">
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
@endsection