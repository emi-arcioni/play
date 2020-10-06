<?php

namespace FuquIo\Play\Controllers;

use App\Http\Controllers\Controller;
use FuquIo\Play\Requests\ConversionInputs;

class MyController extends Controller 
{

    protected $conversion_rate = 153;

    public function test()
    {
        return response()->json([
            'message' => 'Hello !'
        ]);
    }

    public function convert(ConversionInputs $request)
    {
        $amount = $request->input('amount');

        return response()->json([
            'result' => $amount * $this->conversion_rate
        ]);
    }
}