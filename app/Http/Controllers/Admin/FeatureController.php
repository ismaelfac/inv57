<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feature;
class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::paginate();
        $title = "Listado de Caracteristicas";
        //dd($features);
        return view('admin.modules.feature.index',compact('features', 'title'));
    }
}
