<?php
namespace Tanren1234\Weather;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/4 0004
 * Time: 18:18
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    protected $defer = true;

    public function register() {

        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}