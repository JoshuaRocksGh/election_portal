<?php

namespace App\Http\Controllers\Agents;

use App\Http\classes\API\BaseResponse;
use App\Http\classes\WEB\ApiBaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AddAgentsController extends Controller
{
    //

    public function add_agent()
    {
        return view('pages.agents.add_agents');
    }

    public function edit_agent()
    {
        return view('pages.agents.edit_agent');
    }

    public function agent_list()
    {
        return view('pages.agents.agent_list');
    }

    public function all_agent_list()
    {

        // return $region;

        $base_response = new BaseResponse();

        $response = Http::post(env('API_BASE_URL') . "getAllagent");


        // dd($response);
        return json_decode($response->body());


        $result = new ApiBaseResponse();
        $return = json_decode($response->body());
    }

    public function create_agent(Request $request)
    {

        // return $request;

        $validator = Validator::make($request->all(), [
            'Id' => 'required',
            'PhoneNumber1' => 'required',
            // 'PhoneNumber2' => 'required',
            'Gender' => 'required',
            'Fname' => 'required',
            // 'MiddleName' => 'required',
            'SurName' => 'required',
            'DOB' =>  'required',
            'Picture' => 'required',
            'Region' => 'required',
            'Constituency' => 'required',
            'ElectoralArea' => 'required',
            'EducationalLevel' => 'required',
            'Institution' => 'required',
            'YearOfCompletion' => 'required',
        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };


        $data = [
            "Id" => $request->Id??"",
            "PhoneNumber1" => $request->PhoneNumber1??"",
            "PhoneNumber2" => $request->PhoneNumber2??"",
            "PhoneNumber3" => $request->PhoneNumber3??"",
            "Fname" => $request->Fname??"",
            "MiddleName" => $request->MiddleName??"",
            "SurName" => $request->SurName??"",
            "DOB" => $request->DOB??"",
            "Picture" => $request->Picture??"",
            "Gender" => $request->Gender??"",
            "Region" => $request->Region??"",
            "Constituency" => $request->Constituency??"",
            "ElectoralArea" => $request->ElectoralArea??"",
            "EducationalLevel" => $request->EducationalLevel??"",
            "Institution" => $request->Institution??"",
            "YearOfCompletion" => $request->YearOfCompletion??"",

        ];


        // return $data;

        try {

            $response = Http::post(env('API_BASE_URL') . "agentCreation", $data);
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

    public function edit_agent_api(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Id' => 'required',
            'PhoneNumber1' => 'required',
            'PhoneNumber2' => 'required',
            'Gender' => 'required',
            'Fname' => 'required',
            'MiddleName' => 'required',
            'SurName' => 'required',
            'DOB' =>  'required',
            'Picture' => 'required',
            'Region' => 'required',
            'Constituency' => 'required',
            'ElectoralArea' => 'required',
            'EducationalLevel' => 'required',
            'Institution' => 'required',
            'YearOfCompletion' => 'required',
        ]);

        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };
        return $request;


        $data = [
            "Id" => $request->Id,
            "PhoneNumber1" => $request->PhoneNumber1,
            "PhoneNumber2" => $request->PhoneNumber2,
            "PhoneNumber2" => $request->PhoneNumber2,
            "PhoneNumber3" => $request->PhoneNumber3,
            "Fname" => $request->Fname,
            "MiddleName" => $request->MiddleName,
            "SurName" => $request->SurName,
            "Gender" => $request->Gender,
            "DOB" => $request->DOB,
            "Picture" => $request->Picture,
            "Region" => $request->Region,
            "Constituency" => $request->Constituency,
            "ElectoralArea" => $request->ElectoralArea,
            "EducationalLevel" => $request->EducationalLevel,
            "Institution" => $request->Institution,
            "YearOfCompletion" => $request->YearOfCompletion,

        ];

        // return $data;

        try {

            $response = Http::post(env('API_BASE_URL') . "agentEdit", $data);
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

    public function get_agent_details(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "phone_number" => "required"
        ]);


        $base_response = new BaseResponse();

        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };


        $phoneNumber = $request->phone_number;


        // return $data;

        try {

            $response = Http::get(env('API_BASE_URL') . "agentSearch?phoneNumber=$phoneNumber");
            return json_decode($response);

            $result = new ApiBaseResponse();
            return $result->api_response($response);
            // return json_decode($response->body();

        } catch (\Exception $e) {

            // DB::table('tb_error_logs')->insert([
            //     'platform' => 'ONLINE_INTERNET_BANKING',
            //     'user_id' => 'AUTH',
            //     'message' => (string) $e->getMessage()
            // ]);

            return $base_response->api_response('500', $e->getMessage(),  NULL); // return API BASERESPONSE


        }
    }

    public function send_message()
    {
        return view('pages.agents.send_message');
    }

    public function message_details(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title"  =>  'required',
            "body"  =>  'required',
            "region" => 'required'
        ]);


        $base_response = new BaseResponse();

        // VALIDATION
        if ($validator->fails()) {

            return $base_response->api_response('500', $validator->errors(), NULL);
        };

        // return $request;
        $region = strtolower($request->region);

        $data = [


            "data" => [
                "notification" => [
                    "title" => $request->title,
                    "body" => $request->body,
                ]
            ],
            "region" => $region,


        ];

        // return $data;

        try {
            $response = Http::post(env('API_BASE_URL') . "sendNotification", $data);
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