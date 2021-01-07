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
                        'hoverContent' => "<div class='landslide-popup'><ul class='nav nav-tabs'><li class='active'><a data-toggle='tab' href='#thong-tin-sat-lo'>Thông tin trạm</a></li></ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Loại trạm:</p><p class='p-0 my-1'>Đo mưa</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Tên trạm:</p><p class='p-0 my-1'>$cons->station_name</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Kinh độ:</p><p class='p-0 my-1'>$cons->longitude</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Vĩ độ:</p><p class='p-0 my-1'>$cons->latitude</p></div></div></div></div>",
                    ],
                    'id' => $cons->gid
                ]);
        }

        $rainLocationJson = json_encode($rainLocationArray, JSON_UNESCAPED_UNICODE);
        // Count Rain Stations
        $count_all_rain_stations = RainStations::select("rain_station.*")->count();
        $count_rain_stations_over_2MW = RainStations::where("station_type","TREN2MW")->count();
        $count_rain_stations_below_2MW = RainStations::where("station_type","DUOI2MW")->count();

        // Lay danh sach tram khi tuong
        $meteorologyLocations = MeteorologyStations::get();
        // Lay toa do dap thuy dien hien thi tren map
        $meteorologyLocationArray = ['type' => 'FeatureCollection',
                            'features' =>[]
                        ];

        foreach($meteorologyLocations as $cons){
            array_push($meteorologyLocationArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$cons->longitude, $cons->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'hoverContent' => "<div class='landslide-popup'><ul class='nav nav-tabs'><li class='active'><a data-toggle='tab' href='#thong-tin-sat-lo'>Thông tin trạm</a></li></ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Loại trạm:</p><p class='p-0 my-1'>Khí tượng</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Tên trạm:</p><p class='p-0 my-1'>$cons->station_name</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Kinh độ:</p><p class='p-0 my-1'>$cons->longitude</p></div><div class='d-flex'><p class='col-6 p-0 my-1 font-weight-bold'>Vĩ độ:</p><p class='p-0 my-1'>$cons->latitude</p></div></div></div></div>",
                    ],
                    'id' => $cons->gid
                ]);
        }

        $meteorologyLocationJson = json_encode($meteorologyLocationArray, JSON_UNESCAPED_UNICODE);
        return view('page.tnn-he-thong-giam-sat', ['rainLocationJson' => $rainLocationJson, 'meteorologyLocationJson' => $meteorologyLocationJson, "count_all_rain_stations" => $count_all_rain_stations,"count_rain_stations_over_2MW"=>$count_rain_stations_over_2MW,"count_rain_stations_below_2MW"=>$count_rain_stations_below_2MW]);
    }
}
