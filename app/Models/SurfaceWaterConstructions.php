<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfaceWaterConstructions extends Model
{
    use HasFactory;

    public $table = 'surfacewater_constructions';
    protected $guarded = [];
    public $timestamps = true;

    protected $fillable = ['construction_request_id', 'file_license', 'accepted_by'];
}
