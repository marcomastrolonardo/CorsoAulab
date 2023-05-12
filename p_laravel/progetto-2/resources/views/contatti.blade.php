<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Progetto L-2</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Homepage</a></li>
        <li class="nav-item"><a href="azienda" class="nav-link">Azienda</a></li>
        <li class="nav-item"><a href="lista-destinazioni" class="nav-link">Lista Destinazioni</a></li>
        <li class="nav-item"><a href="form-contatti" class="nav-link active">Form Contatti</a></li>
      </ul>
    </header>

    <main>

      <form id="contactForm" data-sb-form-api-token="API_TOKEN">

<!-- Name input -->
        <div class="mb-3">
          <label class="form-label" for="name">Nome</label>
          <input class="form-control" id="name" type="text" placeholder="Inserisci il tuo nome" data-sb-validations="required" />
          <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
        </div>

<!-- Email address input -->
        <div class="mb-3">
          <label class="form-label" for="emailAddress">Indirizzo email</label>
          <input class="form-control" id="emailAddress" type="email" placeholder="Inserisci l'indirizzo email" data-sb-validations="required, email" />
          <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
          <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
        </div>

<!-- Message input -->
        <div class="mb-3">
          <label class="form-label" for="message">Nota</label>
          <textarea class="form-control" id="message" type="text" placeholder="Aiutaci a migliorare" style="height: 10rem;" data-sb-validations="required"></textarea>
          <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
        </div>

<!-- Form submissions success message -->
        <div class="d-none" id="submitSuccessMessage">
        <div class="text-center mb-3">Form submission successful!</div>
        </div>

<!-- Form submissions error message -->
        <div class="d-none" id="submitErrorMessage">
        <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>

<!-- Form submit button -->
        <div class="d-grid">
        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>

      </form>

    </main>

    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Homepage</a></li>
      <li class="nav-item"><a href="azienda" class="nav-link px-2 text-body-secondary">Azienda</a></li>
      <li class="nav-item"><a href="lista-destinazioni" class="nav-link px-2 text-body-secondary">Lista destinazioni</a></li>
      <li class="nav-item"><a href="form-contatti" class="nav-link px-2 text-body-secondary">Form Contatti</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Progetto L_2, Inc</p>
  </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>