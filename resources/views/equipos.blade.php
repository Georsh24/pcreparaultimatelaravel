@extends('layouts.app')
@section('content')
<div class="container">
<center>
    <h3>Registrar nuevo equipo</h3>
</center>
@if (Session::has('success'))

<h3>{{Session::get('success')}}</h3>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="w3-responsive">
            <table class="w3-table-all w3-card-4 w3-small">
                <thead>
                    <tr class="w3-red">
                        <th>No.</th>
                        <th>Codigo</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Costo</th>
                        
                        <th>

                        
                            <a href="{{ URL('equipos/create')}}" class="btn btn-success btn-xs"  >Nuevo <img src="{{ asset('imgs/nuevo.png')}}" width="25px"> </a>
                        </th>
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
                                <td>
                               <div class="w3-bar">
                                    <a  href="{{URL ('/equipo/ver/'. $equipo->id )}}" class="col-sm-3 w3-button  w3-orange w3-hover-grey ">ver</a>
                                <a  href="{{URL ('/equipos/' . $equipo->id . '/edit')}}" class="col-sm-3 w3-button  w3-blue w3-hover-grey "><img src="{{ asset('imgs/edit.png')}}" ></a>
                                <a href="{{URL ('/pdf/' . $equipo->codigo  )}}" class=" col-sm-3 w3-button  w3-green w3-hover-grey "><img src="{{ asset('imgs/print.png')}}" ></a>
                           
                                <form action="{{ URL('equipos/'. $equipo->id )}}" method="POST"> {{ csrf_field()}}{{ method_field('DELETE')}}
                                

                                
                               <button type="submit" class="col-sm-3 w3-button  w3-red w3-hover-grey"><img src="{{ asset('imgs/delete.png')}}" ></button>
                            </form>
                            
                               

                               </div>
                            
                            </td>
                        </tr>

                        
                        @endforeach
                   

                </tbody>
            </table>
            
        </div>
    </div>
</div>
</div>
@endsection