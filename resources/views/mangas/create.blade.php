@extends('mangas.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir manga
                </div>
                <div class="float-end">
                    <a href="{{ route('mangas.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mangas.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="titulo" class="col-md-4 col-form-label text-md-end text-start">titulo</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{ old('titulo') }}">
                            @if ($errors->has('titulo'))
                                <span class="text-danger">{{ $errors->first('titulo') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="precio" class="col-md-4 col-form-label text-md-end text-start">precio</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio" value="{{ old('precio') }}">
                            @if ($errors->has('precio'))
                                <span class="text-danger">{{ $errors->first('precio') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start">stock</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ old('stock') }}">
                            @if ($errors->has('stock'))
                                <span class="text-danger">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="imagen" class="col-md-4 col-form-label text-md-end text-start">imagen</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen" value="{{ old('imagen') }}">
                            @if ($errors->has('imagen'))
                                <span class="text-danger">{{ $errors->first('imagen') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="genero_id" class="col-md-4 col-form-label text-md-end text-start">genero_id</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('genero_id') is-invalid @enderror" id="genero_id" name="genero_id">{{ old('genero_id') }}</textarea>
                            @if ($errors->has('genero_id'))
                                <span class="text-danger">{{ $errors->first('genero_id') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="editorial_id" class="col-md-4 col-form-label text-md-end text-start">editorial_id</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('editorial_id') is-invalid @enderror" id="editorial_id" name="editorial_id">{{ old('editorial_id') }}</textarea>
                            @if ($errors->has('editorial_id'))
                                <span class="text-danger">{{ $errors->first('editorial_id') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir manga">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
