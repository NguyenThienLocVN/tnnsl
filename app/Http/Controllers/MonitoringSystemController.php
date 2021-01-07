<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HydrologicalStations;
use App\Models\MeteorologyStations;
use App\Models\RainStations;

class MonitoringSystemController extends Controller
{
    public function index(){
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
        return view('page.tnn-he-thong-giam-sat', ['rainLocationJson' => $rainLocationJson]);
    }
}
