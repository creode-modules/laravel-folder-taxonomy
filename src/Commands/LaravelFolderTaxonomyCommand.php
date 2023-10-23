<?php

namespace Creode\LaravelFolderTaxonomy\Commands;

use Illuminate\Console\Command;

class LaravelFolderTaxonomyCommand extends Command
{
    public $signature = 'laravel-folder-taxonomy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
