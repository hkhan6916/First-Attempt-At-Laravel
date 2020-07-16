<?php

namespace App\Http\Controllers;

use \GuzzleHttp\Client;

class JsonController extends Controller
{
    public function makeRequest($url, $id) {
        $client = new Client();
        $request = $client->get($url . $id);

        $response = json_decode($request->getBody());

        return $response;
    }

    public function extractJson($data) {
        $details['address'] = stripslashes(json_encode($data -> address));
        $details['phone'] = stripslashes(json_encode($data -> phone));
        $details['email'] = stripslashes(json_encode($data -> email));
        $details['name'] = stripslashes(json_encode($data -> name));

        return $details;
    }

    public function formatJson($details) {
        $target = ['"', "{", "}"]; 
        $replacement = ["","",""];

        $formatted_phone = str_replace($target, $replacement, $details['phone']); 
        $formatted_address = str_replace($target, $replacement, $details['address']);
        $formatted_name = str_replace($target, $replacement, $details['name']);
        $formatted_email = str_replace($target, $replacement, $details['email']);

        $formatted_details = [
            'name'  => $formatted_name,
            'phone' => $formatted_phone,
            'email' => $formatted_email,
            'address' => $formatted_address
        ];

        return $formatted_details;
    }
}
