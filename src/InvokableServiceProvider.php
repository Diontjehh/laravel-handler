<?php

namespace Diontjehh\Invokable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Diontjehh\Invokable\Commands\InvokableCommand;

class InvokableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('invokable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_invokable_table')
            ->hasCommand(InvokableCommand::class);
    }
}
