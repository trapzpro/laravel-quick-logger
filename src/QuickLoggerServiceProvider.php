<?php

namespace Trapzpro\QuickLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Trapzpro\QuickLogger\Commands\QuickLoggerCommand;

class QuickLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-quick-logger')
            ->hasConfigFile()
            //->hasViews()
            ->hasMigration('create_notes_table')
            // ->hasCommand(QuickLoggerCommand::class)
        ;
    }
}