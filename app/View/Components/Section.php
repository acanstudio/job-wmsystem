<?php

namespace App\View\Components;

use ModuleInfocms\Services\CategoryService;

class Section extends AbstractView
{
    public function getView()
    {
        return $this->params['module'] . '.' . $this->params['section'];
    }

    public function getDatas()
    {
        $datas = parent::getDatas();
        $section = $this->params['section'];
        if ($section == 'nav') {
            $data['nav'] = $this->getNavDatas();
        }
        return $datas;
    }

    public function getNavDatas()
    {
        //$
    }
}
