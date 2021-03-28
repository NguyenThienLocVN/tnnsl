<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfacewaterLicenseFiles extends Model
{
    use HasFactory;

    public $table = 'surfacewater_license_files';
    protected $guarded = [];
    public $timestamps = true;
}
