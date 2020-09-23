<?php

// 获取 token 成功
function get_access_token(){
    $url_t = 'https://aip.baidubce.com/oauth/2.0/token';

    $client_id = "***pLiS4";
    $client_secret = "***UO5";

    $body_t = array(
        "grant_type" => "client_credentials",//固定参数
        "client_id" => $client_id,
        "client_secret"=> $client_secret
    );

    $res_t = request_post($url_t, $body_t);
    

    $target = json_decode($res_t,true)['access_token'];

    return $target;
}

function request_post($url = '', $param = '')
{
    if (empty($url) || empty($param)) {
        return false;
    }

    $postUrl = $url;
    $curlPost = $param;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $postUrl);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    // 要求结果为字符串且输出到屏幕上
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    // post提交方式
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    // 运行curl
    $data = curl_exec($curl);
    curl_close($curl);

    return $data;
}

function request_post2($url = '', $param = '')
{
    if (empty($url) || empty($param)) {
        return false;
    }

    $postUrl = $url;
    $curlPost = $param;
    // 初始化curl
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $postUrl);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    // 要求结果为字符串且输出到屏幕上
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    // post提交方式
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    // 运行curl
    $data = curl_exec($curl);
    curl_close($curl);

    return $data;
}

$token = get_access_token();

// 人体关键点识别
// $base = 'https://aip.baidubce.com/rest/2.0/image-classify/v1/body_analysis';

// 人流量统计
$base = 'https://aip.baidubce.com/rest/2.0/image-classify/v1/body_num';

$url = $base . '?access_token=' . $token;

$imgurl = $_POST['imgurl'];

if(!$imgurl){
    return "图片为空";
}

$img = file_get_contents($imgurl);

// $img = file_get_contents('https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2639719003,692299984&fm=26&gp=0.jpg');

$img = base64_encode($img);
$bodys = array(
    'image' => $img
);
$res = request_post2($url, $bodys);

exit($res);

?>