<?php

namespace App\Services;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class StorageService
{
    public function createStorageLink()
    {
        if (File::exists(public_path('storage'))) {
            File::delete(public_path('storage'));
        }

        Artisan::call('storage:link');
    }
}
