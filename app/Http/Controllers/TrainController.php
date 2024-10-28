<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index() {
        $trains = Train::where('departure_date', '2024-10-28')->get();
        // dd($trains);
        return view('trains.index', compact('trains'));
    }
}