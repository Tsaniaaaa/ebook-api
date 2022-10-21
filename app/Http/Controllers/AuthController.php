<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120220,
            'Name' => 'Tiara Tsania',
            'Phone' => '081393601839',
            'Class' => 'XII RPL 7'
        ];
    }
}
