<?php

namespace Diontjehh\Handler\Facades;

use Illuminate\Support\Facades\Facade;

class Handler extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'handler';
    }
}
