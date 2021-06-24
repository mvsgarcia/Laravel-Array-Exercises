<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExerciseController extends Controller
{
    
//====================================  INDEX  ==================================== 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exercises.index');
    }


//====================================  CREATE  ==================================== 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercises.create');
    }


//====================================  STORE  ==================================== 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();

        // array_push($arrayInput);

        //dd($request->all());

        //================== Exercise 1 ==================

        // $arrayInput = array();

        // for($i=0; $i<2; $i++){
        //     foreach($request->input as $input){
        //         array_push($arrayInput, $input);
        //     }
        // }
       // dd($arrayInput);


       //================== Exercise 2 ==================

       $arrayInputA = array();
       $arrayInputB = array();

        for($i=0; $i<1; $i++){
            foreach($request->inputA as $inputA){
                array_push($arrayInputA, $inputA);
            }
        
        for($i=0; $i<1; $i++){
            foreach($request->inputB as $inputB){
                array_push($arrayInputB, $inputB);
            }



       //dd($arrayInputA);


        return view('exercises.show', compact('arrayInputA'));
    }


//====================================  SHOW  ==================================== 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('exercises.index');
    }


//====================================  EDIT  ==================================== 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }


//====================================  UPDATE  ==================================== 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }


//====================================  DESTROY  ==================================== 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
