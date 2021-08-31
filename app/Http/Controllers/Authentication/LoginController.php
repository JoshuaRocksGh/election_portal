<?php

namespace App\Http\Controllers\Authentication;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'password' => 'required'
        ]);

        $base_response = new BaseResponse();

        // return $request;
        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        $user_id = $request->user_id;
        $password = $request->password;

        $data  = [

            "username" => $user_id,
            "password" => $password

        ];

        // return $data ;

        // dd(env('API_BASE_URL') . "userLogin");
        try {

            $response = Http::post(env('API_BASE_URL') . "userLogin", $data);
            // $response = Http::post("localhost/laravel/parliamentary_api/public/api/user-login", $data);
            // return json_decode($response->body());
            $error = json_decode($response->body());
            if ($response->ok()) {
                $result = json_decode($response->body());

                // dd($result->message);
                if ($result->message === "success") {


                    return  $base_response->api_response($result->status, $result->message,  $result->data); // return API BASERESPONSE
                } else {


                    return  $base_response->api_response($result->status, $result->message,  $result->data); // return API BASERESPONSE

                }
            } else {

                return $base_response->api_response($error->status, $error->message,  NULL); // return API BASERESPONSE
            }

            // die;
            // $result = new ApiBaseResponse();
            // return $result->api_response($response);
        } catch (\Exception $e) {

            // DB::table('tb_error_logs')->insert([
            //     'platform' => 'ONLINE_INTERNET_BANKING',
            //     'user_id' => 'AUTH',
            //     'message' => (string) $e->getMessage()
            // ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }
}