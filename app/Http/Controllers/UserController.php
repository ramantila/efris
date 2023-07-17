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

          $companydetails =  json_decode($result, true);

       $URL = $BASE_URL . 'branches/';
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

        return view('users.create', compact('companyTypes','branchdetails','companydetails'));
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
            "password"=>$request->password,
            "confirmPassword"=>$request->confirmPassword,
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


    public function edit(Request $request)
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
        // $id = $request->input('id');
        $user =  json_decode($result, true);
  
        return view('users.edit', compact('user'));
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
