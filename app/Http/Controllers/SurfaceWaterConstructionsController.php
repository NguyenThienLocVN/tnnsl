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

        // Lay du lieu cong trinh nuoc mat, chuyen sang JSON hien thi popup tren map
        $surfaceWaterLocations = SurfaceWaterConstructions::where('construction_type',1)->orWhere('construction_type',2)->orWhere('construction_type',3)->get();
        $surfaceWaterArray = ['type' => 'FeatureCollection',
                            'features' =>[]
                        ];
        foreach($surfaceWaterLocations as $cons){
            array_push($surfaceWaterArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$cons->long_dams, $cons->lat_dams]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'hoverContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active pl-0 pr-2 py-2'> <a data-toggle='tab' href='#thong-tin-sat-lo' class='active show' style='outline: none;'>THÔNG TIN CÔNG TRÌNH</a></li></ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex align-items-center mt-1'><p class='col-4 p-0 my-1 font-weight-bold'>Tên công trình:</p><p class='p-0 my-1'>$cons->construction_name</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Công suất:</p><p class='p-0 my-1'><b class='font-15'>$cons->wattage</b> MW</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>xả TT</sub></p><p class='p-0 my-1'><b class='font-15'>$cons->q_tt</b> (m<sup>3</sup>/s)</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>KT max</sub></p><p class='p-0 my-1'><b class='font-15'>$cons->q_kt_max</b> (m<sup>3</sup>/s)</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>KT max MK</sub></p><p class='p-0 my-1'><b class='font-15'>$cons->q_kt_max_mk</b> (m<sup>3</sup>/s)</p></div></div><div id='hinh-anh' class='tab-pane fade'> <img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='https://kc08.s3-ap-southeast-1.amazonaws.com/landslide-locations/2020/96.JPG'></div></div></div>",
                    ],
                    'id' => $cons->gid
                ]);
        }

        $surfaceWaterJson = json_encode($surfaceWaterArray, JSON_UNESCAPED_UNICODE);
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep', ['constructions' => $constructions, 'allHydroConstruction' => $allHydroConstruction, 
                                                                    'numConstruction' => $numConstruction, 'numHydroConstruction' => $numHydroConstruction, 
                                                                    'numIrrigationConstruction' => $numIrrigationConstruction, 'numPumpConstruction' => $numPumpConstruction,
                                                                    'surfaceWaterJson' => $surfaceWaterJson]);
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
        $request->validate([
            'file_license' => 'required|max:2048',
        ]);

        $licenseFileName = $request->file('file_license')->getClientOriginalName();
        $destinationPath = public_path('TNN_QUAN_LY_CAP_PHEP\file\giay-phep');
        $upload_success = $request->file('file_license')->move($destinationPath, $licenseFileName);

    
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
            'construction_type' => $request->construction_type,
            'file_license' =>  $licenseFileName,
        ]);
     
        return redirect()->route('quan-ly-cap-phep')->withSuccess('Tạo giấy phép công trình thành công!');
    }
}