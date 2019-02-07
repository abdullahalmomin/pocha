<?php
namespace App\Helpers;
use Illuminate\Support\Carbon;
use Auth;

class CurlRequest{
    public static function curlRequest($url,$param=Null){
        //Curl Url
        // $url = 'http://bdmobile.net/bkash/api/bKash';
        $url = $url;
        /* Update URL to container Query String of Paramaters */
        if(!is_null($param))
            $url .= '?' . http_build_query($param);

        /* cURL Resource */
        $ch = curl_init();

        /* Set URL */
        curl_setopt($ch, CURLOPT_URL, $url);

        /* Tell cURL to return the output */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* Tell cURL NOT to return the headers */
        curl_setopt($ch, CURLOPT_HEADER, false);

        /* Execute cURL, Return Data */
        $data = curl_exec($ch);

        /* Check HTTP Code */
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        /* Close cURL Resource */
        curl_close($ch);

        /* 200 Response! */

        return $data;
    }
}