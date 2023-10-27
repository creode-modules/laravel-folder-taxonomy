<?php

namespace Creode\LaravelFolderTaxonomy\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Creode\LaravelFolderTaxonomy\LaravelFolderTaxonomyServiceProvider;
use Creode\LaravelTaxonomy\LaravelTaxonomyServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $migration = include __DIR__.'/../database/migrations/create_folder_taxonomy_table.php.stub';
        $migration->up();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Creode\\LaravelFolderTaxonomy\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTaxonomyServiceProvider::class,
            LaravelFolderTaxonomyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $app->register(LaravelTaxonomyServiceProvider::class);
    }
}
