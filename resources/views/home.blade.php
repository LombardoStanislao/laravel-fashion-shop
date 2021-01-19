@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">{{ $text}}</h1>
      </div>

    </div>
    <div class="row">
      <div class="col-12 text-center">
        <ul class="text-center">
          @foreach ($dresses as $dress)
            <li>
              <p>{{$dress->type_garment}}</p>
              <p>{{$dress->model_code}}</p>
              <p>{{$dress->colour}}</p>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

  </div>
@endsection
