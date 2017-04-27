<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Light Bootstrap Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="css/animate.min.css" rel="stylesheet"/>

  <!--  Light Bootstrap Table core CSS    -->
  <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="css/demo.css" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
  <div class="sidebar" data-color="AZURE" data-image="img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="" class="simple-text">
          CUSTODE
        </a>
      </div>

      <ul class="nav">
        <li>
          <a href="/Funcionarios">
            <i class="pe-7s-user"></i>
            <p>INVITADOS</p>
          </a>
        <li>
          <a href="typography.html">
            <i class="pe-7s-user"></i>
            <p>FUNCIONARIOS</p>
          </a>
        </li>
        <li>
          <a href="table.html">
            <i class="pe-7s-door-lock"></i>
            <p>PUERTAS</p>
          </a>
        </li>
        <li>
          <a href="maps.html">
            <i class="pe-7s-plus"></i>
            <p>PERMISOS</p>
          </a>
        </li>
        <li>
          <a href="notifications.html">
            <i class="pe-7s-clock"></i>
            <p>ASIGNACIÓN DE HORARIOS</p>
          </a>
        </li>
        <li>
          <a href="icons.html">
            <i class="pe-7s-menu"></i>
            <p>GESTION DE AREAS</p>
          </a>
        </li>
        <li>
          <a href="notifications.html">
            <i class="pe-7s-menu"></i>
            <p>GESTION DE USUARIOS</p>
          </a>
        </li>
        <li>
          <a href="notifications.html">
            <i class="pe-7s-menu"></i>
            <p>GESTION DE INVITADOS</p>
          </a>
        </li>
        <li class="active">
          <a href="/estadisticas">
            <i class="pe-7s-graph"></i>
            <p>ESTADISTICAS</p>
          </a>
        </li>
        <li>
          <a href="notifications.html">
            <i class="pe-7s-bell"></i>
            <p>AUDITORIAS</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="">
                <p>FUNCIONARIO</p>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>
                  LOGIN
                  <b class="caret"></b>
                </p>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <p>LOG OUT</p>
              </a>
            </li>
            <li class="separator hidden-lg hidden-md"></li>
          </ul>
        </div>
      </div>
    </nav>


@yield('content')

  </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>
