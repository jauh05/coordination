<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Auth::check() ? Auth::user()->events : collect();
        $mainEvent = $events->first();
        
        return view('dashboard.index', compact('events', 'mainEvent'));
    }
}
