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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getBizId() 获取应用id
 * @method void setBizId(integer $BizId) 设置应用id
 * @method string getStartDate() 获取开始时间，格式为 年-月-日，如: 2018-07-11
 * @method void setStartDate(string $StartDate) 设置开始时间，格式为 年-月-日，如: 2018-07-11
 * @method string getEndDate() 获取结束时间，格式为 年-月-日，如: 2018-07-11
 * @method void setEndDate(string $EndDate) 设置结束时间，格式为 年-月-日，如: 2018-07-11
 * @method integer getOffset() 获取偏移量, 默认0
 * @method void setOffset(integer $Offset) 设置偏移量, 默认0
 * @method integer getLimit() 获取限制数目	, 默认10, 最大100
 * @method void setLimit(integer $Limit) 设置限制数目	, 默认10, 最大100
 */

/**
 *DescribeFilterResultList请求参数结构体
 */
class DescribeFilterResultListRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $BizId;

    /**
     * @var string 开始时间，格式为 年-月-日，如: 2018-07-11
     */
    public $StartDate;

    /**
     * @var string 结束时间，格式为 年-月-日，如: 2018-07-11
     */
    public $EndDate;

    /**
     * @var integer 偏移量, 默认0
     */
    public $Offset;

    /**
     * @var integer 限制数目	, 默认10, 最大100
     */
    public $Limit;
    /**
     * @param integer $BizId 应用id
     * @param string $StartDate 开始时间，格式为 年-月-日，如: 2018-07-11
     * @param string $EndDate 结束时间，格式为 年-月-日，如: 2018-07-11
     * @param integer $Offset 偏移量, 默认0
     * @param integer $Limit 限制数目	, 默认10, 最大100
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
