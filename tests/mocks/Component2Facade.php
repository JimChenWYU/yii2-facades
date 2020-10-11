<?php

namespace jimchen\tests\facade\mocks;

class Component2Facade extends ComponentFacade
{
    public static function getFacadeComponentId()
    {
        return 'component2';
    }
}
