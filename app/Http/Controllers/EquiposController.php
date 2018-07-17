<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipos;
use App\Comments;


class EquiposController extends Controller
{

    public function __construct()
    {
        

        $this->middleware('auth', ['only' => ['store',   'edit', 'update', 'destroy']]);
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
            'codigo' => 'numeric|max:5|min:2|unique:equipos,codigo,',
            'modelo' => 'string|max:15|min:1',
            'serie' => 'alpha_dash|max:10|min:5|unique:equipos,serie,',
            'descripcion' => 'alpha_dash|max:50|min:5',
            'costo' => 'numeric|max:10|min:1',
            'nombre '=> 'string|max:40|min:10',
            'telefono' => 'numeric|max:11|min:10',
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
            'email' => $request->email
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
            'email' => $request->email
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

            $msg = ' Hapus Use Bersathil'; 
            }else{

            $msg = ' Hapus USER GAGAL'; 
    }
    return redirect()
    ->back()
    ->withSuccess($msg); 
}
}
