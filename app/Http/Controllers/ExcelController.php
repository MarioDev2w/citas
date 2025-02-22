<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CitasExport;

class ExcelController extends Controller
{
    public function index(){

        return view('export');

    }

    public function exportarCitas()
    {
        return Excel::download(new CitasExport, 'citas.xlsx');
    }
}
