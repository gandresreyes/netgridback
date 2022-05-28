<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class Usuariocontroller extends Controller
{
    //ver todos
  public function getUsuario(){
      return response()->json(usuario::orderby('id','desc')->get(),200);
  }
  //get one

  public function getUsuarioid($id){
      $user = usuario::find($id);
      if(is_null($user)){
        return response()->json(['mensaje'=>'Registro no encontrado'],404);

      }

    return response()->json($user,200);
}
 
  //insert
  public function insertUsuario(Request $request){
    $user = usuario::create($request->all());
    return response( $user ,200);
}

 //update

    public function updateUser(Request $request,$id){
        $user = usuario::find($id);
        if(is_null($user)){
        return response()->json(['mensaje'=>'Registro no encontrado'],404);
        }
        $user->update($request->all());
        return response()->json($user,200);
    }
    //elimimar

    public function deleteUser($id){
        $user = usuario::find($id);
        if(is_null($user)){
          return response()->json(['mensaje'=>'Registro no encontrado'],404);  
        }
        $user->delete();
        return response()->json(['mensaje'=>'reguistro Eliminado'],200);
    }
}
