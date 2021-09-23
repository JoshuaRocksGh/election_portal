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
        // return $request;

        $validator = Validator::make($request->all(), [
            "first_name" => "required",
            "last_name" => "required",
            "phone_number" => "required",
            "voters_id" => "required",
            "user_mandate" => "required",
            // "user_region" => "required",
            // "user_constituency" =>  "required",
            'admin_id' => 'required',
            'admin_password' => 'required'
        ]);

        $base_response = new BaseResponse();

        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $user_constituency_ = $request->user_constituency;
        $constituency_split = (explode("~", $user_constituency_));

        $user_constituency = $constituency_split[0];
        $user_id = strtoupper($request->admin_id);
        $password = $request->admin_password;
        $mandate = $request->user_mandate;

        if ($mandate == "NationalLevel") {
            $data = [
                "Fname" => $request->first_name,
                "SurName" => $request->last_name,
                "PhoneNumber" => $request->phone_number,
                "Id" => $request->voters_id,
                "UserMandate" => $request->user_mandate,
                "Region" => "ALL",
                "Constituency" =>  "ALL",
                "Username" => $user_id,
                "Password" => $password
            ];
        } elseif ($mandate == "RegionalLevel") {
            $data = [
                "Fname" => $request->first_name,
                "SurName" => $request->last_name,
                "PhoneNumber" => $request->phone_number,
                "Id" => $request->voters_id,
                "UserMandate" => $request->user_mandate,
                "Region" => $request->user_region,
                "Constituency" =>  "ALL",
                "Username" => $user_id,
                "Password" => $password
            ];
        } elseif ($mandate == "ConstituencyLevel") {
            $data = [
                "Fname" => $request->first_name,
                "SurName" => $request->last_name,
                "PhoneNumber" => $request->phone_number,
                "Id" => $request->voters_id,
                "UserMandate" => $request->user_mandate,
                "Region" => $request->user_region,
                "Constituency" =>  $user_constituency,
                "Username" => $user_id,
                "Password" => $password
            ];

            // return $data;
        }

        // $data  = [

        //     "username" => $user_id,
        //     "password" => $password

        // ];



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