

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pc Repara</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Styles -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--<link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: rgb(120, 120, 120)!important;">

<div class="container-fuid encabezado" style="background-color: #ff4040;color:#fff;height:20%;">

<div>
  <a>
    <img class="imglogo" src="{{ asset('imgs/Pcreparalogo.png')}}" width="100%">
  </a>
</div>

</div>
<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="150">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand textencabezado" href="/">PCREPARA</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li>
            <a class="textencabezado" href="/login">Administracion</a>
          </li>
          <li>
            <a class="textencabezado" href="/register">Registro</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>

<div id="" class="container-fluid" >
  <div class="container">
    <h4 class="text-center">Encuentra tu equipo</h4>
    <div class="container"> 
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Busqueda
                </div>
                <div class="panel-body">
                  <form method="POST" action="/search/event">
                    {{ csrf_field()}}
                     
                        <input type="text" class="form-control" name="codigo" placeholder="Buscar..." required autofocus/>
                             <br>

                  <button type="submit" class="form-control">Buscar</button>
               </form>
               </div>
              </div>
            </div>
          </div>
          
        </div> 
        
        <div class="col-md-8">
            <div class="panel ">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-time" aria-hidden=""></span> Tu Equipo
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="table-resposive">
                              <table class="table table-hover table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Codigo</th>
                                          <th>Modelo</th>
                                          <th>Serie</th>
                                          <th>Descripcion</th>
                                          <th>Estado</th>
                                          <th>Costo</th>
                                  
                                      </tr>
                                  </thead>
                                  <tbody>
                                
                                      @foreach ($equipos as $key => $equipo)
                                      <tr class="info">
                                          <td>{{($key+1)}}</td>
                                          <td>{{ $equipo->codigo}}</td>
                                          <td>{{ $equipo->model}}</td>
                                          <td>{{ $equipo->serie}}</td>
                                          <td>{{ $equipo->descripcion}}</td>
                                          <td>{{ $equipo->estado}}</td>
                                          <td>{{ $equipo->costo}}</td>
                                        
                                     
                                      </tr>

                                     
                                      @endforeach  
                                 
                  
                                  </tbody>
                              </table>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>


</body>

</html>