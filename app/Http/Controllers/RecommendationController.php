<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;

class RecommendationController extends Controller
{
    public function index()
    {dd('stop');
        $recommendations = Recommendation::all();
        return view('recommendation.index', compact('recommendation'));
    }
}
