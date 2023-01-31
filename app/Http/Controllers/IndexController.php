<?php 
namespace App\Http\Controllers; 

use App\Models\Car;
use App\Models\Modele;
use App\Models\Marque;
use Illuminate\Http\Request; 

class IndexController extends Controller { 

    public function __invoke() { 

        //obtient toutes les marques
        $cars = Car::all();
        $modeles = Modele::all();
        $marques = Marque::all();
        $names = Car::select('name')->distinct()->get();
        $prices = Car::select('prix')->distinct()->get();


        //assigner les variables à la vue correspondante
        return view('home', [
            'cars' => $cars,
            'modeles' => $modeles,
            'marques' => $marques,
            'names' => $names,
            'prices' => $prices
        ]);
    }
}