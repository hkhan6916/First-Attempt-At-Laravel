<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JsonController;

class PagesController extends Controller
{
    public function index($id){
        $JsonController = new JsonController();

        $response = $JsonController -> makeRequest('https://jsonplaceholder.typicode.com/users/', $id);
        $data = $JsonController -> extractJson($response);
        $details = $JsonController -> formatJson($data);

        return view('pages.tenants', $details);
    }
}
