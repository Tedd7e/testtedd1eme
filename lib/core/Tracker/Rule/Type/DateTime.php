<?php

namespace Tiki\Lib\core\Tracker\Rule\Type;

use Tiki\Lib\core\Tracker\Rule\Operator;

class DateTime extends Type
{
    public function __construct()
    {
        parent::__construct('DateTime');
    }
}