<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageTypeController extends Controller
{
    public function index(){

        return view('efris.package_type.index');

    }
}
