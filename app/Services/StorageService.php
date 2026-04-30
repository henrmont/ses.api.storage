<?php

namespace App\Services;

use App\Models\Archive;
use Exception;

class StorageService
{
    public function download(Archive $archive)
    {
        try {
            return response()->json($archive, 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    
}