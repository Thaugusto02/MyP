<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('activity.index');
    }

    public function create()
    {
        return view('activity.create');
    }

    public function store()
    {
        return redirect()->route('activities.index');
    }
}
