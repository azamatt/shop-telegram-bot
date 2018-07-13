<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SchemaIOServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {       
        $this->app->bind(Client::class, function (){
            $config = config('services.schema_io');
            
            return new Client($config['id'], $config['secret']);
        });
    }
}
