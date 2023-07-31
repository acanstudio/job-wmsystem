<?php
declare(strict_types = 1);

namespace ModuleWmsystem\Services;

use Framework\Baseapp\Services\AbstractService as AbstractServiceBase;

abstract class AbstractService extends AbstractServiceBase
{
    protected function getAppcode()
    {
        return 'wmsystem';
    }
}
