<?php

namespace App\Providers;

use App\Dining;
use App\Photo;
use App\Spencerdining;
use App\Spencermenu;
use App\Spencerphoto;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        view()->composer('*',function($view) {
//            $view->with('dinings', Dining::all());
//        });

        view()->composer('*',function($view) {
            $view->with('photos', Photo::all());
        });

        view()->composer('*',function($view) {
            $view->with('spencerdinings', Spencerdining::all());
        });

        view()->composer('*',function($view) {
            $view->with('spencerphotos', Spencerphoto::all());
        });

        view()->composer('*',function($view) {
            $view->with('spencermenus', Spencermenu::all());
        });

    }
}
