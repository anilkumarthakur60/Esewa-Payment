<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsewaController extends Controller
{

    public function success(Request $request)
    {
        if (isset($request->oid) && isset($request->amt) && isset($request->refId)) {
            $refId = $request->refId;
            $amt = $request->amt;
            $url = "https://uat.esewa.com.np/epay/transrec";
            $data = [

                'amt' => 10,

                'rid' => $refId,
                'pid' => '8918123f-c0ab-4d82-ad51-467ae3b7b2a55',
                'scd' => 'EPAYTEST',
            ];

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($curl);

            curl_close($curl);

            if (strpos($response, 'Success') == TRUE) {

                dd('success', $request->all());
            }
            dd('fail', $request->all());
        }
    }


    public function fail(Request $request)
    {

        dd(' fail url ', $request->all());
    }

    //
}
