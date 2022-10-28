<?php

namespace Spatie\HorizonWatcher;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\HorizonWatcher\Commands\WatchHorizonCommand;

class HorizonWatcherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-horizon-watcher')
            ->hasConfigFile()
            ->hasCommand(WatchHorizonCommand::class);
    }
}
