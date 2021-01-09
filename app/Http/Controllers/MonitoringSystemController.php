<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HydrologicalStations;
use App\Models\MeteorologyStations;
use App\Models\RainStations;
use DB;

class MonitoringSystemController extends Controller
{
    public function index(Request $request){
        // Lay danh sach tram mua
        $rainLocations = RainStations::get();

        // Lay toa do dap thuy dien hien thi tren map
        $rainLocationArray = ['type' => 'FeatureCollection',
                            'features' =>[]
                        ];

        foreach($rainLocations as $cons){
            array_push($rainLocationArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$cons->longitude, $cons->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'hoverContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active pl-0 pr-2 py-2'> <a data-toggle='tab' href='#thong-tin-sat-lo' class='active show' style='outline: none;'>THÔNG TIN TRẠM</a></li><li class='d-block p-2'> <a data-toggle='tab' href='#hinh-anh' class=''>QUÁ TRÌNH MƯA</a></li></ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Tên trạm:</p><p class='p-0 my-1'>$cons->station_name</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Mưa hiện tại:</p><p class='p-0 my-1'><b class='font-25'>0</b> mm</p></div><div class='d-flex align-items-center'><p class='col-4 p-0 my-1 font-weight-bold'>Thời gian:</p><p class='p-0 my-1'><b class='font-25'>13:00</b></p></div></div><div id='hinh-anh' class='tab-pane fade'> <img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='https://kc08.s3-ap-southeast-1.amazonaws.com/landslide-locations/2020/96.JPG'></div></div></div>",
                    ],
                    'id' => $cons->gid
                ]);
        }

        $rainLocationJson = json_encode($rainLocationArray, JSON_UNESCAPED_UNICODE);
        // Count Rain Stations
        $count_all_rain_stations = RainStations::select("rain_station.*")->count();
        $count_rain_stations_over_2MW = RainStations::where("station_type","TREN2MW")->count();
        $count_rain_stations_below_2MW = RainStations::where("station_type","DUOI2MW")->count();
        return view('page.tnn-he-thong-giam-sat', ['rainLocationJson' => $rainLocationJson, "count_all_rain_stations" => $count_all_rain_stations,"count_rain_stations_over_2MW"=>$count_rain_stations_over_2MW,"count_rain_stations_below_2MW"=>$count_rain_stations_below_2MW]);
    }
}
