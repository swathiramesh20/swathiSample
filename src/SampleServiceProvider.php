<?php
/**
 * Created by PhpStorm.
 * User: dckap
 * Date: 7/9/19
 * Time: 11:09 AM
 */
namespace Swathi\Sample;
use \Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
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
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'customViews');
        $this->publishes([
            __DIR__.'/config/sampleConfig.php' => config_path('sampleConfig.php')
        ]);
    }
}