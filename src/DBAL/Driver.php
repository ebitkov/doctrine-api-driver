<?php

namespace ebitkov\DoctrineApiDriver\DBAL;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver\API\ExceptionConverter;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use ebitkov\DoctrineApiDriver\DBAL\Platforms\ApiPlatform;
use ebitkov\DoctrineApiDriver\DBAL\Schema\ApiSchemaManager;
use SensitiveParameter;

class Driver implements \Doctrine\DBAL\Driver
{
    public function connect(
        #[SensitiveParameter] array $params
    ) {
        return new Driver\Connection();
    }

    public function getDatabasePlatform(): ApiPlatform
    {
        return new ApiPlatform();
    }

    public function getSchemaManager(Connection $conn, AbstractPlatform $platform): ApiSchemaManager
    {
        return new ApiSchemaManager($conn, $platform);
    }

    public function getExceptionConverter(): ExceptionConverter
    {
        return new API\ExceptionConverter();
    }
}
