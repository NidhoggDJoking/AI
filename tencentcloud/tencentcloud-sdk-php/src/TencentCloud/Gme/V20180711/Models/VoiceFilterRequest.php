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
 * @method string getFileId() 获取文件id，表示文件唯一id
 * @method void setFileId(string $FileId) 设置文件id，表示文件唯一id
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileUrl() 获取文件内容url，FileUrl和FileContent二选一
 * @method void setFileUrl(string $FileUrl) 设置文件内容url，FileUrl和FileContent二选一
 * @method string getFileContent() 获取文件内容，base64编码，FileUrl和FileContent二选一
 * @method void setFileContent(string $FileContent) 设置文件内容，base64编码，FileUrl和FileContent二选一
 * @method string getOpenId() 获取用户id
 * @method void setOpenId(string $OpenId) 设置用户id
 */

/**
 *VoiceFilter请求参数结构体
 */
class VoiceFilterRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $BizId;

    /**
     * @var string 文件id，表示文件唯一id
     */
    public $FileId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件内容url，FileUrl和FileContent二选一
     */
    public $FileUrl;

    /**
     * @var string 文件内容，base64编码，FileUrl和FileContent二选一
     */
    public $FileContent;

    /**
     * @var string 用户id
     */
    public $OpenId;
    /**
     * @param integer $BizId 应用id
     * @param string $FileId 文件id，表示文件唯一id
     * @param string $FileName 文件名
     * @param string $FileUrl 文件内容url，FileUrl和FileContent二选一
     * @param string $FileContent 文件内容，base64编码，FileUrl和FileContent二选一
     * @param string $OpenId 用户id
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
