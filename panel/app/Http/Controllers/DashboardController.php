<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CurlRequest;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller{
	public function __construct(){
    	$this->url = 'http://globe.farmersmarket.asia/curlRequest';
    }
    public function dashboard(Request $request){
    	$curlData = json_decode(CurlRequest::getData($this->url,1,$request->all()));
    	/*if(isset($curlData->allHarvestRecord)):
		    foreach($curlData->allHarvestRecord as $value):
		    	echo Carbon::parse($value->created_at)->toDateString().'<br>';
		    endforeach;
		endif;
    	dd($curlData);*/
    	return view('WhiteFish.buyer.dashboard')->with('curlData',$curlData);
    }
}
