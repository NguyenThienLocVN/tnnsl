<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WastewaterConstructions extends Model
{
    use HasFactory;
    public $table = 'wastewater_constructions';
    protected $guarded = [];
    public $timestamps = true;
}
