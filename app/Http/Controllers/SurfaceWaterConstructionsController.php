<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurfaceWaterConstructions;

class SurfaceWaterConstructionsController extends Controller
{
    public function index()
    {
        $constructions = SurfaceWaterConstructions::orderBy('construction_name')->get();

        $numConstruction = SurfaceWaterConstructions::all()->count();

        // Tong so luong cong trinh thuy dien
        $allHydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->count();
        // So cong trinh thuy dien
        $numHydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->whereNotNull('license_num')->count();

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

    public function createLicense(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
    
        SurfaceWaterConstructions::create([
            'license_num' => $request->license_num,
            'license_date' => $request->license_date,
            'license_duration' => $request->license_duration,
            'license_role' => $request->license_role,
            'organization_request' => $request->organization_request,
            'organization_authorities' => $request->organization_authorities,
            'year_built' => $request->year_built,
            'year_operation' => $request->year_operation,
            'construction_code' => $request->construction_code,
            'construction_name' => $request->construction_name,
            'purpose_using_water' => $request->purpose_using_water,
            'water_source' => $request->water_source,
            'district' => $request->district,
            'commune' => $request->commune,
            'vi_do_dap' => $request->lat_dams,
            'kinh_do_dap' => $request->long_dams,
            'vi_do_nha_may' => $request->lat_factory,
            'kinh_do_nha_may' => $request->long_factory,
            'exploit_mode' => $request->exploit_mode,
            'wattage' => $request->wattage,
            'q_kt_max' => $request->q_kt_max,
            'q_kt_max_mk' => $request->q_kt_max_mk,
            'q_tt' => $request->q_tt,
            'watering_area' => $request->watering_area,
            'q_tuoi_tieu' => $request->q_tuoi_tieu,
            'q_cap_nuoc' => $request->q_cap_nuoc,
            'construction_type' => $request->construction_type
        ]);
     
        return redirect()->route('quan-ly-cap-phep')->withSuccess('Tạo giấy phép công trình thành công!');
    }
}
