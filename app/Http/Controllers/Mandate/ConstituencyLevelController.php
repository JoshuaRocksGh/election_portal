<?php

namespace App\Http\Controllers\Mandate;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ConstituencyLevelController extends Controller
{
    //
    public function unassign_(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "pollingID" => "required",
            "userID" => "required"
        ]);

        // return $request;

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // $polling_station = $request->pollingID;

        $data = [
            "pollingID" => $request->pollingID,
            "userID" => $request->userID
        ];

        try {
            $response = Http::post(env('API_BASE_URL') . "unAssignPollingAgent", $data);
            return json_decode($response);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
        } catch (\Exception $e) {

            // DB::table('tb_error_logs')->insert([
            //     'platform' => 'ONLINE_INTERNET_BANKING',
            //     'user_id' => 'AUTH',
            //     'message' => (string) $e->getMessage()
            // ]);

            return $base_response->api_response('500', "Internal Server Error",  NULL); // return API BASERESPONSE


        }
    }

    public function unassign(Request $request)
    {
        $electoral_area = $request->query('electoral_area');
        $user_id = $request->query('user_id');
        $constituency = session()->get('Constituency');
        $assign = $request->query('assign');
        // return $electoral_area;

        return view('pages.agents.unassign_agent', ['electoral_area' => $electoral_area, 'assign'=>$assign, 'user_id' => $user_id, 'constituency' => $constituency]);
    }

}