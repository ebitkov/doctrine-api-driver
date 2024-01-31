<?php

namespace ebitkov\DoctrineApiDriver\DBAL\API;

use Doctrine\DBAL\Driver\Exception;
use Doctrine\DBAL\Exception\DriverException;
use Doctrine\DBAL\Query;

class ExceptionConverter implements \Doctrine\DBAL\Driver\API\ExceptionConverter
{
    public function convert(Exception $exception, ?Query $query): DriverException
    {
        // TODO: Implement convert() method.
    }
}
