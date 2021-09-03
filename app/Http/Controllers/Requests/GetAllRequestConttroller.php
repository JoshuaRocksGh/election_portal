<?php

namespace App\Http\Controllers\Requests;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetAllRequestConttroller extends Controller
{
    //
    public function get_regions()
    {

        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "getRegions");

        // dd($response);
        return json_decode($response->body());


        $result = new ApiBaseResponse();
        $return = json_decode($response->body());

        // return $result->api_response($return->status, $return->message, $return->data);
    }

    public function get_constituency(Request $request)
    {



        $region = $request->region;

        // return $region;

        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "getConstituency?region=$region");


        // dd($response);
        return json_decode($response->body());


        $result = new ApiBaseResponse();
        $return = json_decode($response->body());

        // return $result->api_response($return->status, $return->message, $return->data);
    }

    public function get_polling_station(Request $request)
    {

        $constituency = $request->constituency;
        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "getPollingStation?constituency=$constituency");


        // dd($response);
        return json_decode($response->body());


        $result = new ApiBaseResponse();
        $return = json_decode($response->body());

        // return $result->api_response($return->status, $return->message, $return->data);
    }
}