<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\travel;
use App\Activity;
use App\query;
class ProCont extends Controller
{
    public function retrieve() {
    	$travels = travel::all();
    	$Activities = Activity::all();
    	return view('trapro.index',compact('travels'),compact('Activities'));
    }

    public function packages_data() {
        $travels = travel::all();
        $Activities = Activity::all();
        return view('trapro.packages',compact('travels'),compact('Activities'));
    }

    public function tables() {
        $travels = travel::all();
        $Activities = Activity::all();
        return view('admin.data',compact('travels'),compact('Activities'));
    }

    public function form_fill() {
    	$query = new \App\query();
    	$query->Name = request('name');
    	$query->Email = request('email');
    	$query->Subject = request('subject');
    	$query->Message = request('message');
    	$query-> save();
    	return redirect('/contact2');
    }
    public function expand($id)
    {
        $Activities = \App\Activity::find($id);
        return view('trapro.indiv_package',compact('Activities'));
    }

    public function packageUpdate($id)
    {
        $Activities = \App\Activity::find($id);
                // $Activities = Activity::all();

        return view('admin.update_package',compact('Activities'));
    }


    public function updated(Request $request,$id)
   {    

        $Activities = Activity::findOrFail($id);
        
        $Activities->Title1 = request('Title');
        $Activities->Description1 = request('Short_Desc');
        $Activities->Elab_desc = request('Long_Desc');
        $Activities->picc = request('Path');
    

    $Activities->save();
    $Activities = Activity::all();

    return view('admin.data',compact('Activities'));
  }

  public function destroy($id)
  {
    $Activities=\App\Activity::find($id)->delete();
    
    return response()->json([
      'success'=>'Record has been deleted'
      ]);
  }

}
