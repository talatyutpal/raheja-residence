<?php
date_default_timezone_set('Asia/Kolkata');
$request = $_SERVER['REQUEST_METHOD'];

if ($request !== 'POST') {
    http_response_code(405);
    echo 'Method not allow';
    die;
}


// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
//header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$data = file_get_contents('php://input');
//$data = file_get_contents('data.json');
$json_post = json_decode($data, true);


//Data Filter Form FB response---
$fname = $json_post['fname'];
$email = $json_post['email'];
$mobile = $json_post['mobile'];
$source = $json_post['source'];
$tertiarysource = $json_post['tertiarysource'];
$secondarysource = $json_post['secondarysource'];
$cstm_ppc_placement = $json_post['cstm_ppc_placement'];
$cstm_ppc_device = $json_post['cstm_ppc_device'];
$cstm_ppc_keyword = $json_post['cstm_ppc_keyword'];


if ($fname == '' || $fname == null) {
    echo json_encode(
        array(
            "status" =>
            array(
                "statusCode" => 400,
                "message" => "Error- Name Field Missing"
            )
        )
    );
    http_response_code(400);
    return false;
}


if ($mobile == '' || $mobile == null) {
    echo json_encode(
        array(
            "status" =>
            array(
                "statusCode" => 400,
                "message" => "Error- Mobile Field Missing"
            )
        )
    );
    http_response_code(400);
    return false;
}

// API Integration-------

if (isset($mobile)) {

    $full_mob = '91 ' . $mobile;
    $otp_mob = $mobile;


    $postFields = "entry.449648499=" . $fname;
    $postFields .= "&entry.1432855629=";
    // $postFields .= "&entry.1379833540=" . $email;
    $postFields .= "&entry.758332158=" . $mobile;
    $postFields .= "&entry.1900106466=";
    $postFields .= "&entry.1693361781=" . $source;


    $postFields .= '&entry.1830911442=' . urlencode($tertiarysource); //campaign
    $postFields .= '&entry.939490048=' . urlencode($secondarysource); //channel
    $postFields .= '&entry.729166844=' . urlencode($cstm_ppc_keyword);
    $postFields .= '&entry.839903606=' . urlencode($cstm_ppc_placement);
    $postFields .= '&entry.2003337495=' . urlencode($cstm_ppc_device);


    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdyp-LqPfpJT-qV1a8Ch5l1LJspig3_YCwRrQ7n6D_0sdFPnw/formResponse");
    curl_setopt($ch1, CURLOPT_POST, 1);
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch1, CURLOPT_HEADER, 0);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    //print_r($hash);
    $result1 = curl_exec($ch1);


    //CRM IF ANY



    //Response Print
    echo json_encode(
        array(
            "status" =>
            array(
                "statusCode" => 200,
                "message" => "success"
            )
        )
    );
}
