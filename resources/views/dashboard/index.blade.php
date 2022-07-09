@extends('dashboard.layouts.main')

@section('container')

    <div class="jumbotron">
        <div class="container text-center">
          <h3 class="display-4">{{ auth()->user()->name }}</h3>
          <p class="lead d-block"></span>{{ auth()->user()->email }}</p>
          <p class="lead">{{ auth()->user()->username }}</p>
        </div>
    </div>

    
      

@endsection
