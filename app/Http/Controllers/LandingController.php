<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $benefit = Benefit::with('benefit_privileges')->first();

        return view('pages.landing-page.index', compact('benefit'));
    }
}
