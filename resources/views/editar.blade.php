@extends('layouts.app')
@section('content')    
<body style="background-color: rgb(120, 120, 120)!important;">

<div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading w3-red ">Registro</div>
    
                    <div class="panel-body">
                            <form action="{{ URL('equipos')}}{{isset($equipo) ? '/' . $equipo->id: ''}}" method="POST">
                                <div class="">
                    
                                    {{ csrf_field()}}
                    
                                    @if (isset($equipo))
                    
                                    {{ method_field('PUT')}}
                    
                                    @endif
    
                                   
                                            
                                        
                                            <div class="">
                                                <input id="codigo" type="text" class="w3-input  w3-animate-input" style="width: 75%; display: none;" name="codigo" placeholder="#12345" value="{{ $equipo->codigo}}">
                    
                                                @if ($errors->has('codigo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('codigo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        
                    
                                                    
                                            <div class="">
                                                <input id="model" type="text" class="w3-input w3-animate-input" style="width: 75%; display: none;" name="model" placeholder="Modelo" value=" {{ $equipo->model}}" >
                    
                                                @if ($errors->has('model'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('model') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                      
                    
                                                  
                    
                                            <div class="">
                                                <input id="serie" type="text" class="w3-input w3-animate-input" style="width: 75%; display: none;" name="serie" placeholder="NV56R12m" value="{{ $equipo->serie}}" >
                    
                                                @if ($errors->has('serie'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('serie') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        
                                    
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                            <label for="descripcion" class=" control-label">Descripcion</label>
                    
                                            <div class="">
                                                <input id="descripcion" type="text" class="w3-input w3-animate-input" style="width: 75%;" name="descripcion" placeholder="Descripcion del problema" value="{{ $equipo->descripcion}}">
                    
                                                @if ($errors->has('descripcion'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                            <label for="estado" class=" control-label">Estado</label>
                    
                                            <div class="">
                                                <select id="estado"  class="w3-select w3-animate-input"  style="width: 75%" name="estado" placeholder="" value="{{ $equipo->estado}}" >
                                                <option>En Revisión</option>
                                                <option>En Reparación</option>
                                                <option>Comunicate con Nosotros</option>
                                                <option>Listo</option>
                                                    </select>
                                                @if ($errors->has('estado'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('estado') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                                            <label for="costo" class=" control-label">Costo Aproximado $:</label>
                    
                                            <div class="">
                                                <input id="costo" type="text" class="w3-input w3-animate-input" style="width: 75%;" name="costo" placeholder="199" value="{{ $equipo->costo}}" >
                    
                                                @if ($errors->has('costo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('costo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>

                                              
                                                <div class="">
                                                    <input id="nombre" type="text" class="w3-input w3-animate-input"  style="width: 75%; display: none;" name="nombre" placeholder="199" value="{{ $equipo->nombre }}">
                        
                                                    @if ($errors->has('nombre'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('nombre') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                               
                                         
    
                                                              
                                                <div class="">
                                                    <input id="telefono" type="text"  class="w3-input w3-animate-input" style="width: 75%; display: none;" name="telefono"  value="{{$equipo->telefono}}" >
                        
                                                    @if ($errors->has('telefono'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('telefono') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                               
                                                
                                            
    
                                                              
                                                <div class="">
                                                    <input id="email" type="text" class="w3-input w3-animate-input" style="width: 75%; display: none;" name="email"  value="{{$equipo->email}}">
                        
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                               
                                                
                                            </div>
                                            <div class="col-md-6 form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                                           
                    
                                            <div class="">
                                       
                                                <input type="strings" name="created_at" id="created_at" class="w3-input w3-animate-input" style="width:75%; display:none;" readonly="readonly" value="{{$equipo->created_at}}">
                                                @if ($errors->has('created_at'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('created_at') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>

                 
                          
                            <div class="form-group">
                                <div class="col-md-6 ">
                                        <button type="submit" class="btn btn-sm btn-success">Agregar</button>
                                        
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        

@endsection
</body>