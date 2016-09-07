<!DOCTYPE html>
<html lang="es-ES" ng-app="softver-aqua">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Aqua - Inicio</title>
	<link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= asset('css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= asset('css/index.css') ?>" rel="stylesheet">
  <link href="<?= asset('css/style_generic_app.css') ?>" rel="stylesheet">
</head>
<body ng-controller="mainController">
  <header>
  <hr>
    <div class="titulo"><span style="font-weight: bold;">{{titulo | uppercase}}</span></div>
    
    <nav>
    <div class="brandLogo">
      <img src="img/logotipo-interno.png">
    </div>
      <ul>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
        <li class="padre"><a href="#"><i class="fa fa-tint" aria-hidden="true"></i>Recaudación<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="toModuloRecaudacion();">Cobro Agua</a></li>
            <li><a href="#" ng-click="">Lecturas</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i></i>Suministros<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="">Suministros</a></li>
            <li><a href="#" ng-click="toModuloProvincia();">Provincia</a></li>
            <li><a hidden href="#" ng-click="toModuloCanton(idprovincia);">Canton</a></li>
            <li><a hidden href="#" ng-click="toModuloParroquia(idcanton);">Parroquia</a></li>
            <li><a hidden href="#" ng-click="toModuloBarrio(idparroquia);">Barrio</a></li>
            <li><a hidden href="#" ng-click="toModuloCalle(idbarrio);">Calle</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Solicitudes<i class=" der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="toModuloSolicitud();">Solicitudes</a></li>
            <li><a href="#" ng-click="">Solicitudes en espera</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Clientes<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="toModuloCliente();">Clientes</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-male" aria-hidden="true"></i>Nomina<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="toModuloEmpleado();">Personal</a></li>
            <li><a href="#" ng-click="toModuloCargo();">Cargos</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Perfil<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="perfil" ng-click="">Editar Perfil</a></li>
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Usuarios<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#" ng-click="">Usuarios</a></li>
            <li><a href="#" ng-click="">Roles</a></li>
            
          </ul>
        </li>
        <li class="padre"><a href="#"><i class="fa fa-cog fa-spin" aria-hidden="true"></i>Configuración<i class="der fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul class="hijos">
            <li><a href="#">Configuración del sistema</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <section ng-include="toModulo">

  </section>

  <footer>
    powered by IMMPACT MEDIA
  </footer>

        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script src="<?= asset('js/menuLateral.js') ?>"></script>
        
        <script src="<?= asset('app/app.js') ?>"></script>

        <script src="<?= asset('app/controllers/mainController.js') ?>"></script>
        <script src="<?= asset('app/controllers/clientesController.js') ?>"></script>
        <script src="<?= asset('app/controllers/cargosController.js') ?>"></script>
        <script src="<?= asset('app/controllers/empleadosController.js') ?>"></script>
        <script src="<?= asset('app/controllers/recaudacionController.js') ?>"></script>
        <script src="<?= asset('app/controllers/provinciasController.js') ?>"></script>
        <script src="<?= asset('app/controllers/cantonesController.js') ?>"></script>
        <script src="<?= asset('app/controllers/parroquiasController.js') ?>"></script>
        <script src="<?= asset('app/controllers/barriosController.js') ?>"></script>
        <script src="<?= asset('app/controllers/callesController.js') ?>"></script>
  </body>

  

        
</html>

