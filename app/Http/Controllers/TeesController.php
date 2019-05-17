<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wtee;
class TeesController extends Controller
{
   /* public function retrieve(){
		$producttees = wtee::all();
    	return view('categories.wtees',compact('producttees'));    	
    }

    public function Admin_Retrieve(){
		$producttees = wtee::all();
    	return view('Admin.data',compact('producttees'));    	
    }
     public function destroy($id)
  {

    $producttees=\App\wtee::find($id)->delete();
    
    return response()->json([
      'success'=>'Record has been deleted'
      ]);
  }
   */
}
