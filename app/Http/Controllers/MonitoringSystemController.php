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
                        'hoverContent' => "<b>$cons->station_name</b>",
                    ],
                    'id' => $cons->gid
                ]);
        }

        $rainLocationJson = json_encode($rainLocationArray, JSON_UNESCAPED_UNICODE);
        // Count Rain Stations
        $count_all_rain_stations = RainStations::select("rain_station.*")->count();
        $count_rain_stations_over_2MW = RainStations::where("station_type","TREN2MW")->count();
        $count_rain_stations_below_2MW = RainStations::where("station_type","DUOI2MW")->count();

        return view('page.tnn-he-thong-giam-sat', ['rainLocationJson' => $rainLocationJson,"count_all_rain_stations" => $count_all_rain_stations,"count_rain_stations_over_2MW"=>$count_rain_stations_over_2MW,"count_rain_stations_below_2MW"=>$count_rain_stations_below_2MW]);
    }
}
