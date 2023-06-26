<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function index(){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'packages';
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

        $packages =  json_decode($result,true);


        return view('packages.index',compact('packages'));
    }

    public function create(Request $request){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'package-types';
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

         $packagesTypes =  json_decode($result,true);

        return view('packages.create', compact('packagesTypes'));

    }

    public function store(Request $request){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer '.Session::get('token')
        );

        $DATA = [
            "name" => $request->packageName,
            "packageTypeId" => $request->packagesId,
            "price" => $request->price,
            "renewalPrice" => $request->renewalPrice,
            "numberOfUsers" => $request->noUsers,
            "numberOfBranches" => $request->noBranches,
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL.'packages');
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

        return redirect('efris/package/view');
    }
}
