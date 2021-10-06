<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\PasarPangan\PanganRule;
use App\PasarPangan\PasarPangan;
use App\PasarPangan\PasarPanganRule;
use App\PasarPangan\PasarRule;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');

        return view('welcome', compact('provinces'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');

        return response()->json($city);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function cekOngkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin,
            'destination'   => $request->city_destination,
            'weight'        => $request->weight,
            'courier'       => $request->courier
        ])->get();

        return response()->json($cost);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pasar(Request $request)
    {
        $validated = $request->validate([
            'number' => 'numeric|min:1'
        ]);

        $rules = [
            new PasarPanganRule,
            new PasarRule,
            new PanganRule,
        ];

        $input = $request->number;
        $result = [];
        $pasarPangan = new PasarPangan($rules);
        if ($input) $result = $pasarPangan->generateList($input);

        return view('pasar', compact('result'));
    }
}
