<?php

namespace Creode\LaravelFolderTaxonomy\Repositories;

use Creode\LaravelRepository\BaseRepository;

class FolderRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('folder-taxonomy.model');
    }
}
