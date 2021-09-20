<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119162,
            "Name" => "Rifqi Maheswara Karuniyawan",
            "Gender" => "Male",
            "Phone" => 62811899949,
            "Class" => "XII RPL 5"
        ];
    }
}
