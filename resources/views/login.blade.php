<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Login</h2>

                    @auth
                    {{-- form template start --}}
                    <form method="post" action="/login">
                        @csrf

                      <div class="form-outline mb-4">
                        <input id = "username"name = "username" type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Username" value={{Cookie::get('remembercookie') !== null ? Cookie::get('remembercookie') :''}}>
                        <label class="form-label" for="form3Example1cg"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input id = "password" name = "password" type="password" id="form3Example3cg" class="form-control form-control-lg" placeholder="Password" />
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>
                      <div class="form-outline mb-4">
                        <input id = "password" name = "remember-me" type="checkbox" id="form3Example3cg" class="form-control form-control-lg" placeholder="Password" checked={{Cookie::get('remembercookie')!== null}} /> remember me
                        <label class="form-label" for="form3Example3cg"></label>
                      </div>


                      <div class="d-flex flex-column justify-content-center">
                        <button type="submit" class="btn btn-outline-primary">Login</button><br>
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        <i  class="text-danger text-center mt-3">{{$error}}</i><br>
                        @endforeach
                        @endif
                    </div>
                    </form>
                    {{-- form template end --}}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
@endif
</html>
