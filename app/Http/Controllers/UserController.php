<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'users';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $URL);
        curl_setopt($CURL, CURLOPT_HTTPHEADER, $HEADERS);
        curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);

        try {
            $result = curl_exec($CURL);
            if (curl_errno($CURL)){
                throw new \Exception(curl_error($CURL));
            }
            curl_close($CURL);
        }
        catch (\Exception $e){

        }

      $users =  json_decode($result,true);


        return view('users.index',compact('users'));
    }

    public function create(Request $request)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'users';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $URL);
        curl_setopt($CURL, CURLOPT_HTTPHEADER, $HEADERS);
        curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);

        try {
            $result = curl_exec($CURL);
            if (curl_errno($CURL)) {
                throw new \Exception(curl_error($CURL));
            }
            curl_close($CURL);
        } catch (\Exception $e) {
        }

        $companyTypes =  json_decode($result, true);

        return view('users.create', compact('companyTypes'));
    }




    public function store(Request $request)
    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer ' . Session::get('token')
        );

        $DATA = [
            "fullName" => $request->fullName,
            "email" => $request->email,
            "phoneNumber" => $request->phoneNumber,
            "role" => $request->role,
            "registrationDate" => Carbon::now(),

        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'auth/register');
        curl_setopt($CURL, CURLOPT_POST, true);
        curl_setopt($CURL, CURLOPT_HTTPHEADER, $HEADERS);
        curl_setopt($CURL, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($CURL, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($CURL, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);

        try {
            $result = curl_exec($CURL);
            if (curl_errno($CURL)) {
                throw new \Exception(curl_error($CURL));
            }
            curl_close($CURL);
        } catch (\Exception $e) {
        }

        $response =  json_decode($result,true);

        // return $DATA;

        return redirect()->back();
    }
}
