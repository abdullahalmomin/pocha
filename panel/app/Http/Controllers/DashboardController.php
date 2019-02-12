<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CurlRequest;

class DashboardController extends Controller{
	public function __construct(){
    	$this->url = 'http://globe.farmersmarket.asia/curlRequest';
    }
    public function dashboard(Request $request){
    	$curlData = json_decode(CurlRequest::getData($this->url,1,$request->all()));
    	if(isset($curlData->allHarvestRecord)):
		    foreach($curlData->allHarvestRecord as $value):
		    	echo $value->created_at;
		    endforeach;
		endif;
    	dd($curlData);
    	return view('WhiteFish.buyer.dashboard')->with('curlData',$curlData);
    }
}
