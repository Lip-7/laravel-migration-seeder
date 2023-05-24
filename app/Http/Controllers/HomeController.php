<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
class HomeController extends Controller
{
    public function index(){
        //$trains = Train::all();
        //return view('/', compact('trains'));
        $data = config('trains_db');
        return view('home', compact('data'));
    }
}
