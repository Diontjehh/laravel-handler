<?php

namespace Diontjehh\Handler;

use Diontjehh\Handler\Commands\MakeActionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HandlerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('handler')
            ->hasCommands([
                MakeActionCommand::class,
            ]);
    }
}
