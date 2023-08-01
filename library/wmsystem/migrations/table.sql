
CREATE TABLE `wms_statistic_workstation_day` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `record_day` date DEFAULT NULL COMMENT '日期'
  `workstation_id` int NOT NULL DEFAULT '0' COMMENT '员工ID',
  `order_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '订单数',
  `pick_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '捡单数',
  `putin_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '入库单数',
  `pick_material_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '出库物料数',
  `putin_material_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '入库物料数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工作站每日统计';
ALTER TABLE `wms_statistic_workstation_day`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_statistic_workstation_day`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';


CREATE TABLE `wms_statistic_teamwork_day` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `record_day` date DEFAULT NULL COMMENT '日期'
  `teamwork_id` int NOT NULL DEFAULT '0' COMMENT '员工ID',
  `order_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '订单数',
  `pick_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '捡单数',
  `putin_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '入库单数',
  `pick_material_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '出库物料数',
  `putin_material_num` smallint(5) NOT NULL DEFAULT '0' COMMENT '入库物料数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='作业人员每日统计';
ALTER TABLE `wms_statistic_teamwork_day`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_statistic_teamwork_day`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';


CREATE TABLE `wms_task_putout` (
  `id` int UNSIGNED NOT NULL COMMENT 'ID',
  `warehouse_id` int NOT NULL DEFAULT '0' COMMENT '仓库',
  `code` varchar(30) NOT NULL DEFAULT '' COMMENT '代码',
  `sort` varchar(30) NOT NULL DEFAULT '' COMMENT '类型',
  `workstation_code` varchar(30) NOT NULL DEFAULT '' COMMENT '工作站',
  `orderid_putout` varchar(30) NOT NULL DEFAULT '' COMMENT '入库单号',
  `operator_name` varchar(30) NOT NULL DEFAULT '' COMMENT '操作人名称',
  `operator_uid` varchar(30) NOT NULL DEFAULT '' COMMENT '操作人ID',
  `created_at` int UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB COMMENT='入库单';
ALTER TABLE `wms_task_putout`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_task_putout`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

CREATE TABLE `wms_task_putout_detail` (
  `id` int UNSIGNED NOT NULL COMMENT 'ID',
  `orderid_putout` varchar(30) NOT NULL DEFAULT '' COMMENT '入库单号',
  `locker_code` varchar(30) NOT NULL DEFAULT '' COMMENT '料箱代码',
  `material_id` int NOT NULL DEFAULT '0' COMMENT '物料-ID',
  `inventory` int NOT NULL DEFAULT '0' COMMENT '数量',
  `inventory_correct` int NOT NULL DEFAULT '0' COMMENT '修正库存',
  `created_at` int UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB COMMENT='入库物料';
ALTER TABLE `wms_task_putout_detail`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_task_putout_detail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';


CREATE TABLE `wms_task_enventory` (
  `id` int UNSIGNED NOT NULL COMMENT 'ID',
  `warehouse_id` int NOT NULL DEFAULT '0' COMMENT '仓库',
  `code` varchar(30) NOT NULL DEFAULT '' COMMENT '代码',
  `sort` varchar(30) NOT NULL DEFAULT '' COMMENT '类型',
  `workstation_code` varchar(30) NOT NULL DEFAULT '' COMMENT '工作站',
  `orderid_enventory` varchar(30) NOT NULL DEFAULT '' COMMENT '入库单号',
  `operator_name` varchar(30) NOT NULL DEFAULT '' COMMENT '操作人名称',
  `operator_uid` varchar(30) NOT NULL DEFAULT '' COMMENT '操作人ID',
  `created_at` int UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB COMMENT='盘点任务';
ALTER TABLE `wms_task_enventory`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_task_enventory`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

CREATE TABLE `wms_task_enventory_detail` (
  `id` int UNSIGNED NOT NULL COMMENT 'ID',
  `orderid_inventory` varchar(30) NOT NULL DEFAULT '' COMMENT '入库单号',
  `locker_code` varchar(30) NOT NULL DEFAULT '' COMMENT '料箱代码',
  `material_id` int NOT NULL DEFAULT '0' COMMENT '物料-ID',
  `inventory` int NOT NULL DEFAULT '0' COMMENT '数量',
  `inventory_correct` int NOT NULL DEFAULT '0' COMMENT '修正库存',
  `created_at` int UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB COMMENT='盘点任务明细';
ALTER TABLE `wms_task_enventory_detail`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `wms_task_enventory_detail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';
