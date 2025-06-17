<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function apiResponse($message, $data = NULL, $statusCode = 200)
    {
        return response()->json([
            'messsage' => $message,
            'data' => $data
        ], $statusCode);
    }
}
