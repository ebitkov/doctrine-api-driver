<?php

namespace ebitkov\DoctrineApiDriver\DBAL\Driver;

use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\DBAL\ParameterType;

class Connection implements \Doctrine\DBAL\Driver\Connection
{
    public function prepare(string $sql): Statement
    {
        // TODO: Implement prepare() method.
    }

    public function query(string $sql): Result
    {
        // TODO: Implement query() method.
    }

    public function quote($value, $type = ParameterType::STRING)
    {
        // TODO: Implement quote() method.
    }

    public function exec(string $sql): int
    {
        // TODO: Implement exec() method.
    }

    public function lastInsertId($name = null)
    {
        // TODO: Implement lastInsertId() method.
    }

    public function beginTransaction()
    {
        // TODO: Implement beginTransaction() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }

    public function rollBack()
    {
        // TODO: Implement rollBack() method.
    }

    public function getNativeConnection(): object
    {
        // TODO: Implement getNativeConnection() method.
    }
}
