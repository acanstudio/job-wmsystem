<?php

declare(strict_types = 1);

namespace ModuleWmsystem\Repositories;

class OrderShopDetailRepository extends AbstractRepository
{
    protected function _sceneFields()
    {
        return [
            'list' => ['id', 'orderid', 'goods_id', 'sku_id', 'goods_name', 'goods_price', 'price', 'number', 'money', 'created_at'],
            'listSearch' => ['id', 'name'],
            'add' => ['name'],
            'update' => ['name'],
        ];
    }

    public function getShowFields()
    {
        return [
            //'type' => ['valueType' => 'key'],
        ];
    }

    public function getSearchFields()
    {
        return [
            //'type' => ['type' => 'select'],
        ];
    }

    public function getFormFields()
    {
        return [
            //'type' => ['type' => 'select'],
        ];
    }

    protected function _statusKeyDatas()
    {
        return [
            0 => '未激活',
            1 => '使用中',
            99 => '锁定',
        ];
    }
}
