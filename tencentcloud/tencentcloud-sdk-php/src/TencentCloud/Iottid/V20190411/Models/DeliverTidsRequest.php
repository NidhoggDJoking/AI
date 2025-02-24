<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method integer getQuantity() 获取数量，1~10
 * @method void setQuantity(integer $Quantity) 设置数量，1~10
 */

/**
 *DeliverTids请求参数结构体
 */
class DeliverTidsRequest extends AbstractModel
{
    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var integer 数量，1~10
     */
    public $Quantity;
    /**
     * @param string $OrderId 订单ID
     * @param integer $Quantity 数量，1~10
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }
    }
}
