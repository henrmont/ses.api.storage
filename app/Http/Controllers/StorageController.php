<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Services\StorageService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    use AuthorizesRequests;

    public function download(Archive $archive, StorageService $storageService)
    {
        $this->authorize('download');
        return $storageService->download($archive);
    }
}
