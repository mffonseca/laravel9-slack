<?php

namespace Mfonseca\Slack;

use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Publish Config
        $this->publishes([
            __DIR__ . '/../config/slack.php' => config_path('slack.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register Facade
        $this->app->bind('mfonseca.slack', function ($app) {
            return new Slack;
        });
    }
}
