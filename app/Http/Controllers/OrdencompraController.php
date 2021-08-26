<?php

namespace App\Http\Controllers;

use App\Ordencompra;
use Illuminate\Http\Request;

class OrdencompraController extends Controller
{
    public function index()
    {
        $ordens =Ordencompra::orderBy('orden', 'asc')->get();;
        echo json_encode($ordens);
    }





    

    
     public function store(Request $request)
    {
        $orden = new Ordencompra();
        $orden->producto_id = $request->input('producto_id');
        $orden->estatu_id = $request->input('estatu_id');
        $orden->user_id = $request->input('user_id');
       


  
      

        $orden->save(); // para guardar en json

        echo json_encode($orden); // para pasar en json
    }

   

    public function show($orden_id)
    {
        $ordens =Ordencompra::find($orden_id);
        echo json_encode($ordens);
    }
      

   
    public function update(Request $request, $orden_id)
    {
        $orden =Ordencompra::find($orden_id);
        $orden->producto_id = $request->input('producto_id');
        $orden->estatu_id = $request->input('estatu_id');
        $orden->user_id = $request->input('user_id');

      
        $orden->save(); // para guardar en json

        echo json_encode($orden); // para pasar en json
    }

  
    public function destroy($orden_id)
    {
        $orden =Ordencompra::find($orden_id);
        $orden->delete();
    }
}
