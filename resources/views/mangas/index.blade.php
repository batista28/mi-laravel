@extends('mangas.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Mangas</div>
            <div class="card-body">
                <a href="{{ route('mangas.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo manga</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">Titulo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Genero_id</th>
                        <th scope="col">Editorial_id</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mangas as $manga)
                        <tr>
                            
                        
                            <td><a href="{{ route('mangas.show', $manga->id)}}">{{ $manga->titulo }}</a></td>
                            <td>{{ $manga->precio }}</td>
                            <td>{{ $manga->stock }}</td>
                            <td>{{ $manga->imagen }}</td>
                            <td>{{ $manga->genero_id }}</td>
                            <td>{{ $manga->editorial_id }}</td>
                            <td>


                                <form action="{{ route('mangas.destroy', $manga->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('mangas.show', $manga->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('mangas.edit', $manga->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($mangas as $manga)
    <div>
        <h2>{{ $manga->nombre }}</h2>
      
    </div>
@endforeach

                    </tbody>
                  </table>

                 

            </div>
        </div>
    </div>    
</div>
    
@endsection