<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\paiment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $lasCommands  = commande::orderBy('updated_at', 'desc')->take(5)->get();
        $dayEarnings = paiment::whereDate('created_at', Carbon::today())->get()->sum('montant_total');
        return view('index',['commands' => $lasCommands,'dayEarnings' => $dayEarnings]);
    }
}
