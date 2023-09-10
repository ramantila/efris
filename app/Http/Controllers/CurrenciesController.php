<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function index(){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'currencies';
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

        $currencies =  json_decode($result,true);


        return view('company.currency.index',compact('currencies'));
    }

    public function store(Request $request){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer '.Session::get('token')
        );

        $DATA = [
            "name" => $request->name,
            "code" => $request->code,
            "value" => $request->value
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL.'currencies');
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

        return redirect()->back();

    }

    public function update(Request $request, $currency_id){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer ' . Session::get('token'),
        ];
    
        $DATA = [
            "id" => $currency_id,
            "name" => $request->input('name'),
            "code" => $request->input('code'),
            "value" => $request->input('value'),
        ];
    
        $jsonData = json_encode($DATA);
    
        $URL = $BASE_URL . 'currencies';
        $CURL = curl_init();
    
        curl_setopt($CURL, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($CURL, CURLOPT_URL, $URL);
        curl_setopt($CURL, CURLOPT_HTTPHEADER, $HEADERS);
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

        return redirect()->back();

    }

    public function delete($currency_id){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'currencies/'.$currency_id;
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_CUSTOMREQUEST, 'DELETE');
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

        $currencies =  json_decode($result,true);

        return redirect()->back();

    }
}
