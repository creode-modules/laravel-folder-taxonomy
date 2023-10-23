<?php

namespace Creode\LaravelFolderTaxonomy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Creode\LaravelFolderTaxonomy\LaravelFolderTaxonomy
 */
class LaravelFolderTaxonomy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Creode\LaravelFolderTaxonomy\LaravelFolderTaxonomy::class;
    }
}
