



<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pc Repara</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Styles -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

</head>


<body>
    
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
            <div class="w3-row">
            <div class="w3-container-fluid">
            <div class="col-sm-4 col-xs-6  col-xs-offset-3 col-sm-offset-4 ">
                <div class="w3-card-4" style="width:100%;">
                    <header class="w3-container w3-blue w3-row">
                        <h1>Equipo: #{{ $equipo->codigo}} -{{ $equipo->model}}</h1>
                    </header>

                    <div class="w3-container w3-row ">
                        <h3 class="w3-col s6 ">Codigo:</h3>
                        <h3 class="w3-col s6">{{ $equipo->codigo}}</h3>
                        <h3 class="w3-col s6">Modelo:</h3>
                        <h3 class="w3-col s6">{{ $equipo->model}}</h3>
                        <h3 class="w3-col s6">Serie:</h3>
                        <h3 class="w3-col s6">{{ $equipo->serie}}</h3>
                        <h3 class="w3-col s6">Descripcion:</h3>
                        <h3 class="w3-col s6">{{ $equipo->descripcion}}</h3>
                        <h3 class="w3-col s6">Estado:</h3>
                        <h3 class="w3-col s6">{{ $equipo->estado}}</h3>
                        <h3 class="w3-col s6">Costo:</h3>
                        <h3 class="w3-col s6">{{ $equipo->costo}}</h3>
                        <h3 class="w3-col s6">Nombre:</h3>
                        <h3 class="w3-col s6">{{ $equipo->nombre}}</h3>
                        <h3 class="w3-col s6">Telefono:</h3>
                        <h3 class="w3-col s6">{{ $equipo->telefono}}</h3>
                        <h3 class="w3-col s6">Email:</h3>
                        <h3 class="w3-col s6">{{ $equipo->email}}</h3>
                    </div>

                    <footer class="w3-container w3-blue w3-row">
                        <h5 class="w3-col s6">www.pcrepara.com</h5>
                        <h5 class="w3-col s6 text-right">619-122-12-12</h5>
                    </footer>
                </div>
                </div>
            </div>
           </div>

            @endforeach


        </tbody>
    </table>
</body>