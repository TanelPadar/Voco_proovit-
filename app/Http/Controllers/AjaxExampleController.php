<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxExampleController extends Controller
{
    public function ajaxRequest()
    {
        $colors = ['#FF5733', '#33FF57', '#5733FF', '#E0E0E0'];
        $randomColor = $colors[array_rand($colors)];

        return response()->json(['color' => $randomColor]);
    }
}
