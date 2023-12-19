<?php

namespace Creode\LaravelFolderTaxonomy;

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
