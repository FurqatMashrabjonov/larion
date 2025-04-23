<?php

namespace Furqat\Larion\Commands;

use Illuminate\Console\Command;

class LarionCommand extends Command
{
    public $signature = 'larion';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
