<?php

namespace Diontjehh\Invokable;

use Illuminate\Support\Fluent;

abstract class Invokable 
{
    abstract function handle();

    public static function make()
    {
        return app(static::class);
    }

    public static function run(mixed ...$arguments): mixed
    {
        return static::make()->handle(...$arguments);
    }

    public static function runIf(bool $boolean, mixed ...$arguments): mixed
    {
        return $boolean ? static::run(...$arguments) : new Fluent();
    }

    public static function runUnless(bool $boolean, mixed ...$arguments): mixed
    {
        return static::runIf(! $boolean, ...$arguments);
    }

}
