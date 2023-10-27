<?php

it('can create a folder model', function () {
    $folder = \Creode\LaravelFolderTaxonomy\Models\Folder::create([
        'name' => 'Folder',
        'slug' => 'folder',
    ]);

    expect($folder->name)->toBe('Folder');
    expect($folder->slug)->toBe('folder');
});
