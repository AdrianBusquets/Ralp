<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\City;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $cities = City::with('ads')->get();
    return view('welcome', compact('cities'));
    }

    public function adsByCity(City $city)
    {
        $ads = $city->ads()->latest()->get();
        return view('ad.by-city', compact ('city', 'ads'));
    }
}
