<?php

namespace App\Http\Controllers;

use App\Models\fmployee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('dashboard-admin');
    }
}
