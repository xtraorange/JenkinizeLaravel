<?php

namespace YourNamespace\JenkinizeLaravel;

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
        // Here is where we will copy the Jenkinsfile and Dockerfile if they do not exist in the base path.
        if (!file_exists(base_path('Jenkinsfile'))) {
            copy(__DIR__.'/../Jenkinsfile', base_path('Jenkinsfile'));
        }

        if (!file_exists(base_path('Dockerfile'))) {
            copy(__DIR__.'/../Dockerfile', base_path('Dockerfile'));
        }

        if (!file_exists(base_path('jenkins.config'))) {
            copy(__DIR__.'/../Dockerfile', base_path('jenkins.config'));
        }
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
