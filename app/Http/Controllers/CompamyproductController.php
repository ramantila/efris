<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompamyproductController extends Controller
{
    public function index(){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'branches';
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

        $cproducts =  json_decode($result,true);


        return view('companyproducts.show',compact('cproducts'));
    }

}
