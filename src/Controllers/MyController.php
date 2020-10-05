<?php

namespace FuquIo\Play\Controllers;

use App\Http\Controllers\Controller;

class MyController extends Controller 
{
    public function test()
    {
        return response()->json([
            'message' => 'Hello !'
        ]);
    }   
}