<?php

namespace App\Http\Controllers;

use Request;


class ProfileController extends Controller
{

    public function index($id)
    {


        $name = "Donald Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];
        $status_code = 200;
        $access_token = "123-XYZ";
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $response = response($data, $status_code);
        $response->cookie('access_token', $access_token, $minutes, $path, $domain, $secure, $httpOnly);
        return $response;

    }

}
