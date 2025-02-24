<?php
header("Access-Control-Allow-Origin: *");
/**
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

    // var_dump($target);
    return $target;
}

    //上面的方法不用动直接可以用的

    // 可以直接用base64编码的图片

    // $imgurl = $_GET['imgurl'];

    // $imgurl为服务器图片路径

    $imgurl = $_POST['imgurl'];
    if(!$imgurl){
        return "empty image";
    }

    $token = get_access_token();
    $url = 'https://aip.baidubce.com/rest/2.0/ocr/v1/idcard?access_token=' . $token;
    // $img = urlencode($imgurl);//base64编码后进行urlencode
    $img = file_get_contents($imgurl);
    $img = base64_encode($img);

    $id_card_side ="front";
    // echo urlencode($imgurl);
    $bodys = array(
        "image" => $img,
        "id_card_side" =>$id_card_side
    );
    $res = request_post($url, $bodys);

    $data =json_decode($res,true);

    // var_dump($data);

    // var_dump($data["words_result"]);

    $identity_front = array(
        'idcard' =>$data["words_result"]['公民身份号码']['words'],
        'name' =>$data["words_result"]['姓名']['words'],
        'sex' =>$data["words_result"]['性别']['words'],
        'birth' =>$data["words_result"]['出生']['words'],
        'address' =>$data["words_result"]['住址']['words'],
        'nation' =>$data["words_result"]['民族']['words']
    );

    // var_dump($identity);

    // $json = json_encode($identity);
    echo json_encode($identity_front);
?>

