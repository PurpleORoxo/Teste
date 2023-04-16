<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"/>
</head>
<body>
<section class="vh-100" style="background-color: #Dc392b;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Registro</h3>

            <div class="form-outline mb-4">
              <input type="email" id="Usuario" class="form-control form-control-lg " placeholder = "Usuário" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="Nome" class="form-control form-control-lg "placeholder = "Nome" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="Senha" class="form-control form-control-lg "placeholder = "Senha" />
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>