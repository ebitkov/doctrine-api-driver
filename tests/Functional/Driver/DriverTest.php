<?php

namespace ebitkov\DoctrineApiDriver\Tests\Functional\Driver;

use Doctrine\DBAL\Driver;

class DriverTest extends AbstractDriverTestCase
{
    protected function createDriver(): Driver
    {
        return new \ebitkov\DoctrineApiDriver\DBAL\ApiDriver();
    }

    protected static function getDatabaseNameForConnectionWithoutDatabaseNameParameter(): ?string
    {
        return 'main';
    }
}
