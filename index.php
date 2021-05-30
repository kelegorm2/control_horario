<?php

if (!isset($_GET['worker'])) {
  $worker = "anonymous";
}

//horario verano/Invierno
if (5 < date("n") and date("n") < 10) {
  $hoursStr = 'startWork1=0800&endWork1=1500&startWork2=0000&endWork2=0000';
} else {
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
          <a href="/control_horario/add.php?worker=<?= $worker ?>&<?= $hoursStr ?>">Confirmar</a>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Personalizada</span>
          <p>En caso de no haber hecho las horas normales. Personaliza tu firma aqui:</p>
          <label for="startWork1">Comiezo Jornada Mañana</label>
          <input type="text" id="startWork1" class="timepicker">

          <label for="endWork1">Final Jornada Mañana</label>
          <input type="text" id="endWork1" class="timepicker">

          <label for="startWork2">Comiezo Jornada Tarde</label>
          <input type="text" id="startWork2" class="timepicker">

          <label for="endWork2">Final Jornada Tarde</label>
          <input type="text" id="endWork2" class="timepicker">
        </div>
        <div class="card-action">
          <a href="#" id="confirmarPerso">Confirmar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var instances1 = M.Timepicker.init(document.querySelectorAll('#startWork1'), {
        'twelveHour': false,
        'defaultTime': '08:00'
      });
      var instances2 = M.Timepicker.init(document.querySelectorAll('#endWork1'), {
        'twelveHour': false,
        'defaultTime': '14:00'
      });
      var instances3 = M.Timepicker.init(document.querySelectorAll('#startWork2'), {
        'twelveHour': false,
        'defaultTime': '15:00'
      });
      var instances4 = M.Timepicker.init(document.querySelectorAll('#endWork2'), {
        'twelveHour': false,
        'defaultTime': '19:00'
      });
    });

    document.querySelector("#confirmarPerso").addEventListener('click', function() {
      startWork1 = document.querySelector('#startWork1').value.replace(":", "");
      endWork1 = document.querySelector('#endWork1').value.replace(":", "");
      startWork2 = document.querySelector('#startWork2').value.replace(":", "");
      endWork2 = document.querySelector('#endWork2').value.replace(":", "");


      url = "/control_horario/add.php?worker=<?= $worker ?>&" + "startWork1=" + startWork1 + "&endWork1=" + endWork1 + "&startWork2=" + startWork2 + "&endWork2=" + endWork2;
      window.location.href = url;
    });
  </script>
</body>

</html>