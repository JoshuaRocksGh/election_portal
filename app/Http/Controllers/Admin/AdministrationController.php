<?php

namespace App\Http\Controllers\Admin;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AdministrationController extends Controller
{
    //
    public function create_admin()
    {
        return view('pages.admin.create_admin_users');
    }

    public function create_admin_user(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'admin_id' => 'required',
            'admin_password' => 'required'
        ]);

        $base_response = new BaseResponse();

        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $user_id = strtoupper($request->admin_id);
        $password = $request->admin_password;

        $data  = [

            "username" => $user_id,
            "password" => $password

        ];

        // return $data;

        try {

            $response = Http::post(env('API_BASE_URL') . "userCreation", $data);
            return json_decode($response);
            // dd($response);
            // return response()->json([
            //     'responseCode' => '556',
            //     'message' => "Agent Creation API",
            //     'data' => $response
            // ], 200);

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