<?php

namespace Furqat\Larion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Furqat\Larion\Commands\LarionCommand;

class LarionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
         dd('hello from package');
        $package
            ->name('larion')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larion_table')
            ->hasCommand(LarionCommand::class);
    }
}
