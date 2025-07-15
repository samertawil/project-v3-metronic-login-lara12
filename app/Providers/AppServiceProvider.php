<?php

namespace App\Providers;

use App\Models\Status;
use App\Models\Ability;
use App\Models\SettingSystem;
use App\Observers\StatusObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Observers\SystemSettingObserver;

class AppServiceProvider extends ServiceProvider
{
 
    public function register(): void
    {
        //
    }

 
    public function boot(): void
    {

    
        Gate::before(function ($user, $ability) {
            $userType = ['programmer', 'superadmin'];
            if (in_array($user->user_type, $userType)) {
                return true;
            }
        });

        SettingSystem::observe(SystemSettingObserver::class);
        Status::observe(StatusObserver::class);


        foreach (Ability::get() as $data) {

            Gate::define($data->ability_name, function ($user) use ($data) {


                if ($user->user_activation != 1) {
                    return false;
                }

                foreach ($user->rolesRelation as $role) {

                    if (in_array(($data->ability_name), $role->abilities)) {

                        return true;
                    }
                }
                return false;
            });
        }
    }
}
