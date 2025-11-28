<?php

namespace Diontjehh\Handler\Concerns;

use Closure;
use Illuminate\Support\Fluent;
use Throwable;

trait HasHandler
{
    public static function make(): static
    {
        return app(static::class);
    }

    public static function run(mixed ...$arguments): mixed
    {
        return static::make()->handle(...$arguments);
    }

    public static function runIf(bool|Closure $condition, mixed ...$arguments): mixed
    {
        $shouldRun = $condition instanceof Closure ? $condition() : $condition;
        
        return $shouldRun ? static::run(...$arguments) : new Fluent();
    }

    public static function runUnless(bool|Closure $condition, mixed ...$arguments): mixed
    {
        $shouldNotRun = $condition instanceof Closure ? $condition() : $condition;
        
        return static::runIf(!$shouldNotRun, ...$arguments);
    }

    public static function tryRun(mixed ...$arguments): mixed
    {
        try {
            return static::run(...$arguments);
        } catch (Throwable $e) {
            report($e);
            return null;
        }
    }

    public static function runWhen(mixed $value, mixed ...$arguments): mixed
    {
        return filled($value) ? static::run(...$arguments) : new Fluent();
    }

    public static function runOr(mixed $fallback, mixed ...$arguments): mixed
    {
        try {
            return static::run(...$arguments);
        } catch (Throwable $e) {
            report($e);
            return value($fallback);
        }
    }
}