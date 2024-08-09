<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\ClassCategory;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(Request $request): View
    {
        $benefit = Benefit::with('benefit_privileges')
            ->when($request->has('type'), function ($query) use ($request) {
                return $query->where('category', $request->get('type'));
            })
            ->first();

        if (!$benefit) {
            $benefit = Benefit::with('benefit_privileges')->first();
        }

        $subscriptions = Subscription::with('subscription_privileges')->get();

        $class_category = ClassCategory::with('learnings')->when($request->has('category'), function ($query) use ($request) {
            return $query->where('category', $request->get('category'));
        })->first();

        $learnings = $class_category ? $class_category->learnings : [];

        return view('pages.landing-page.index', compact('benefit', 'subscriptions', 'class_category', 'learnings'));
    }

    public function filterLearning(Request $request)
    {
        $category = $request->query('category');

        $class_category = ClassCategory::where('category', $category)->with('learnings')->first();

        $learnings = $class_category ? $class_category->learnings : [];

        return response()->json(['learnings' => $learnings]);
    }
}
