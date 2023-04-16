<?php
include_once("header.php");
?>    
<div class="container-sm mt-5">
      <form class="">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control focus-ring focus-ring-success"
                style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), 0.25)"
                id="nome-receita"
                placeholder="Nome da receita"
              />
              <label for="nome-receita">Nome da receita</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-floating mb-3">
              <select
                class="form-select focus-ring focus-ring-success"
                id="quantidades"
                aria-label="Floating label select example"
              >
                <option selected>Quantidades</option>
                <option value="1 Xícara">1 Xícara</option>
                <option value="1/2 Xícara">1/2 Xícara</option>
                <option value="1/4 Xícara">1/4 Xícara</option>
                <option value="1 colher de sopa">1 colher de sopa</option>
                <option value="1 colher de chá">1 colher de chá</option>
                <option value="1 colher de café">1 colher de café</option>
              </select>
              <label for="quantidades">Quantidades</label>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control focus-ring focus-ring-success"
                id="ingrediente"
                placeholder="Ingrediente"
              />
              <label for="ingrediente">Ingrediente</label>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-2">
          <div class="col-md-6">
            <div class="form-floating">
              <textarea
                class="form-control focus-ring focus-ring-success"
                placeholder="Modo de preparo"
                id="modo-preparo"
              ></textarea>
              <label for="modo-preparo">Modo de preparo</label>
            </div>
          </div>
        </div>

        <!-- Botão submit -->
        <div class="row justify-content-center">
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
<?php
include_once("footer.php");
?>