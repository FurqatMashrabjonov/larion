<?php

namespace Furqat\Larion;

use Furqat\Larion\Commands\LarionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
