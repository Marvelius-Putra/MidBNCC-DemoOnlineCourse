<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <style>
        body {
            text-align: center;
            font-family: 'Nunito', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>

    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp'); border: 10px; border-radius: 10px; margin: 100px; justify-content: center; align-content: center; position: flex;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    {{-- form template start --}}
                    <form method="post" action="/register">
                        @csrf

                      <div class="form-outline mb-4">
                        <input id = "fullname" name = "fullname" type="text" id="form3Example1cg" class="form-control form-control-lg " placeholder="Fullname" />
                        <label class="form-label" for="form3Example1cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "username"name = "username" type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Username"/>
                        <label class="form-label" for="form3Example1cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "email" name = "email" type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Email" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "password" name = "password" type="password" id="form3Example3cg" class="form-control form-control-lg" placeholder="Password" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "password-confirm" name = "password-confirm" type="password" id="form3Example3cg" class="form-control form-control-lg" placeholder="Password Confirmation" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "address" name = "address" type="text" id="form3Example3cg" class="form-control form-control-lg" placeholder="Address" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "phone" name = "phone" type="text" id="form3Example3cg" class="form-control form-control-lg" placeholder="Phone Number" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id="age" name = "age" type="text" id="form3Example3cg" class="form-control form-control-lg" placeholder="Age" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>

                      <div class = "form-group">
                          <label for="started_at">
                              Birthdate
                          </label>
                          <input name = "birthdate" type="date" id = "started_at" class="form-control form-control" value = "{{ old('started_at')}}">
                      </div>

                      <div class="d-flex flex-column justify-content-center">
                        <button type="submit" class="btn btn-outline-primary">Register</button><br>
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        <i  class="text-danger text-center mt-3">{{$error}}</i><br>
                        @endforeach
                        @endif
                    </div>
                      <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login" class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>
                    {{-- form template ends --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
