<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CurlRequest;

class CurlRequestController extends Controller
{
    public function __construct(){
    	// $this->url = 'http://bdmobile.net/bkash/api/bKash';
    	$this->url = 'http://localhost/etraceability_beta2/curlRequest';
    }
    
    public function AppModule(Request $request){
    	$curlData = CurlRequest::getData($this->url,1,$request->all());

    	dd($curlData);
    }
}
