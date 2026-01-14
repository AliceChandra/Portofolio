<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function success($data = null)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
