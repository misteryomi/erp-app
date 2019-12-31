<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appraisal_year;
use Amranidev\Ajaxis\Ajaxis;
use URL;


use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class Appraisal_yearController.
*
* @author  The scaffold-interface created at 2018-07-07 07:21:24am
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class Appraisal_yearController extends Controller
{
//setting validations
protected $rules =
[

    'year' => 'required',
    

    'title' => 'required',
    
];

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
//
return view('appraisal_year.index')->with('appraisal_years', Appraisal_year::all());

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
$appraisal_year = new Appraisal_year();


    $appraisal_year->year = $request->year;


    $appraisal_year->title = $request->title;



$appraisal_year->save();

return response()->json($appraisal_year);
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
$appraisal_year = Appraisal_year::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('appraisal_year.show')->with('appraisal_year',$appraisal_year);
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
$appraisal_year = Appraisal_year::findOrfail($id);

    $appraisal_year->year = $request->year;

    $appraisal_year->title = $request->title;


$appraisal_year->save();
return response()->json($appraisal_year);

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

$appraisal_year = Appraisal_year::findOrfail($id);
$appraisal_year->delete();

return response()->json($appraisal_year);
}
}
