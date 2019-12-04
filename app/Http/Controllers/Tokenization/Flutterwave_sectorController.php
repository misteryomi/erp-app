<?php

namespace App\Http\Controllers\Tokenization;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flutterwave_sector;
use Amranidev\Ajaxis\Ajaxis;
use URL;


use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class Flutterwave_sectorController.
*
* @author  The scaffold-interface created at 2019-10-07 12:29:16pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class Flutterwave_sectorController extends Controller
{
//setting validations
protected $rules =
[

    'name' => 'required',


    'email' => 'required',


    'active' => 'required',

];

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
//
return view('flutterwave_sector.index')->with('flutterwave_sectors', Flutterwave_sector::all());

}

/**
* Show the form for creating a new resource.
*
* @return  \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param    \Illuminate\Http\Request  $request
* @return  \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
$validator = Validator::make(Input::all(), $this->rules);
if ($validator->fails()) {
return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
} else {
$flutterwave_sector = new Flutterwave_sector();


    $flutterwave_sector->name = $request->name;


    $flutterwave_sector->email = $request->email;


    $flutterwave_sector->active = $request->active;



$flutterwave_sector->save();

return response()->json($flutterwave_sector);
}

}

/**
* Display the specified resource.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function show($id)
{
//
$flutterwave_sector = Flutterwave_sector::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('flutterwave_sector.show')->with('flutterwave_sector',$flutterwave_sector);
}

/**
* Show the form for editing the specified resource.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param    \Illuminate\Http\Request  $request
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
$validator = Validator::make(Input::all(), $this->rules);
if ($validator->fails()) {
return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
} else {
$flutterwave_sector = Flutterwave_sector::findOrfail($id);

    $flutterwave_sector->name = $request->name;

    $flutterwave_sector->email = $request->email;

    $flutterwave_sector->active = $request->active;


$flutterwave_sector->save();
return response()->json($flutterwave_sector);

}
}

/**
* Remove the specified resource from storage.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function destroy($id)
{
//

$flutterwave_sector = Flutterwave_sector::findOrfail($id);
$flutterwave_sector->delete();

return response()->json($flutterwave_sector);
}
}
