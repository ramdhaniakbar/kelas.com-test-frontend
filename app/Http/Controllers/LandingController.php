<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(Request $request): View
    {
        $benefit = Benefit::with('benefit_privileges')
            ->when($request->has('category'), function ($query) use ($request) {
                return $query->where('category', $request->get('category'));
            })
            ->first();

        if (!$benefit) {
            $benefit = Benefit::with('benefit_privileges')->first();
        }

        $subscriptions = Subscription::with('subscription_privileges')->get();

        return view('pages.landing-page.index', compact('benefit', 'subscriptions'));
    }
}
