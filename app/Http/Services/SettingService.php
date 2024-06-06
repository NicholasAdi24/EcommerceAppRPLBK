<?php

namespace App\Services;

use App\Models\Settings;

class SettingsService
{
    public function getSettings()
    {
        return Settings::first();
    }

    public function updateSettings($data)
    {
        $settings = Settings::first();
        return $settings->fill($data)->save();
    }
}
