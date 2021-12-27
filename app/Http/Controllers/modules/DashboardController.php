<?php

// Controller namespacing.
namespace App\Http\Controllers\Modules;
use App\Http\Controllers\Controller;

// Facades.

// Models.

// Traits

class DashboardController extends Controller
{
    // Init the index.
    public function index()
    {
        // Init view.
        return view('modules.dashboard.index');
    }
}
