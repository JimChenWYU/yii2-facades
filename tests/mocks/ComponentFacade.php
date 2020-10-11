<?php

namespace jimchen\tests\facade\mocks;

use jimchen\facade\Facade;

/**
 * @method static mixed method(mixed $input = null)
 * @method static mixed getProperty()
 * @method static void setProperty(mixed $value)
 */
class ComponentFacade extends Facade
{
    public static function getFacadeComponentId()
    {
        return 'component';
    }
}
