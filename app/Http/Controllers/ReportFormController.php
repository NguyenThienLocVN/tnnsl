<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportFormController extends Controller
{
    public function form1()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-1');
    }
    public function form2()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-2');
    }
    public function form3()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-3');
    }
    public function form4()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-4');
    }
    public function form5()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-5');
    }
    public function form6()
    {
        return view('page.bao-cao-bieu-mau.bieu-mau-6');
    }
}
