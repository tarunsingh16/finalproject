<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\wtee;
use App\wbottom;
use App\usertype;
use App\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function retrieve(){
		$products = product::all();

    	return view('categories.wdresses',compact('products'));    	
    }

    public function Admin_Retrieve(){
		$products = product::all();
   
    $producttees=wtee::all();
    	return view('Admin.data',compact('products'),compact('producttees'));    	
    }
     public function destroy($id)
  {

    $products=\App\product::find($id)->delete();
    
    return response()->json([
      'success'=>'Record has been deleted'
      ]);
  }

   public function fetch(){
   
    $producttees=wtee::all();

      return view('categories.wtees',compact('producttees'));     
    }

     public function bottom(){
   
    $wbottoms=wbottom::all();

      return view('categories.wbottom',compact('wbottoms'));     
    }


//login
   //  public function login(Request $request){

   //  $rules = array(
   // 'username' => 'required|min:6',
   //  'password' => 'required|min:6',
   //  );
       
       
   //     if(Auth::attempt(array('email' => $request->username, 'password' => $request->password))){
   //         dd('success');
   //      }else{
   //          dd("Wrong");
   //      }
   //  $validator = User::make($request->all(), $rules);
   //  if ($validator->fails()){
   //    // return response()->json($validator->getMessageBag(), 301);
      
   //    return redirect()->back()->withErrors($validator); 
   //      // ->withInput(Input::except('password')); 
   //  }else{
      
   //       $userdata = array(
   //          'email' => $request->username,
   //          'password' => $request->password
   //          );
   //              if(Auth::attempt($userdata)){
   //                $userTypeID = Auth::User()->type_id;
   //                dd($userTypeID);
   //                $user_type  = \App\usertype::where('type_id',$userTypeID)->first();
                    
   //                if($user_type['type_id'] == 1 || $user_type['type_id'] == 3){
   //                  return redirect()->to('admin_dashboard'); 
   //                }
   //                if($user_type['type_id'] == 2){
                      
   //                    return redirect()->to('');
              
   //                 }
                     
   //              }
   //              else{
   //                return redirect()->back()->with('error', 'User with these credentials is not found!');
   //              }
               
   //                 }                                                          
   //  }



}
