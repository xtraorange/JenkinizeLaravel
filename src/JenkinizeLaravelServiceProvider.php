<?php

namespace Xtraorange\JenkinizeLaravel;

use Illuminate\Support\ServiceProvider;


class JenkinizeLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/Jenkinsfile' => base_path('Jenkinsfile'),
        ], 'jenkinsfile');

        $this->publishes([
            __DIR__.'/../resources/jenkinize.config' => base_path('jenkinize.config'),
        ], 'jenkinize-config');

        $this->publishes([
            __DIR__.'/../resources/docker-jenkins' => base_path('docker')
        ], 'docker');

        $this->publishes([
            __DIR__.'/../resources/docker-jenkins' => base_path('docker-jenkins')
        ], 'docker-jenkins');

     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
