<?php

declare(strict_types = 1);

namespace ModuleWmsystem\Observers;

use ModuleWmsystem\Models\Demo;

class DemoObserver
{
    public function deleting(Demo $model)
    {
        //return $model->canDelete();
    }
}
