<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Services\StorageService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    use AuthorizesRequests;

    public function download($module, Archive $archive, StorageService $storageService)
    {
        $this->authorize($module.'/download');
        return $storageService->download($archive);
    }
}
