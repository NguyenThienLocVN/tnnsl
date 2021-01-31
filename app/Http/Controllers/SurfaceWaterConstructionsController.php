<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurfaceWaterConstructions;

class SurfaceWaterConstructionsController extends Controller
{
    public function index()
    {
        $constructions = SurfaceWaterConstructions::all();
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep', ['constructions' => $constructions]);
    }

    public function summaryInfo($id)
    {
        $constructions = SurfaceWaterConstructions::find($id);
        return response()->json($constructions);
    }
}
