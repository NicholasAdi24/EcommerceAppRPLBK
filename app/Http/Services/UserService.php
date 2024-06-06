<?php

namespace App\Services;

use App\User;
use Carbon\Carbon;

class UserService
{
    public function getUserStatistics()
    {
        return User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name', 'day')
            ->orderBy('day')
            ->get();
    }
}
