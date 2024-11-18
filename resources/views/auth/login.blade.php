<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <br><br>
      <div class="container border-0">
        <center>LOGIN
          <div class="card" style="max-height: 70%; max-width: 70%;">
              
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>

            @endif

            <form class="col-12" style="padding: 0%;" method="POST">
              @csrf
              <div class="row"> <br> <br>
                <div class="input-field col-2">
                </div>
                <div class="input-field col-8">
                  <input name="email" id="email" type="email" required>
                  <label for="email">Correo</label>
                </div>
                <div class="input-field col-2">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="input-field col-2">
                </div>
                <div class="input-field col-8">
                  <input name="password" id="password" type="password" required>
                  <label for="password">Contrase&ntilde;a</label>
                </div>
                <div class="input-field col-2">
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-danger">Iniciar Sesi&oacute;n</button>
              <br>
              <br>
            </form>
            </div>
        </center>
          
      </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>   