
@extends('layouts.app')
@section('content')
<head>
        <link rel="stylesheet" href="{{ asset('css/estilospdfs.css')}}">
</head>
<body style="background-color: rgb(120, 120, 120)!important;"></body>
@foreach ($equipos as $key => $equipo)
          
            <div class="w3-row">
            <div class="w3-container-fluid">
            <div class=" col-sm-6   col-sm-offset-3 ">
                <div class="w3-card-4" style="width:100%;">
                    <header class="w3-container w3-red w3-row">
                        <h1 class="titulover">Equipo: #{{ $equipo->codigo}} -{{ $equipo->model}}</h1>
                    </header>

                    <div style="background-color: white" class="w3-container w3-row ">
                        <h3 class="w3-col s6 tcodigover">Codigo:</h3>
                        <h3 class="w3-col s6 codigover">{{ $equipo->codigo}}</h3> 
                        <h3 class="w3-col s6 tmodelover">Modelo:</h3>
                        <h3 class="w3-col s6 modelover">{{ $equipo->model}}</h3>
                        <h3 class="w3-col s6 tseriever">Serie:</h3>
                        <h3 class="w3-col s6 seriever">{{ $equipo->serie}}</h3>
                        <h3 class="w3-col s6 tdescripcionver">Descripcion:</h3>
                        <h3 class="w3-col s6 descripcionver">{{ $equipo->descripcion}}</h3>
                        <h3 class="w3-col s6 testadover">Estado:</h3>
                        <h3 class="w3-col s6 estadover">{{ $equipo->estado}}</h3>
                        <h3 class="w3-col s6 tcostover">Costo:</h3>
                        <h3 class="w3-col s6 costover">{{ $equipo->costo}}</h3>
                        <h3 class="w3-col s6 tnombrever">Nombre:</h3>
                        <h3 class="w3-col s6 nombrever">{{ $equipo->nombre}}</h3>
                        <h3 class="w3-col s6 ttelefonover">Telefono:</h3>
                        <h3 class="w3-col s6 telefonover">{{ $equipo->telefono}}</h3>
                        <h3 class="w3-col s6 temailver">Email:</h3>
                        <h3 class="w3-col s6 emailver">{{ $equipo->email}}</h3>
                    </div>

                    <footer class="w3-container w3-red w3-row">
                        <h5 class="w3-col s6"><a>www.pcrepara.com</a></h5>
                        <h5 class="w3-col s6 text-right">619-122-12-12</h5>
                    </footer>
                </div>
                </div>
            </div>
           </div>

            @endforeach
</body>

       
    


@endsection