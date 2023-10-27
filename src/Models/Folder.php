<?php

namespace Creode\LaravelFolderTaxonomy\Models;

use Creode\LaravelTaxonomy\Concerns\Parentable;
use Creode\LaravelTaxonomy\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;

class Folder extends Term
{
    use Parentable;

    /**
     * Machine name of the specific term to use.
     *
     * @var string
     */
    protected $machine_name = 'folders';

    /**
     * Fillable Properties for the model.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): Factory
    {
        return \Creode\LaravelFolderTaxonomy\Database\Factories\Folder::new();
    }
}
