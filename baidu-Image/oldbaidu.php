<?php
/**
 * 通过上传到服务器的图片路径进行图片识别
 * 发起http post请求(REST API), 并获取REST请求的结果
 * @param string $url
 * @param string $param
 * @return - http response body if succeeds, else false.
 */
function request_post($url = '', $param = '')
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
function get_access_token(){
    $url_t = 'https://aip.baidubce.com/oauth/2.0/token';

    $client_id = "你的 Api Key";
    $client_secret = "你的 Secret Key";

    $body_t = array(
        "grant_type" => "client_credentials",//固定参数
        "client_id" => $client_id,
        "client_secret"=> $client_secret
    );

    $res_t = request_post($url_t, $body_t);
    
    $target = json_decode($res_t,true)['access_token'];

    return $target;
}

$imgurl = $_GET['imgurl'];
//保护隐私和安全路径会被fakepath替代(无论服务器还是客户端)
//imgurl 为 上传在服务器上图片的路径
$token = get_access_token();
$url = 'https://aip.baidubce.com/rest/2.0/ocr/v1/idcard?access_token=' . $token;
$img = file_get_contents($imgurl);

$img = base64_encode($img);
$id_card_side ="front";

    $bodys = array(
        "image" => $img,
        "id_card_side" =>$id_card_side
    );
$res = request_post($url, $bodys);

var_dump($res);
