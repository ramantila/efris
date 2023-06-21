<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    ######API LOGIN #########
    public function postLogin(Request $request){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json'
        );

        $DATA = [
            "email" => $request->email,
            "password" => $request->password
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL.'auth/login');
        curl_setopt($CURL, CURLOPT_POST, true);
        curl_setopt($CURL, CURLOPT_HTTPHEADER, $HEADERS);
        curl_setopt($CURL, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($CURL, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($CURL, CURLOPT_POSTFIELDS, $jsonData);
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

         $response =  json_decode($result);

         if ($response->user->isActive == 1){

             Session::put('token',$response->token);
             Session::put('refreshToken',$response->refreshToken);
             return redirect('dashboard');
         }
         else
         {

         }



    }
}
