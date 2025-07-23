<?php

namespace App\Providers;

use App\Models\City;
use App\Models\region;
use App\Models\Status;
use App\Models\Ability;
use CacheAbilitiesServices;
use App\Models\Neighbourhood;
use App\Models\SettingSystem;
use App\Observers\CityObserver;
use App\Observers\RegionObserver;
use App\Observers\StatusObserver;
use App\Observers\AbilityObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Observers\NeighbourhoodObserver;
use App\Observers\SystemSettingObserver;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {

        SettingSystem::observe(SystemSettingObserver::class);
        Status::observe(StatusObserver::class);
        region::observe(RegionObserver::class);
        City::observe(CityObserver::class);
        Neighbourhood::observe(NeighbourhoodObserver::class);
        Ability::observe(AbilityObserver::class);


        date_default_timezone_set('Asia/Gaza');


        Gate::before(function ($user, $ability) {
            if (!$user) return null;

            $userTypesWithFullAccess = ['programmer', 'superadmin'];

            return in_array($user->user_type, $userTypesWithFullAccess) ? true : null;
        });


        $abilities = Cache::rememberForever('abilities_list', function () {
            return Ability::all();
        });

        foreach ($abilities as $data) {

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
