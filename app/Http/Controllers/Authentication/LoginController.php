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

        $user_id = strtoupper($request->user_id);
        $password = $request->password;

        $data  = [

            "username" => $user_id,
            "password" => $password

        ];

        // return $data;

        // dd(env('API_BASE_URL') . "userLogin");
        try {

            $response = Http::post(env('API_BASE_URL') . "userLogin", $data);
            // $response = Http::post("localhost/laravel/parliamentary_api/public/api/user-login", $data);
            // return json_decode($response);
            $error = json_decode($response->body());
            if ($response->ok()) {
                $result = json_decode($response->body());
                // return $result;

                // dd($result->message);
                if ($result->message === "success") {

                    $userDetail = $result->data;

                    // return $userDetail;

                    session([
                        "UserMandate" => $userDetail->UserMandate,
                        "Region" => $userDetail->Region,
                        "Constituency" => $userDetail->Constituency,
                        "FirstName" => $userDetail->Fname,
                        "Surname" => $userDetail->SurName,
                    ]);

                    $get_agent = Http::post(env('API_BASE_URL') . "getAllagent");

                    $agent = json_decode($get_agent->body());

                    $agentDetails = $agent->data;

                    // return $agentDetails;

                    foreach ($agentDetails as $agentDetail) {
                        $request->session()->push('AgentDetail', [
                            'Constituency' => $agentDetail->Constituency,
                            'DOB' => $agentDetail->DOB,
                            'EducationalLevel' => $agentDetail->EducationalLevel,
                            'ElectoralArea' => $agentDetail->ElectoralArea,
                            'Fname' => $agentDetail->Fname,
                            'Gender' => $agentDetail->Gender,
                            'Id' => $agentDetail->Id,
                            'Institution' => $agentDetail->Institution,
                            // 'Location' => $agentDetail->Location,
                            'MiddleName' => $agentDetail->MiddleName,
                            'Picture' => $agentDetail->Picture,
                            'Region' => $agentDetail->Region,
                            'SurName' => $agentDetail->SurName,
                            'phoneNumber1' => $agentDetail->phoneNumber[0],
                            'phoneNumber2' => $agentDetail->phoneNumber[1],
                            'phoneNumber3' => $agentDetail->phoneNumber[2]
                        ]);
                        // session(['AgentDetail' => [
                        //     'Constituency' => $agentDetail->Constituency,
                        //     'DOB' => $agentDetail->DOB,
                        //     'EducationalLevel' => $agentDetail->EducationalLevel,
                        //     'ElectoralArea' => $agentDetail->ElectoralArea,
                        //     'Fname' => $agentDetail->Fname,
                        //     'Gender' => $agentDetail->Gender,
                        //     'Id' => $agentDetail->Id,
                        //     'Institution' => $agentDetail->Institution,
                        //     // 'Location' => $agentDetail->Location,
                        //     'MiddleName' => $agentDetail->MiddleName,
                        //     'Picture' => $agentDetail->Picture,
                        //     'Region' => $agentDetail->Region,
                        //     'SurName' => $agentDetail->SurName,
                        //     'phoneNumber1' => $agentDetail->phoneNumber[0],
                        //     'phoneNumber2' => $agentDetail->phoneNumber[1],
                        //     'phoneNumber3' => $agentDetail->phoneNumber[2]

                        // ]]);
                    }








                    // return $session ;

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