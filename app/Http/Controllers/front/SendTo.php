<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendTo extends Controller
{
    public function send(Request $request)
    {
        $name = $request->name;
        $number = $request->number;

        return response()->json([
            'status' => 200,
            'data' => 'Name: ' . $name . ' || ' . 'Number: ' . $number
        ]);
    }
}
