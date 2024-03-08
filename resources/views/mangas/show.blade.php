@extends('mangas.layouts')

@section('content')
<style>
  body {
    background-color: #436574;
    text-align:center
  }
</style>
<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Información del manga
                </div>
                <div class="float-end">
                    <a href="{{ route('mangas.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="titulo" class="col-md-4 col-form-label text-md-end text-start"><strong>Titulo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->titulo }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="precio" class="col-md-4 col-form-label text-md-end text-start"><strong>Precio:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->precio }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start"><strong>Stock:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->stock }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="imagen" class="col-md-4 col-form-label text-md-end text-start"><strong>Imagen:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->imagen }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="genero_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Genero_id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->genero_id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="editorial_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Editorial_id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $manga->editorial_id }}
                        </div>
                    </div>

                    
                   
                    @foreach ($reseñasManga as $reseñas) 
                    <h5>reseña</h5>
                        <div class="row">
                        <label for="genero_id" class="col-md-4 col-form-label text-md-end text-start"><strong>Contenido:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reseñas->contenido }}
                        </div>
                    </div>
                    
                    <div class="row">
                        <label for="puntuacion" class="col-md-4 col-form-label text-md-end text-start"><strong>Puntuacion:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reseñas->puntuacion }}
                        </div>
                    </div>
                    
                     @endforeach
        
            </div>
        </div>
    </div>    
</div>
    
@endsection