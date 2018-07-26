<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{ asset('css/estilospdfs.css')}}">
</head>




@foreach ($equipos as $key => $equipo)











<html>

<head>
  <style>
    body {
      font-family: sans-serif;
    }

    @page {
      margin: 160px 50px;
    }

    header {
      position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
     
      text-align: center;
    }

    header h1 {
      margin: 30px 0;
    }

    header h2 {
      margin: 0 0 10px 0;
    }

    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }

    footer .page:after {
      content: counter(page);
    }

    footer table {
      width: 100%;
      color:white;
      background-color: red;
    }

    footer p {
      text-align: right;
    }

    footer .izq {
      text-align: left;
    }
  </style>

  <body>
    <header class="w3-red">
      
    <img src="{{asset('imgs/Pcreparalogo.png')}}" alt="" style="margin-top: 10px"> 
    </header>
    <footer>
      <table>
        <tr>
          <td>
            <p class="izq">
            www.pcrepara.com Tel. 6181081364
            </p>
          </td>
          <td>
            <p class="page">
              Página
            </p>
          </td>
        </tr>
      </table>
    </footer>
    <div style="background-color: white" class="container-fluid  ">
      <div class="row text-center" style="position: absolute; margin-top: 5px;"> <h3>Cliente</h3></div>
      
      <div class="row">
      <h5 class=""  style="position: absolute">Inicio: {{$equipo->created_at}}</h5>
      <h5  class="" style="position: absolute; margin: 0 0 0 500px;">Fin: {{$equipo->updated_at}}</h5>
      </div>
      <br>
      <div class="row">
      <h3 class="col-xs-4 border" style="margin: 0 0 0 0;">N° de Orden: #{{ $equipo->codigo}}</h3>
      <h3 class="col-xs-7 border" style="margin: 0 0 0 0;">Modelo: {{ $equipo->model}}</h3>
      </div>
      <br>
      <div class="row">
      <h3 class="col-xs-4 border " style=" margin: 0 0 0 0;">Serie: {{ $equipo->serie}}</h3>
      </div>
      <br>
      <div class="row">
      <h3 class="text-center border">Descripcion</h3>
      
      <h3 class="text-center border" style="margin: 0 0 0 0;"> {{ $equipo->descripcion}}</h3>
      </div>
      <br>
      
      <div class="row">
      <h3 class="col-xs-4 border" style="margin: 0 0 0 0;">Estado: {{ $equipo->estado}}</h3>
      <h3 class="col-xs-7 border" style="margin: 0 0 0 0;">Costo: ${{ $equipo->costo}}</h3>
      </div>
      <br>
      
      <div class="row">
        <h3 class="border text-center">Nombre del Cliente:</h3> </div>
      
        <div class="row">
      <h3 class="text-center border" style="margin: 0 0 0 0;">{{ $equipo->nombre}}</h3>
     
      </div> 
      <br>
       <div class="row">
        <h3 class="text-center border"> Email:</h3>
      <h3 class="text-center border" style="margin: 0 0 0 0;"> {{ $equipo->email}}</h3>
    </div>
    <br>
      <div class="row">
      <h3 class="col-xs-6 border" style="margin: 0 0 0 0;">Telefono: {{ $equipo->telefono}}</h3>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <h3 class="col-xs-5 text-center" style="border-top: 1px solid grey; margin: 0 0 0 0;">www.pcrepara.com</h3>
        <h3 class="col-xs-6 text-center" style="border-top: 1px solid grey; margin: 0 0 0 0;">{{ $equipo->nombre}}</h3>
      </div>
      
  </div>

    <p style="page-break-before: always;">
        <div style="background-color: white" class="container-fluid  ">
           
            <div class="row text-center" style="position: absolute; margin-top: 5px;"> <h3>Empleado</h3></div>
          <div class="row">
            <h5 class=""  style="position: absolute">Inicio: {{$equipo->created_at}}</h5>
            <h5  class="" style="position: absolute; margin: 0 0 0 500px;">Fin: {{$equipo->updated_at}}</h5>
            </div>
            <br>
            <div class="row">
            <h3 class="col-xs-4 border" style="margin: 0 0 0 0;">N° de Orden: #{{ $equipo->codigo}}</h3>
            <h3 class="col-xs-7 border" style="margin: 0 0 0 0;">Modelo: {{ $equipo->model}}</h3>
            </div>
            <br>
            <div class="row">
            <h3 class="col-xs-4 border " style=" margin: 0 0 0 0;">Serie: {{ $equipo->serie}}</h3>
            </div>
            <br>
            <div class="row">
            <h3 class="text-center border">Descripcion</h3>
            
            <h3 class="text-center border" style="margin: 0 0 0 0;"> {{ $equipo->descripcion}}</h3>
            </div>
            <br>
            
            <div class="row">
            <h3 class="col-xs-4 border" style="margin: 0 0 0 0;">Estado: {{ $equipo->estado}}</h3>
            <h3 class="col-xs-7 border" style="margin: 0 0 0 0;">Costo: ${{ $equipo->costo}}</h3>
            </div>
            <br>
            
            <div class="row">
              <h3 class="border text-center">Nombre del Cliente:</h3> </div>
            
              <div class="row">
            <h3 class="text-center border" style="margin: 0 0 0 0;">{{ $equipo->nombre}}</h3>
           
            </div> 
            <br>
             <div class="row">
              <h3 class="text-center border"> Email:</h3>
            <h3 class="text-center border" style="margin: 0 0 0 0;"> {{ $equipo->email}}</h3>
          </div>
          <br>
            <div class="row">
            <h3 class="col-xs-6 border" style="margin: 0 0 0 0;">Telefono: {{ $equipo->telefono}}</h3>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
              <h3 class="col-xs-5 text-center" style="border-top: 1px solid grey; margin: 0 0 0 0;">www.pcrepara.com</h3>
              <h3 class="col-xs-6 text-center" style="border-top: 1px solid grey; margin: 0 0 0 0;">{{ $equipo->nombre}}</h3>
            </div>
            
        </div>
       
    </div>
  </body>

</html>@endforeach