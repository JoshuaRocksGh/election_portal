<?php

namespace App\Http\Controllers\Mandate;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegionalLevelController extends Controller
{
    //
    public function region()
    {
        return view('pages.mandate.regions');
    }

    public function constituency($UserConstituency)
    {
        // return $UserConstituency;
        $constituency = $UserConstituency;
        $res = str_replace(array(
            '\'', '"',
            ',', ';', '<', '>', "'", ')', '}'
        ), ' ', $constituency);
        // return preg_replace('/[^A-Za-z0-9\-]/', '', $constituency);
        // echo ($res);
        return view('pages.mandate.constituency', ['constituency' => $res]);
    }

    public function regional_constituency($UserRegion)
    {
        $region = $UserRegion;
        // echo ($region);

        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "getConstituency?region=$region");


        // dd($response);
        return json_decode($response->body());


        $result = new ApiBaseResponse();
        $return = json_decode($response->body());
    }

    public function regional(Request $request)
    {

        $region = $request->query('Region');
        // return $region;
        // $bene_id = $request->query('bene_id');

        return view('pages.mandate.regions', ['region' => $region]);
    }

    public function constituency_polling_station($constituency_name)
    {
        $constituency = $constituency_name;
        $res = str_replace(array(
            '\'', '"',
            ',', ';', '<', '>', "'", ')', '}'
        ), ' ', $constituency);
        // return preg_replace('/[^A-Za-z0-9\-]/', '', $constituency);
        // echo ($res);

        return view('pages.mandate.constituency', ['constituency' => $res]);
    }
}