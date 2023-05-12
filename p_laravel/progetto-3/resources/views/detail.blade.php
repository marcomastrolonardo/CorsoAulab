<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <nav class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link link-dark px-2" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link link-dark px-2">About</a></li>
            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link link-dark px-2 active">Main</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link link-dark px-2">Contact</a></li>
          </ul>
          <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
          </ul>
        </div>
    </nav>

    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
          <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Progetto L-3</span>
          </a>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
        </div>
    </header>

    <main>

        <div class="container">
            <div class="row justify-content-between">

                    <div class="card col-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="{{$elemento['img']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$elemento['name']}}</h5>
                            <p class="card-text">{{$elemento['info']}}</p>
                            <a href="{{ route('detail', ['product'=>$elemento['name']]) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                
            </div>
        </div>
        
    </main>

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-body-secondary">About</a></li>
            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-body-secondary">Main</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link px-2 text-body-secondary">Contact</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 Progetto L-3, Inc</p>
        </footer>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>