<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head>
<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
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


    {{-- profile start --}}
    <div class="container-fluid">
        <div class="main-body">

              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>{{Auth::user()->fullname}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->fullname}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->username}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->email}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->address}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->phone}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->age}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">BirtDate</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Auth::user()->BirthDate}}
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-12">
                          {{-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    {{-- profile end --}}


</body>

</html>
