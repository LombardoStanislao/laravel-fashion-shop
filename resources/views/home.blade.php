@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">{{ $text}}</h1>
      </div>

    </div>
    <div class="row">

        @foreach ($dresses as $dress)
          <div class="col-4 text-center">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header">{{$dress->price}}€</div>
              <div class="card-body text-secondary">
                <h5 class="card-title">{{$dress->type_garment}}</h5>
                <p class="card-text">{{$dress->colour}}</p>
                <p class="card-text">{{$dress->size}}</p>
                <p class="card-text">{{$dress->model_code}}</p>
              </div>
            </div>
          </div>
        @endforeach  
    </div>
  </div>



@endsection
