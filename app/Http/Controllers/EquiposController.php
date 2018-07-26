<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipos;
use App\Comments;


class EquiposController extends Controller
{

    public function __construct()
    {
        

        $this->middleware('auth', ['only' => ['store', 'equipos', 'home', 'ver', 'index', 'edit', 'update', 'destroy']]);
    }

    public function ver($id)
    {   
   $equipo = new Equipos;
   $equipos = $equipo-> where('id', $id)->get();
        return view ('ver',["equipos"=>$equipos]);
    }
    public function index()
    {

        $data['equipos'] = Equipos::all();
        return view('equipos', $data);
    }

   
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'codigo' => 'numeric|max:9999|min:10|unique:equipos,codigo,',
            'modelo' => 'string|max:15|min:1',
            'serie' => 'alpha_dash|max:10|min:5|unique:equipos,serie,',
            'descripcion' => 'string|max:200|min:20',
            'costo' => 'numeric|max:2000|min:25',
            'nombre '=> 'string|max:40|min:10',
            'telefono' => 'string|max:11|min:10',
            'email' => 'email|max:30|min:10|unique:equipos,email,'
            
        ]);
        $equipo = [

            'codigo' => $request->codigo,
            'model' => $request->model,
            'serie' => $request->serie,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'costo' => $request->costo,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'created_at'=> $request->created_at
        ];
        $save = Equipos::insert($equipo);
            if($save)
                return redirect('equipos');
                else

                return redirect()->back()->withInput(); 
    }


    public function show()
    {
        
    
            $data['equipos'] = Equipos::all();
            return view('welcome', $data);
        
    }

    public function indexbuscando($id)
    {
        $equipo = new Equipos;
        $equipos = $equipo-> where('codigo', $id)->get();
     
        return view('equiposbuscando',['equipos'=>$equipos]);
    }

    public function search(){

   $codigo = request()->codigo;
        $id = request()->codigo;
   $equipo = new Equipos;
   $equipos = $equipo-> where('codigo', $codigo)->get();
  
    
    return redirect("/equipo/$id");
    }
    
    public function edit($id)
    {
        $data['equipo'] = Equipos::find($id);
        return view('editar', $data);
    }

  
    public function update(Request $request, $id)
    {   


        $validate = $request->validate([
        
            'descripcion' => 'string|max:250|min:5',
            'costo' => 'numeric|max:20000|min:10'
           
        ]);

       if($request->has('codigo')){
           $codigo = $request->codigo;
       $equipo = [

            'codigo' => $request->codigo,
            'model' => $request->model,
            'serie' => $request->serie,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'costo' => $request->costo,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'created_at' => $request->created_at,
        ];
    }else{
        $equipo =[
        'codigo' => $request->codigo,
        'model' => $request->model,
        'serie' => $request->serie,
        'descripcion' => $request->descripcion,
        'estado' => $request->estado,
        'costo' => $request->costo,
        'nombre' => $request->nombre,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'created_at' => $request->created_at,
        ];
    }
        
        $update = Equipos::find($id) ->update($equipo);
            if($update)
                return redirect('equipos');
                else

                return redirect()->back()->withInput(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipos::find($id);
        if($equipo){

            $equipo->destroy($id);

            $msg = 'Equipo eliminado'; 
            }else{

            $msg = ' No se ha podido eliminar el equipo'; 
    }
    return redirect()
    ->back()
    ->withSuccess($msg); 
}
}
