<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ResearchGroup;
use App\Faculty;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // if(isset($researchGroup)&&)
        $researchGroup=ResearchGroup::orderBy('name')->get();
        $faculty=Faculty::orderBy('name')->get();
        view()->share(['researchGroup'=>$researchGroup,'faculty'=>$faculty]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
