@extends('layouts.app')

        @section('content')
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 pr-5">
                    <h1 class="page-header-title">Registra tu cerveza comercial</h1>
                    <p class="page-header-text mb-5">Somos expertos cervezeros y muestra de ello es nuestra base de datos con más de 1.000 de cervezas registradas. Registra la tuya ahora, es gratis.</p>
                </div>


                <form method="POST" action="{{route('beer.store')}}" class="col-lg-6 d-lg-block bg-orange py-5 px-4">
                    @csrf
                    <h2 class="text-white pb-5">Registra tu Cerveza</h2>
                    <div class="form-group">
                      <label for="name">Nombre de la Cerveza</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                      @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="tipo">Descripción</label>
                        <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" id="tipo">
                        @error('tipo')
                      <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>     
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">url de la imagen</label>
                        <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                        @error('image')
                      <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>     
                      @enderror
                    </div>
                    
                    <span class="pb-2">Selecciona tu categoría</span>
                    <div class="input-group mb-3 form-group">
                        <select class="custom-select" id="category" name="category">
                          <option selected value="Tradicional">Tradicional</option>
                          <option value="Lager">Lager</option>
                          <option value="Trigo">Trigo</option>
                          <option value="Negra">Negra</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-outline-dark bg-light py-2 mt-3">Registrar</button>
                </form>
            </div>
        </div>
        <div class="container">
            <a href="{{route('beers.show')}}" class="btn btn-primary btn-lg active bg-orange" role="button" aria-pressed="true">Todas nuestras cervezas</a>
        </div>

        

        <button type="button" class="btn "></button>
    

        @endsection
    


</html>
