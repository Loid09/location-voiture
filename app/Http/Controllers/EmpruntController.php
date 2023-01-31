<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Emprunt;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emprunts = Emprunt::all();
        return view('myrentals', ['emprunts'=>$emprunts]);
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

        $user = Auth::user();
 
        // Retrieve the currently authenticated user's ID...
        $id = Auth::id();

        $request->validate([
            "car_id" => 'required',
            "date_debut_emprunt" =>'required',
            "date_fin_emprunt" => "required",
            "payement" => "required",
            "info" => "required",
        ]);



        $enprunt = Emprunt::create([
            "user_id" => $id,
            "car_id" => $request->input('car_id'),
            "date_debut_emprunt" => $request->input('date_debut_emprunt'),
            "date_fin_emprunt" => $request->input('date_fin_emprunt'),
            "payement" => $request->input('payement'),
            "info" => $request->input('info')
        ]);

        return back()->with('message', 'Emprunt effectué !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function show(Emprunt $emprunt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprunt $emprunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprunt $emprunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprunt $emprunt)
    {
        //
    }
}
