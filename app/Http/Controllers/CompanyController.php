<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function index()
    {

        return view('efris.company.index');
    }

    public function create()
    {

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
        $tinNumber = '';

        return view('company.search', compact('tinNumber'));
    }




    public function search(Request $request)
    {

        $tinNumber = $request->tinNumber;
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer ' . Session::get('token')
        );

        $DATA = [
            "tinNumber" => $request->tinNumber,
            "businessRegistrationNumber" => "",
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'tin-number/getTinInformation');
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

        $company =  json_decode($result);

        $URL = $BASE_URL . 'packages';
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

        $packages =  json_decode($result, true);

        return view('company.search', compact('company', 'tinNumber', 'packages'));
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
            "companyType" => $request->companyType,
            "companyTypeName" => $request->companyTypeName,
            "tin" => $request->tin,
            "vrn" => $request->tin,
            "taxOffice" => $request->taxOffice,
            "contactPersonName" => $request->contactPersonName,
            "contactPersonEmail" => $request->emailAddress,
            // "totalReceiptSent" => $request->totalReceiptSent,
            // "status" => $request->status,
            // "verificationStatus" => $request->verificationStatus,
            // "verificationStatusDescription" => $request->verificationStatusDescription,
            // "verificationStage" => $request->verificationStage,
            // "aesKeyExpiration" => $request->aesKeyExpiration,
            "createdAt" => Carbon::now(),
            "businessName" => $request->businessName,
            "emailAddress" => $request->emailAddress,
            "contactFullName" => $request->contactFullName, 
            "contactPersonIdType" => $request->contactPersonIdType,
            "contactPersonIdNumber" => $request->contactPersonIdNumber,
            "legalName" => $request->legalName,
            "phoneNumber" =>  $request->contactPersonPhone,
            "address" => $request->address,
            "contactPersonPhoneNumber" => $request->contactPersonPhone,
        
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

        // return $DATA;

        return redirect('companies/show');
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
        $data = [
            'key1' => 'value1',

            'key2' => 'value2'
        ]; // Replace with the data you want to update

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

    public function details($id)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        // ==================== CURL FOR COMPANY =========================
        $COMPANY_URL = $BASE_URL . 'companies/' . $id;
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $COMPANY_URL);
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

        $companydetails =  json_decode($result, true);

        //======================= CURL FOR BRANCH ========================
        $URL = $BASE_URL . 'branches/' . $id;
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

        $branchdetails =  json_decode($result, true);

        //======================== CURL FOR CURRENCY ======================
        $CURRENCY_URL = $BASE_URL . 'companies/' . $id . '/currencies';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $CURRENCY_URL);
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

        $currencies =  json_decode($result, true);

        //======================== CURL FOR PRODUCT ======================

        $PRODUCT_URL = $BASE_URL . 'companies/' . $id . '/products';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $PRODUCT_URL);
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

        $products =  json_decode($result, true);

        //======================== CURL FOR PRODUCT ======================

        $CUSTOMER_URL = $BASE_URL . 'companies/' . $id . '/customers';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $CUSTOMER_URL);
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

        $customers =  json_decode($result, true);

        //======================== CURL FOR PRODUCT ======================

        $UNIT_URL = $BASE_URL . 'companies/' . $id . '/measurement-units';
        $CURL =  curl_init();
        curl_setopt($CURL, CURLOPT_URL, $UNIT_URL);
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

        $units =  json_decode($result, true);


        return view('company.details', compact('companydetails', 'branchdetails', 'id', 'currencies', 'products', 'customers','units'));
    }

    public function getCurrency(){

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

        return response()->json($currencies);
    }

    public function storeCurrrency(Request $request, $company_id){

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer '.Session::get('token')
        );

        $DATA = [
            "id" => 0,
            "company" => $company_id,
            "currency" => $request->currency_id
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL.'company-currencies');
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

        return $response =  json_decode($result);

        return redirect()->back();

    }
}
