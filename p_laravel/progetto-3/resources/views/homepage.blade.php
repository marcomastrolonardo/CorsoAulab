<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>

    <nav class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="btn btn-primary nav-link link-dark px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link link-dark px-2">About</a></li>
            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link link-dark px-2">Main</a></li>
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

      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="https://media.istockphoto.com/id/841064058/it/foto/mongolfiera-colorata.jpg?s=612x612&w=is&k=20&c=mMp3Xhob1L8e_AFM_DdMq8gnLnV7Nch-VWsRjQRFD9w=" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Vola con noi di Hot Air Balloon</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid contenitore">
        <div class="row">
          <div class="col-5 container departure bg-white my-4">

            <h3 style="color: red">Partenze</h3>

            <div class="row justify-content-between ">
              <div class="col-3">

                <ul class="list-group">
                  <b class="pt-2">Company</b>
                  <hr>
                @foreach ($fdeparture as $volo)
                  <li class="list-group-item">{{$volo['company']}}</li>
                @endforeach
                </ul>
                
              </div>
              <div class="col-1">
                <ul class="list-group">
                  <b class="pt-2">Gate</b>
                  <hr>
                  @foreach ($fdeparture as $volo)
                    <li class="list-group-item">{{$volo['gate']}}</li>
                  @endforeach
                  </ul>
              </div>

              <div class="col-5">
                <ul class="list-group">
                  <b class="pt-2">Cover</b>
                  <hr>
                  @foreach ($fdeparture as $volo)
                    <li class="list-group-item">{{$volo['cover']}}<a href="{{ route('info',['ref'=>$volo['id']]) }}" class="btn btn-sm btn-outline-info" role="button" aria-disabled="true">i</a></li>
                  @endforeach
                  </ul>
              </div>
            </div>
          </div>
          <div class="col-5 container arrival bg-white my-4">

            <h3 style="color: red">Arrivi</h3>

            <div class="row justify-content-between">

              <div class="col-3">

                <ul class="list-group">
                  <b class="pt-2">Company</b>
                  <hr>
                @foreach ($farrival as $volo)
                  <li class="list-group-item">{{$volo['company']}}</li>
                @endforeach
                </ul>
                
              </div>
              <div class="col-1">
                <ul class="list-group">
                  <b class="pt-2">Gate</b>
                  <hr>
                  @foreach ($farrival as $volo)
                    <li class="list-group-item">{{$volo['gate']}}</li>
                  @endforeach
                  </ul>
              </div>

              <div class="col-5">
                <ul class="list-group">
                  <b class="pt-2">Cover</b>
                  <hr>
                  @foreach ($farrival as $volo)
                    <li class="list-group-item">{{$volo['cover']}}<a href="{{ route('info',['ref'=>$volo['id']]) }}" class="btn btn-sm btn-outline-info" role="button" aria-disabled="true">i</a></li>
                  @endforeach
                  </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </main>

      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link px-2 text-body-secondary ">Home</a></li>
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
