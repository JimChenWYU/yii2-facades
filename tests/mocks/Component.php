<?php

namespace jimchen\tests\facade\mocks;

use yii\base\BaseObject;

class Component extends BaseObject
{
    public $property = 'value';

    public function method($input = null)
    {
        return $input;
    }
}
