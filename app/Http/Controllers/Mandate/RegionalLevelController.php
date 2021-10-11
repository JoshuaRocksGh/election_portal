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
    public function region($UserRegion)
    {
        $Mandate = session()->get('UserMandate');
        if ($Mandate == "NationalLevel") {
            $UserRegion_ = $UserRegion;
        } else {
            $UserRegion_ = session()->get('Region');
        }

        // return $UserRegion_;


        if ($UserRegion_ == trim($UserRegion_) && strpos($UserRegion_, ' ') !== false) {
            $UserRegion = str_replace(' ', '_', $UserRegion_);

            view('snippets.side-bar', ['UserRegion' => $UserRegion]);
            return view('pages.mandate.regions', ['UserRegion' => $UserRegion]);
        } else {
            view('snippets.side-bar', ['UserRegion' => $UserRegion_]);
            return view('pages.mandate.regions', ['UserRegion' => $UserRegion_]);
        }
    }

    public function constituency($UserConstituency)
    {
        // return $UserConstituency;
        $Mandate = session()->get('UserMandate');
        $UserConstituency_ = $UserConstituency;
        $UserRegion = session()->get("Region");


        if ($Mandate !== "ConstituencyLevel") {
            return view('pages.mandate.constituency', ['UserConstituency' => $UserConstituency_, 'UserRegion' => $UserRegion]);

            // if ($UserRegion_ == trim($UserRegion_) && strpos($UserRegion_, ' ') !== false || $UserConstituency_ == trim($UserConstituency_) && strpos($UserConstituency_, ' ') !== false) {
            //     $UserRegion = str_replace(' ', '_', $UserRegion_);
            //     $UserConstituency = str_replace(' ', '_', $UserConstituency_);

            //     return view('pages.mandate.constituency', ['UserConstituency' => $UserConstituency, 'UserRegion' => $UserRegion]);
            // } else {
            //     return view('pages.mandate.constituency', ['UserConstituency' => $UserConstituency, 'UserRegion' => $UserRegion]);
            // }
        } elseif ($Mandate == "ConstituencyLevel") {
            // echo 'has spaces, but not at beginning or end';
            // return $UserConstituency;
            if ($UserConstituency_ == trim($UserConstituency_) && strpos($UserConstituency_, ' ') !== false) {
                $UserConstituency = str_replace(' ', '_', $UserConstituency_);

                // view('snippets.side-bar', ['UserRegion' => $UserConstituency]);
                return view('pages.mandate.constituency', ['UserConstituency' => $UserConstituency, 'UserRegion' => $UserRegion]);
            } else {
                return view('pages.mandate.constituency', ['UserConstituency' => $UserConstituency_, 'UserRegion' => $UserRegion]);
            }
        } else {
            return false;
        }
        // $res = str_replace(array(
        //     '\'', '"',
        //     ',', ';', '<', '>', "'", ')', '}'
        // ), ' ', $constituency);
        // return preg_replace('/[^A-Za-z0-9\-]/', '', $constituency);
        // echo ($res);
        // return false;
        // view('pages.agents.unassign_agent', ['UserRegion' => $UserConstituency]);

    }

    public function regional_constituency($UserRegion)
    {
        $region = $UserRegion;
        // return $region;

        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "checkConstituencyAssignment2?region=$region");


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