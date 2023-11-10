<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;


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

        $URL = $BASE_URL.'company-types';
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

         $companytype =  json_decode($result,true);

        return view('step.step1', compact('company', 'tinNumber', 'packages','companytype'));
    }

    public function completeprofile(Request $request,$id)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies/'.$id;
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

        $company =  json_decode($result,true);

        return view('company.completeprofile', compact('company','id'));
    }


        public function complete_update(Request $request)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer ' . Session::get('token')
        );

        $DATA = [
            "company" => intval($request->company),

            'shortCode' => $request->shortCode,
            'smsReceipts' => $request->smsReceipts,

        ];

         $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'companies/complete-profile');
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

      return   $response =  json_decode($result);


            return redirect('companies/show');
        }





    public function Modeselection_update(Request $request,$id)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL . 'companies/'.$id;
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

        return view('company.modeupdate', compact('company','id'));
    }

    public function update(Request $request)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer ' . Session::get('token')
        );

        $DATA = [
            "company" => intval($request->company),
            "mode" => $request->mode,


        ];

         $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'companies/mode');
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

       return  $response =  json_decode($result);



            return redirect('companies/show');
        }


    public function modeupdate(Request $request, $id)
    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Accept: Application/json',
            'Content-type: Application/json',
            'Authorization: Bearer ' . Session::get('token')
        );

        $DATA = [
            "company" => intval($request->company),

            'deviceNumber' => $request->deviceNumber,
            'baseUrl' =>"http://45.76.5.39:9880/efristcs/ws/tcsapp/getInformation",


        ];

         $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL . 'companies/mode-offline');
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

       return  $response =  json_decode($result);



            return redirect('companies/show');
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
            "name" => $request->name,
            "companyType" => intval($request->companyType),
            "tin" => $request->tin,
            "contactPersonEmail" => $request->emailAddress,
            "contactFullName" => $request->contactFullName,
            "contactPersonIdType" => $request->contactPersonIdType,
            "contactPersonIdNumber" => $request->contactPersonIdNumber,
            "contactPersonPhoneNumber" => $request->contactPersonPhoneNumber,

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





        return redirect('companies/show');
    }

    public function companydelete(Request $request, $id)
    {
              $url = 'https://api.webefris.co.ug/api/v1/companies/'.$id; // Replace with your API endpoint
              $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

            // Send the DELETE request
            $response = Http::delete($url);

            // Check the response and handle it as needed
            if ($response->successful()) {
            // "Request was successful (HTTP status code 2xx)";
                $data = $response->json(); // Retrieve the response data
                // Handle success
            } else {
                // Request failed (HTTP status code other than 2xx)
                $statusCode = $response->status(); // Get the HTTP status code
                $error = $response->json(); // Get error data if available
                // Handle the error
            }

            return view('company.modeselection');

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

         $response =  json_decode($result);

        return redirect()->back();

    }

    public function step1()
    {
        // {
            $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

            $HEADERS = array(
                'Authorization: Bearer ' . Session::get('token')
            );

            $URL = $BASE_URL . 'companies/';
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

            $URL = $BASE_URL . '/packages';
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
        //    dd($packages);

            $URL = $BASE_URL.'company-types';
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

            $companytype =  json_decode($result,true);


            return view('step.step1', compact('company', 'companytype','packages'));
        }



    public function postStep1(Request $request)
    {
        // Handle data submission for step 1
        // You can validate the input and store it in the session for the next step
        $request->session()->put('step1_data', $request->all());
        return redirect('companies/step2');
    }
    public function mode($id)

    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies/'.$id;
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

        $URL = $BASE_URL.'company-types';
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

        $companytype =  json_decode($result,true);

        return view('company.modeselection',compact('company','companytype','id'));
    }
    public function step2()

    {
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer ' . Session::get('token')
        );

        $URL = $BASE_URL . 'companies/';
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

        $URL = $BASE_URL.'company-types';
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

        $companytype =  json_decode($result,true);
        return view('step.step2',compact('company','companytype'));
    }

    public function postStep2(Request $request)
    {
        // Handle data submission for step 2
        // Retrieve data from session (e.g., $data = $request->session()->get('step1_data');)
        // Perform any additional processing
        return redirect('companies/step3'); // Redirect to the next page to display the final result
    }
    public function step3()
    {
        return view('step.step3');
    }

    public function postStep3(Request $request)
    {
        // Handle data submission for step 2
        // Retrieve data from session (e.g., $data = $request->session()->get('step1_data');)
        // Perform any additional processing
        return view('step.step4'); // Redirect to the next page to display the final result
    }
    public function step4()
    {
        return view('step.step4');
    }

    public function postStep4(Request $request)
    {
        // Handle data submission for step 2
        // Retrieve data from session (e.g., $data = $request->session()->get('step1_data');)
        // Perform any additional processing
        return redirect('next-page'); // Redirect to the next page to display the final result
    }
}
