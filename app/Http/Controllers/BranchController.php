<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BranchController extends Controller
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

      $branch =  json_decode($result,true);


        return view('branch.show',compact('branch'));
    }

    public function create(){
        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'companies';
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

        $company =  json_decode($result,true);


        return view('branch.addbranch',compact('company'));
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
            "branchCode" => $request->branchCode,
            "isMainBranch" => $request->isMainBranch,
            "companyId" => $request->companyId,
            // "companyName" => $request->noUsers,
            // "numberOfBranches" => $request->noBranches,
        ];

        $jsonData = json_encode($DATA);

        $CURL = curl_init($BASE_URL.'branches');
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

        //  return $DATA;

        return redirect()->back();

        // return redirect('efris/packages/view');
    }

    public function edit($branch_id)
    {

        $BASE_URL = 'https://api.webefris.co.ug/api/v1/';

        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );

        $URL = $BASE_URL.'branches/'.$branch_id;
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

       $branch =  json_decode($result,true);

       $URL = $BASE_URL.'companies/';
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

      $company =  json_decode($result,true);

    //   return $company;
      
        return view('branch.edit', compact('branch','company','branch_id'));
    }



    public function update(Request $request, $id)
    {

        $url = 'https://api.webefris.co.ug/api/v1/branches/'.$id; // Replace with your API endpoint URL
       
        $HEADERS = array(
            'Authorization: Bearer '.Session::get('token')
        );
        $data = [

        'id'=>$request->id,
        "name" => $request->name,
        "branchCode" => $request->branchCode,
        "isMainBranch" => $request->isMainBranch,
        "companyId" => $request->companyId,]; // Replace with the data you want to update

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Use PUT method for update
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Pass the data to be updated
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $HEADERS);

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
            return $responseData;
            return redirect('efris/branches/view',);
        }

    }

}
