<?php

namespace Trapzpro\QuickLogger\Commands;

use Illuminate\Console\Command;

class QuickLoggerCommand extends Command
{
    public $signature = 'laravel-quick-logger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
