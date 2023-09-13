<!-- Pills navs -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?= $cabecera ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
  <div class="row">
    <div class="card col-md-6 colo-md-offset-6">
      <article class="card-body">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Registro</a>
          </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form id="form-login" action="#">
              <div class="text-center mb-3">
                <p>Ingrese sus credenciales:
                <p>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="loginName" class="form-control" />
                <label class="form-label" for="loginName">Usuario</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="loginPassword" class="form-control" />
                <label class="form-label" for="loginPassword">Contraseña</label>
              </div>

              <!-- 2 column grid layout -->
              <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-3 mb-md-0">
                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    <label class="form-check-label" for="loginCheck"> Recordar más tarde </label>
                  </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                  <!-- Simple link -->
                  <a href="#!">¿Olvidaste tu contraseña?</a>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>

              <!-- Register buttons -->
            </form>
          </div>

          <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <form action="POST" action="<?=site_url('/registroLogin')?>" id="form_register">

              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="text" id="registerName" class="form-control" />
                <label class="form-label" for="registerName">Nombre</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="registerEmail" class="form-control" />
                <label class="form-label" for="registerEmail">Email</label>
              </div>

              <!-- Date input -->
              <div class="form-outline mb-4">
                <input type="text" id="registerDate" class="form-control" />
                <label class="form-label" for="registerDate">Fecha de nacimiento</label>
              </div>

              <!-- Avatar input -->
              <div class="form-outline mb-4">
                <input type="text" id="registerAvatar" class="form-control" />
                <label class="form-label" for="registerAvatar">Avatar</label>
              </div>

              <!-- Nivel input -->
              <div class="form-outline mb-4">
                <input type="text" id="registerNivel" class="form-control" />
                <label class="form-label" for="registerNivel">Dificultad de juego</label>
              </div>

              <!-- Username input -->
              <div class="form-outline mb-4">
                <input type="text" id="registerUsername" class="form-control" />
                <label class="form-label" for="registerUsername">Username</label>
              </div>


              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="registerPassword" class="form-control" />
                <label class="form-label" for="registerPassword">Password</label>
              </div>

              <!-- Repeat Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="registerRepeatPassword" class="form-control" />
                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                  I have read and agree to the terms
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-3" onclick="ingresar();">Sign in</button>
            </form>
          </div>
        </div>
        <!-- Pills content -->
        
    </div>
  </div>
</div>

<script src= "<?php echo site_url(); ?>(/js/query/jquery.js)"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php echo site_url(); ?>/js/login.js"></script>
<?= $pie ?>
