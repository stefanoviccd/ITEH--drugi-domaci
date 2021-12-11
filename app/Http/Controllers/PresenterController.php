<?php

namespace App\Http\Controllers;

use App\Http\Resources\PresenteCollection;
use App\Http\Resources\PresenterCollection;
use App\Models\Presenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presenters= Presenter::all();
        return new PresenterCollection($presenters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required|string|max:255',
            
        ]);

        if ($validator->fails())
    
            return response()->json($validator->errors());

        $presenter = Presenter::create([
            'name' => $request->name
           
        ]);
        $presenter->save();


        return response()->json(['Presenter is created successfully.', $presenter]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    $pres = Presenter::find($id);
        if (is_null($pres))
            return response()->json('Data not found', 404);
        return response()->json($pres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Presenter $presenter)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Presenter::destroy($id);
    }

    
}
