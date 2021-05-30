<?php

//horario verano/Invierno
if (5 < date("n") and date("n") < 10) {
    $hoursStr = 'startWork1=0800&endWork1=1500&startWork2=0000&endWork2=0000';
}else{
    $hoursStr = 'startWork1=0800&endWork1=1400&startWork2=1500&endWork2=1900';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Control Horario CtrlB</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper black">
            <a href="#" class="brand-logo">CtrlB Control Horario</a>
        </div>
    </nav>


    <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Firma Rápida</span>
          <p>Si has hecho tu horario normal, por favor confirma aqui. Juana te lo agradecerá.</p>
        </div>
        <div class="card-action">
          <a href="/control_horario/add.php?worker=<?=$_GET['worker']?>&<?=$hoursStr?>">Confirmar</a>
        </div>
      </div>
    </div>
  </div>


    <div class="customsign">
        <p>Selecciona el Horario</p>
        <form method="POST" action="">
        
        </form>
    </div>
</body>
</html>