<?php
header("Access-Control-Allow-Origin: *");

require_once 'tencentcloud-sdk-php/TCloudAutoLoader.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Faceid\V20180301\FaceidClient;
use TencentCloud\Faceid\V20180301\Models\BankCard4EVerificationRequest;



try {

    // $name = $_POST['name'];
    // $bankcard = $_POST['bankcard'];
    // $phone = $_POST['phone'];
    // $idcard = $_POST['idcard'];

    $cred = new Credential("Your SecretId", "Your SecretKey");
    $httpProfile = new HttpProfile();
    $httpProfile->setEndpoint("faceid.tencentcloudapi.com");
      
    $clientProfile = new ClientProfile();
    $clientProfile->setHttpProfile($httpProfile);
    $client = new FaceidClient($cred, "ap-guangzhou", $clientProfile);

    $req = new BankCard4EVerificationRequest();

    // $params = '{"Name":"' . $name . '","BankCard":"' . $bankcard . '","Phone":"' . $phone . '","IdCard":"' . $idcard . '"}'

    $params= $_POST['params'];

    $req->fromJsonString($params);


    $resp = $client->BankCard4EVerification($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
