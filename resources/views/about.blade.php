<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .exp{
            border: 10px;
            border-radius: 10px;
            margin: 100px;
            justify-content: center;
            align-content: center;
            position: flex;
            text-align: center;
            background-color: #F1D00A;
        }
        body{
            background-color: #F1D00A;
            text-align: center;
            font-family: 'Nunito', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

    </style>

    <title>Home</title>
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

      <div class="exp">
          <p>Website kami menyediakan bermacam-macam course tentang IT yang dapat anda pelajari.</p>
          <p>Pada halaman home, anda akan melihat course apa saja yang sudah anda ambil dan menampilkan popular course.</p>
          <p>Pada halaman course, anda dapat melihat seluruh course yang tersedia.</p>
          <p>Pada halmaan user, anda dapat melihat data diri anda yang sudah anda masukkan saat registrasi.</p>
      </div>

  </body>
</html>
