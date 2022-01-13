<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blocApi extends Controller
{
    //
    function getData()
    {
        return ["name"=>"elie",
                "email"=>"elietshibangu347@gmail.com",
                "adresse"=>"Av. ipubi Q. Mikonga C. N'sele "];
    }
}
