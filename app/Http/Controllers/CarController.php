<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('cars', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "" => 'required',
            "modele_id" => "required|integer|min:1",
            "marque_id" => "required|integer|min:1",
            "prix" => "required",
            "vitesse" => "required",
            "etat" => "required",
            "image" =>"required|mimes:jpg,png,jpeg|max:5048"
        ]);

        $newImageName = time().'_'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $car = Car::create([
            "name" => $request->input('name'),
            "modele_id" => $request->input('modele_id'),
            "marque_id" => $request->input('marque_id'),
            "prix" => $request->input('prix'),
            "vitesse" => $request->input('vitesse'),
            "description" => $request->input('description'),
            "etat" => $request->input('etat'),
            "image" => $newImageName
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::where('id', $id)->first();
        return view('reservation', ['car'=>$car]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
