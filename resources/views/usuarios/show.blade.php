@extends('usuarios.layouts')

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
                    Información del usuario
                </div>
                <div class="float-end">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Nombre:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $usuario->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $usuario->email }}
                        </div>
                    </div>

                  
        
            </div>
        </div>
    </div>    
</div>
    
@endsection