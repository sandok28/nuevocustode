
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!! Html::style('css/bootstrap.min.css') !!}
  {!! Html::style('css/flexboxgrid.css') !!}
  {!! HTML::script('js/jquery.min.js') !!}
  {!! HTML::script('js/bootstrap.min.js') !!}

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
    margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
    padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
    background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
    .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <a class="navbar-brand" href="#">Funcionario</a>
          <li style="width: 50px; height: 50px; border: 3px solid white;"></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-left">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="/Funcionarios">Funcionarios</a></p>
      <p><a href="#">Secciones y Cargos</a></p>
        <p><a href="#">Invitados</a></p>
        <p><a href="#">Usuario</a></p>
        <p><a href="#">Horarios</a></p>
        <p><a href="#">Licencias</a></p>
        <p><a href="#">Gestion de Areas</a></p>
        <p><a href="#">Control de Areas</a></p>
        <p><a href="#">Estadisticas</a></p>
        <p><a href="#">Auditoria</a></p>
        <p><a href="#">Reportes</a></p>
        <p><a href="#">Ahorro de Energia</a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left">
        @yield('content')
        <p>Lorem</p>
    </div>

  </div>
</div>

<footer class="container-fluid text-center">
  <p>CUSTODE</p>
</footer>

</body>
</html>