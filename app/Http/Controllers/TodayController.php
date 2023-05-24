<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TodayController extends Controller
{
    public function index(){
        $today = date('Y-m-d') ;
        $trains = Train::where('date', $today);
        return view('today', compact('trains', 'today'));
    }
}
