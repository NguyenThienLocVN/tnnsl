<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfacewaterRequest extends Model
{
    use HasFactory;
    public $table = 'surfacewater_requests';
    public $timestamps = false;

    protected $fillable = ['organization_name', 'business_reg_num', 'business_reg_place', 'business_reg_date',
                            'tl_decision', 'agency_signed', 'id_card_num', 'id_card_place', 'id_card_date',
                            'fax', 'address', 'phone', 'email', 'construction_name', 'construction_type',
                            'exploit_method', 'construction_location', 'district', 'commune',
                            'construction_status', 'operating_time', 'water_source', 'water_location',
                            'purpose_using_water', 'q_ktsd_sxnn', 'q_turbin', 'wattage', 
                            'q_kt_khac', 'exploit_mode', 'license_duration', 'q_kt_max',
                            'q_kt_max_mk', 'q_tt', 'dt_tuoi_tieu', 'q_tuoi_tieu', 'q_cap_nuoc_shsx',
                            'q_cap_nuoc_cn', 'q_cap_nuoc_kddv', 'don_xin_cp', 'ket_qua_ptcln', 
                            'de_an_ktsdn', 'bao_cao_ktsdn', 'so_do_vtct', 'van_ban_ykcd',
                            'ke_khai_ttcqkt', 'giay_to_khac', 'ct_dau_moi', 'landmark', 
                            'authorization_money', 'status', 'note'];
}
