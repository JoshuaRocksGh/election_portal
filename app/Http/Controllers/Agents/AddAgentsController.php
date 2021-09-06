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

    public function create_agent(Request $request)
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
        // return $request;

        $data = [
            "Id" => $request->Id,
            "PhoneNumber1" => $request->PhoneNumber1,
            "PhoneNumber2" => $request->PhoneNumber2,
            "PhoneNumber3" => "",
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


        return $data;

        try {

            $response = Http::post(env('API_BASE_URL') . "agentCreation", $data);

            // dd($response);
            return response()->json([
                'responseCode' => '556',
                'message' => "Agent Creation API",
                'data' => $response
            ], 200);

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