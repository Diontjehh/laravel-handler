<?php

namespace Diontjehh\Invokable\Commands;

use Illuminate\Console\Command;

class InvokableCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
