@extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row">
                @foreach ($cerverzas as $cerveza)
                <div class="card lg-4 mb-3">
                <img src="{{$cerveza->image}}" class="card-img-top" alt="{{$cerveza->image}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$cerveza->name}}</h5>
                      <p class="card-text">{{$cerveza->tipo}}</p>
                    <p class="card-text"><small class="text-muted">Categorías:{{$cerveza->category}}</small></p>
                    </div>
                  </div>
                  
              @endforeach
              <x-beer-component/>

            </div>
        </div>


        @endsection

