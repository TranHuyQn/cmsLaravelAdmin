<?php

namespace App\Http\Helpers;

class Helpers {
    public function formatResponse ($errorCode, $data, $message) {
        return response()->json([
            'errorCode' => $errorCode,
            'message' => $message,
            'data' => $data
        ]);
    }
}
