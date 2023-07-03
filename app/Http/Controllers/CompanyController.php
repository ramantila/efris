<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function index(){

        return view('efris.company.index');

    }

    public function create(){

        return view('efris.company.create');

    }






    public function index2()
    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies';
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

        $company =  json_decode($result, true);


        return view('company.show', compact('company'));
    }

    public function search1()
    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies';
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

        $company =  json_decode($result, true);


        return view('company.search', compact('company'));
    }




    public function search()
    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies';
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

        $keyword = $request->input('tinNumber');
      
    
        $response = Http::get('https://api.webefris.co.ug/api/v1/companies', [
            'query' => $tinNumber,
 
        ]);
    
        
        $company = $response->json();


        return view('company.search', compact('company'));
    }



    public function create2(Request $request)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'company-types';
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

        return view('company.addcompany', compact('companyTypes'));
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
            "companyName" => $request->companyName,
            "companyType" => $request->companyType,
            "companyTypeName" => $request->companyTypeName,
            "tinNumber" => $request->tinNumber,
            "vrn" => $request->vrn,
            "taxOffice" => $request->taxOffice,
            "contactPersonName" => $request->contactPersonName,
            "contactPersonEmail" => $request->contactPersonEmail,
            "contactPersonPhone" => $request->contactPersonPhone,
            // "totalReceiptSent" => $request->totalReceiptSent,
            // "status" => $request->status,
            // "verificationStatus" => $request->verificationStatus,
            // "verificationStatusDescription" => $request->verificationStatusDescription,
            // "verificationStage" => $request->verificationStage,
            // "aesKeyExpiration" => $request->aesKeyExpiration,
            "createdAt" => Carbon::now(),

        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'companies');
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

        $response =  json_decode($result);

        return $DATA;

        return redirect()->back();
    }

    public function edit(Request $request)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies';
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

        $companyedit =  json_decode($result, true);

        return view('company.edit', compact('companyedit'));
    }



    public function update()
    {

        $url = 'https://api.webefris.co.ug/api/v1/companies'; // Replace with your API endpoint URL
        $data = ['key1' => 'value1',

        'key2' => 'value2']; // Replace with the data you want to update

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Use PUT method for update
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Pass the data to be updated
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);


        if ($response === false) {
            // Handle cURL error
            $errorMessage = curl_error($ch);
            // ...
        } else {
            // Process the response
            $responseData = json_decode($response, true);
            // ...

            return redirect('');
        }

    }

}


