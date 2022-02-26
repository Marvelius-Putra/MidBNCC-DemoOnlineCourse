<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Courses</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/home">LnT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/course">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- end navbar --}}

    {{-- title courses card start --}}
@extends('master')
@section('title', 'Courses')
@section('content')
{{-- searching start --}}
    <div class="d-flex justify-content-center mt-3">
        <form class="form-inline" action="/search" method="get">
            <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search" />
            <button class="btn btn-outline-dark">Search</button>
        </form>
        {{-- searching end --}}
    </div>
    <div class="row m-2 d-flex justify-content-center" style="background-color: #398AB9;">
        {{-- courses card start --}}

        @foreach($course as $m)
        <div class="col col-sm-3">
            <div class="card bg-light mb-3 border border-warning">
                <div class="card-body">
                    <div>
                        <div class="m-3">
                            <h4 class="card-title text-center">{{$m->title}}</h4>
                            <p class="card-subtitle text-center">{{$m->views}} Learners</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-primary mr-3" href="/detail/{{ $m->id }}">Details</a>
                        <a class="btn btn-outline-danger mr-3" href="#">Enroll</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- courses card end --}}
    </div>
    <div class="m-5 d-flex justify-content-center">
        {{-- {{$course->links()}} --}}
    </div>
@endsection
