<?php

namespace ebitkov\DoctrineApiDriver\Tests;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\MissingMappingDriverImplementation;
use Doctrine\ORM\ORMSetup;
use ebitkov\DoctrineApiDriver\DBAL\ApiDriver;
use PHPUnit\Framework\TestCase;

abstract class ApiTestCase extends TestCase
{
    /**
     * @throws MissingMappingDriverImplementation
     * @throws Exception
     */
    protected function getEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . '/Fixtures/API'],
            isDevMode: true,
        );

        $connection = DriverManager::getConnection([
            'driverClass' => ApiDriver::class,
        ], $config);

       return new EntityManager($connection, $config);
    }
}
