<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurfaceWaterConstructions;

class SurfaceWaterConstructionsController extends Controller
{
    public function index()
    {
        $constructions = SurfaceWaterConstructions::all();

        $numConstruction = SurfaceWaterConstructions::all()->count();

        // Tong so luong cong trinh thuy dien
        $allHydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->count();
        // So cong trinh thuy dien
        $numHydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->whereNotNull('license_num')->orWhere('license_num', '')->count();

        // So luong cong trinh thuy loi
        $numIrrigationConstruction = SurfaceWaterConstructions::where('construction_type',2)->count();

        // So luong cong trinh tram bom
        $numPumpConstruction = SurfaceWaterConstructions::where('construction_type',3)->count();
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep', ['constructions' => $constructions, 'allHydroConstruction' => $allHydroConstruction, 'numConstruction' => $numConstruction, 'numHydroConstruction' => $numHydroConstruction, 'numIrrigationConstruction' => $numIrrigationConstruction, 'numPumpConstruction' => $numPumpConstruction]);
    }

    public function summaryInfo($id)
    {
        $constructions = SurfaceWaterConstructions::find($id);
        return response()->json($constructions);
    }

    public function viewAll(){
        $constructions = SurfaceWaterConstructions::all();
        $hydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->get();
        $irrigationConstruction = SurfaceWaterConstructions::where('construction_type',2)->get();
        $pumpConstruction = SurfaceWaterConstructions::where('construction_type',3)->get();
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-xem-tat-ca', ['constructions' => $constructions, 'hydroConstruction' => $hydroConstruction, 'irrigationConstruction' => $irrigationConstruction, 'pumpConstruction' => $pumpConstruction]);
    }
}
