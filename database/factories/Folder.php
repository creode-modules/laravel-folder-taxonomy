<?php

namespace Creode\LaravelFolderTaxonomy\Database\Factories;

use Creode\LaravelFolderTaxonomy\Models\Folder as FolderModel;
use Creode\LaravelTaxonomy\Database\Factories\TermFactory;

class Folder extends TermFactory
{
    protected $model = FolderModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
        ];
        // return parent::definition();
    }
}
