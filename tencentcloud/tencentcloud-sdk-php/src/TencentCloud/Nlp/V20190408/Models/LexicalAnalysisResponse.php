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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getNerTokens() 获取命名实体识别结果
 * @method void setNerTokens(array $NerTokens) 设置命名实体识别结果
 * @method array getPosTokens() 获取分词&词性标注结果
 * @method void setPosTokens(array $PosTokens) 设置分词&词性标注结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *LexicalAnalysis返回参数结构体
 */
class LexicalAnalysisResponse extends AbstractModel
{
    /**
     * @var array 命名实体识别结果
     */
    public $NerTokens;

    /**
     * @var array 分词&词性标注结果
     */
    public $PosTokens;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $NerTokens 命名实体识别结果
     * @param array $PosTokens 分词&词性标注结果
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NerTokens",$param) and $param["NerTokens"] !== null) {
            $this->NerTokens = [];
            foreach ($param["NerTokens"] as $key => $value){
                $obj = new NerToken();
                $obj->deserialize($value);
                array_push($this->NerTokens, $obj);
            }
        }

        if (array_key_exists("PosTokens",$param) and $param["PosTokens"] !== null) {
            $this->PosTokens = [];
            foreach ($param["PosTokens"] as $key => $value){
                $obj = new PosToken();
                $obj->deserialize($value);
                array_push($this->PosTokens, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
