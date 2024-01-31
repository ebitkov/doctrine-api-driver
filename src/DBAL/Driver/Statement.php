<?php

namespace ebitkov\DoctrineApiDriver\DBAL\Driver;

use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\ParameterType;

class Statement implements \Doctrine\DBAL\Driver\Statement
{

    public function bindValue($param, $value, $type = ParameterType::STRING)
    {
        // TODO: Implement bindValue() method.
    }

    public function bindParam($param, &$variable, $type = ParameterType::STRING, $length = null)
    {
        // TODO: Implement bindParam() method.
    }

    public function execute($params = null): Result
    {
        // TODO: Implement execute() method.
    }
}
