<?php

namespace Creode\LaravelFolderTaxonomy;

use Creode\LaravelFolderTaxonomy\Commands\LaravelFolderTaxonomyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelFolderTaxonomyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-folder-taxonomy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-folder-taxonomy_table')
            ->hasCommand(LaravelFolderTaxonomyCommand::class);
    }
}
