<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Auth::check() ? Auth::user()->events : collect();
        
        return view('dashboard.index', compact('events'));
    }
}
