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
            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link link-dark px-2">Main</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="btn btn-primary nav-link link-dark px-2 active">Contact</a></li>
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

      <main class="container">
        <!--Section: Contact v.2-->
        <section class="mb-4">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contattaci</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores, ex veniam, quisquam cumque nihil dignissimos doloremque eos ad provident mollitia consequatur laboriosam illum soluta. Dolores quidem cumque quod incidunt?</p>

          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6 ">
                              <div class="md-form mb-2">
                                <label for="name" class="">Nome</label>
                                <input type="text" id="name" name="name" class="form-control">
                                  
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-2">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-2">
                                <label for="subject" class="">Oggetto</label>
                                <input type="text" id="subject" name="subject" class="form-control">
                                  
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form mb-2">
                                <label for="message">Nota</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                  
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Triggiano, BA 70019, Italia</p>
                      </li>

                      <li><i class="fas fa-phone mt-4 fa-2x"></i>
                          <p>+ 01 234 567 89</p>
                      </li>

                      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                          <p>contact@gmail.com</p>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->

          </div>

        </section>
        <!--Section: Contact v.2-->
       
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
