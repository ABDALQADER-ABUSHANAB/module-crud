<?php

namespace abdalqader\crudcommand\Laravel;

use abdalqader\crudcommand\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
