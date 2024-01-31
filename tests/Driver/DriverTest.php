<?php

namespace ebitkov\DoctrineApiDriver\Tests\Driver;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\API\ExceptionConverter;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use ebitkov\DoctrineApiDriver\DBAL\Platforms\ApiPlatform;
use ebitkov\DoctrineApiDriver\DBAL\Schema\ApiSchemaManager;

class DriverTest extends AbstractDriverTestCase
{
    protected function createDriver(): Driver
    {
        return new \ebitkov\DoctrineApiDriver\DBAL\ApiDriver();
    }

    protected function createSchemaManager(Connection $connection): AbstractSchemaManager
    {
        return new ApiSchemaManager(
            $connection,
            $this->createPlatform()
        );
    }

    protected function createPlatform(): AbstractPlatform
    {
        return new ApiPlatform();
    }

    protected function createExceptionConverter(): ExceptionConverter
    {
        return new \ebitkov\DoctrineApiDriver\DBAL\API\ExceptionConverter();
    }
}
