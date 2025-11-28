<?php

namespace Diontjehh\Invokable\Facades;

use Illuminate\Support\Facades\Facade;

class Invokable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Invokable::class;
    }
}
