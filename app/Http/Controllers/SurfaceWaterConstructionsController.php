<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurfaceWaterConstructions;
use App\Models\WastewaterConstructions;
use App\Models\SurfacewaterRequest;
use App\Models\Places;
use Carbon\Carbon;

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
    public function showCreateSurfacewaterLicense()
    {
        $getDistrict = Places::where("parent_id",NULL)->get();
        $places = Places::all();
        return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-nuoc-mat',["getDistrict"=>$getDistrict, "places"=>$places]);
    }
    function loadCommuneByDistrict($district_id){
        $communes = Places::where('parent_id', $district_id)->get();
        return response()->json($communes);
    }

    public function surfacewaterConstructionInfo($id)
    {
        $construction = SurfaceWaterConstructions::find($id);
        $surfaceWaterArray = ['type' => 'FeatureCollection',
                            'features' =>[]
                        ];
    
        array_push($surfaceWaterArray['features'], 
            [
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [$construction->long_dams, $construction->lat_dams]
                ],
                'type' => 'Feature',
                'properties' => [
                    'hoverContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active pl-0 pr-2 py-2'> <a data-toggle='tab' href='#thong-tin-sat-lo' class='active show' style='outline: none;'>THÔNG TIN CÔNG TRÌNH</a></li></ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex align-items-center mt-1'><p class='col-4 p-0 my-1 font-weight-bold'>Tên công trình:</p><p class='p-0 my-1'>$construction->construction_name</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Công suất:</p><p class='p-0 my-1'><b class='font-15'>$construction->wattage</b> MW</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>xả TT</sub></p><p class='p-0 my-1'><b class='font-15'>$construction->q_tt</b> (m<sup>3</sup>/s)</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>KT max</sub></p><p class='p-0 my-1'><b class='font-15'>$construction->q_kt_max</b> (m<sup>3</sup>/s)</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Q<sub>KT max MK</sub></p><p class='p-0 my-1'><b class='font-15'>$construction->q_kt_max_mk</b> (m<sup>3</sup>/s)</p></div></div><div id='hinh-anh' class='tab-pane fade'> <img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='https://kc08.s3-ap-southeast-1.amazonaws.com/landslide-locations/2020/96.JPG'></div></div></div>",
                ],
                'id' => $construction->id
            ]);
        

        $surfaceWaterJson = json_encode($surfaceWaterArray, JSON_UNESCAPED_UNICODE);
        return view('page.quan-ly-cap-phep.tnn-quan-ly-cap-phep-nuoc-mat', ['construction' => $construction, 'surfaceWaterJson' => $surfaceWaterJson]);
    }

    public function surfacewaterInfoForLoading($id)
    {
        $construction = SurfaceWaterConstructions::find($id);
        return response()->json($construction);
    }

    public function viewAll(){
        $constructions = SurfaceWaterConstructions::paginate(10);
        $hydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->paginate(10);
        $irrigationConstruction = SurfaceWaterConstructions::where('construction_type',2)->paginate(10);
        $pumpConstruction = SurfaceWaterConstructions::where('construction_type',3)->paginate(10);
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-xem-tat-ca', ['constructions' => $constructions, 'hydroConstruction' => $hydroConstruction, 'irrigationConstruction' => $irrigationConstruction, 'pumpConstruction' => $pumpConstruction]);
    }

    public function viewAllHydroConstruction(){
        $hydroConstruction = SurfaceWaterConstructions::where('construction_type',1)->paginate(10);
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-xem-tat-ca-thuy-dien', ['hydroConstruction' => $hydroConstruction]);
    }

    public function viewAllIrrigationConstruction(){
        $irrigationConstruction = SurfaceWaterConstructions::where('construction_type',2)->paginate(10);
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-xem-tat-ca-thuy-loi', ['irrigationConstruction' => $irrigationConstruction]);
    }

    public function viewAllPumpConstruction(){
        $pumpConstruction = SurfaceWaterConstructions::where('construction_type',3)->paginate(10);
        return view('page.quan-ly-cap-phep.tnn-nuoc-mat-xem-tat-ca-cong-trinh-khac', ['pumpConstruction' => $pumpConstruction]);
    }

    public function doCreateSurfacewaterLicense(Request $request)
    {
        $request->validate([
            'don_xin_cp' => 'required|max:2048',
        ]);

        $generateTime = Carbon::now()->timestamp;
        $destinationPath = public_path('TNN_QUAN_LY_CAP_PHEP\file\yeu-cau\nuoc-mat');

        if(!empty($request->file('don_xin_cp')))
        {
            $file_don_xin_cp = $generateTime.'-'.$request->file('don_xin_cp')->getClientOriginalName();
            $upload_don_xin_cp = $request->file('don_xin_cp')->move($destinationPath, $file_don_xin_cp);
        }

        if(!empty($request->file('ket_qua_ptcln')))
        {
            $file_ket_qua_ptcln = $generateTime.'-'.$request->file('ket_qua_ptcln')->getClientOriginalName();
            $upload_ket_qua_ptcln = $request->file('ket_qua_ptcln')->move($destinationPath, $file_ket_qua_ptcln);
        }

        if(!empty($request->file('de_an_ktsdn')))
        {
            $file_de_an_ktsdn = $generateTime.'-'.$request->file('de_an_ktsdn')->getClientOriginalName();
            $upload_de_an_ktsdn = $request->file('de_an_ktsdn')->move($destinationPath, $file_de_an_ktsdn);
        }

        if(!empty($request->file('bao_cao_ktsdn')))
        {
            $file_bao_cao_ktsdn = $generateTime.'-'.$request->file('bao_cao_ktsdn')->getClientOriginalName();
            $upload_bao_cao_ktsdn = $request->file('bao_cao_ktsdn')->move($destinationPath, $file_bao_cao_ktsdn);
        }

        if(!empty($request->file('bao_cao_ktsdn')))
        {
            $file_so_do_vtct = $generateTime.'-'.$request->file('so_do_vtct')->getClientOriginalName();
            $upload_so_do_vtct = $request->file('so_do_vtct')->move($destinationPath, $file_so_do_vtct);
        }

        if(!empty($request->file('bao_cao_ktsdn')))
        {
            $file_van_ban_ykcd = $generateTime.'-'.$request->file('van_ban_ykcd')->getClientOriginalName();
            $upload_van_ban_ykcd = $request->file('van_ban_ykcd')->move($destinationPath, $file_van_ban_ykcd);
        }

        if(!empty($request->file('bao_cao_ktsdn')))
        {
            $file_ke_khai_ttcqkt = $generateTime.'-'.$request->file('ke_khai_ttcqkt')->getClientOriginalName();
            $upload_ke_khai_ttcqkt = $request->file('ke_khai_ttcqkt')->move($destinationPath, $file_ke_khai_ttcqkt);
        }

        if(!empty($request->file('bao_cao_ktsdn')))
        {
            $file_giay_to_khac = $generateTime.'-'.$request->file('giay_to_khac')->getClientOriginalName();
            $upload_giay_to_khac = $request->file('giay_to_khac')->move($destinationPath, $file_giay_to_khac);
        }

        $lastId = SurfacewaterRequest::create($request->all())->id;

        $lastItem = SurfacewaterRequest::find($lastId);
        $lastItem->don_xin_cp = $file_don_xin_cp;
        $lastItem->ket_qua_ptcln = $file_ket_qua_ptcln;
        $lastItem->de_an_ktsdn = $file_de_an_ktsdn;
        $lastItem->bao_cao_ktsdn = $file_bao_cao_ktsdn;
        $lastItem->so_do_vtct = $file_so_do_vtct;
        $lastItem->van_ban_ykcd = $file_van_ban_ykcd;
        $lastItem->ke_khai_ttcqkt = $file_ke_khai_ttcqkt;
        $lastItem->giay_to_khac = $file_giay_to_khac;
        $lastItem->save();
     
        return redirect()->route('quan-ly-cap-phep')->withSuccess('Tạo giấy phép thành công, vui lòng chờ xét duyệt ');
    }

    public function showEditSurfacewaterLicense($id)
    {
        $construction = SurfaceWaterConstructions::find($id);
        return view('page.quan-ly-cap-phep.tnn-sua-giay-phep-nuoc-mat', ['construction'=>$construction]);
    }

    public function doEditSurfacewaterLicense($id, Request $request)
    {
        $request->validate([
            'file_license' => 'required|max:2048',
        ]);

        $licenseFileName = $request->file('file_license')->getClientOriginalName();
        $destinationPath = public_path('TNN_QUAN_LY_CAP_PHEP\file\giay-phep\nuoc-mat');
        $upload_success = $request->file('file_license')->move($destinationPath, $licenseFileName);

        $construction = SurfaceWaterConstructions::find($id);

        $construction->license_num = $request->license_num;
        $construction->license_date = $request->license_date;
        $construction->license_duration = $request->license_duration;
        $construction->license_role = $request->license_role;
        $construction->organization_request = $request->organization_request;
        $construction->organization_authorities = $request->organization_authorities;
        $construction->year_built = $request->year_built;
        $construction->year_operation = $request->year_operation;
        $construction->construction_code = $request->construction_code;
        $construction->construction_name = $request->construction_name;
        $construction->purpose_using_water = $request->purpose_using_water;
        $construction->water_source = $request->water_source;
        $construction->district = $request->district;
        $construction->commune = $request->commune;
        $construction->vi_do_dap = $request->lat_dams;
        $construction->kinh_do_dap = $request->long_dams;
        $construction->vi_do_nha_may = $request->lat_factory;
        $construction->kinh_do_nha_may = $request->long_factory;
        $construction->exploit_mode = $request->exploit_mode;
        $construction->wattage = $request->wattage;
        $construction->q_kt_max = $request->q_kt_max;
        $construction->q_kt_max_mk = $request->q_kt_max_mk;
        $construction->q_tt = $request->q_tt;
        $construction->watering_area = $request->watering_area;
        $construction->q_tuoi_tieu = $request->q_tuoi_tieu;
        $construction->q_cap_nuoc = $request->q_cap_nuoc;
        $construction->construction_type = $request->construction_type;
        $construction->file_license =  $licenseFileName;
        $construction->save();
     
        return redirect()->route('quan-ly-cap-phep')->withSuccess('Sửa giấy phép công trình thành công!');
    }

    // Tao moi giay phep nuoc thai
    public function showCreateWastewaterLicense(Request $request)
    {
        $getDistrict = Places::where("parent_id",NULL)->get();
        $communes = Places::all();
        return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-xa-thai');
    }

    // Thuc hien tao moi giay phep nuoc mat
    public function doCreateWastewaterLicense(Request $request)
    {
        $request->validate([
            'file_license' => 'required|max:2048',
        ]);

        $licenseFileName = $request->file('file_license')->getClientOriginalName();
        $destinationPath = public_path('TNN_QUAN_LY_CAP_PHEP\file\giay-phep\xa-thai');
        $upload_success = $request->file('file_license')->move($destinationPath, $licenseFileName);

    
        WastewaterConstructions::create($request->all());
        WastewaterConstructions::where('license_num', $request->license_num)->update(['file_license' => $request->file('file_license')->getClientOriginalName()]);
     
        return redirect()->route('quan-ly-cap-phep')->withSuccess('Tạo giấy phép công trình thành công!');
    }

    public function listApprovalSurfacewaterLicense()
    {
        $requests = SurfacewaterRequest::all();
        return view('page.quan-ly-cap-phep.tnn-xet-duyet-giay-phep-nuoc-mat', ['requests' => $requests]);
    }

    public function showApprovalSurfacewaterLicense($id)
    {
        $construction = SurfacewaterRequest::find($id);
        return view('page.quan-ly-cap-phep.tnn-xem-xet-duyet-giay-phep-nuoc-mat', ['construction' => $construction]);
    }


    // Tao moi giay phep nuoc duoi dat
    public function showCreateGroundwaterLicense(){
        $getDistrict = Places::where("parent_id",NULL)->get();
        $places = Places::all();
        return view('page.quan-ly-cap-phep.tnn-tao-moi-giay-phep-nuoc-duoi-dat',["getDistrict"=>$getDistrict, "places"=>$places]);
    }
}