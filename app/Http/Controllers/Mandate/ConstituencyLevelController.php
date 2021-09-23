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
    public function unassign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "pollingID" => "required",
            "userID" => "required"
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $data = [
            "pollingID" => $request->pollingID,
            "userID" => $request->userID
        ];

        try {
            // $response = Http::post(env('API_BASE_URL') . "sendNotification", $data);
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
}