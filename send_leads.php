<?php

class PostData
{
    public function callback()
    {

        $channel = $_COOKIE['cstm_ppc_channel'];
        $campaign = $_COOKIE['cstm_ppc_campaign'];
        $placement = $_COOKIE['cstm_ppc_placement'];
        $keyword = $_COOKIE['cstm_ppc_keyword'];
        $device = $_COOKIE['cstm_ppc_device'];
        $gclid = $_COOKIE['gclid'];

        $ip = $_SERVER['REMOTE_ADDR'];

        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $mobile = str_replace(' ', '', $_REQUEST['mobile']);
        //$projectname = $_REQUEST['projectname'];
        $source = $_REQUEST['source'];
        $message = $_REQUEST['message'];
        //$country_code = $_REQUEST['country_code'];
        $name = $fname . ' ' . $lname;

        $fullmobile = "91" . $mobile;
        
        

        // Google Sheet Interation------------------


        
        $postFields = "entry.449648499=" . $name;
        $postFields .= "&entry.1379833540=" . $email;
        $postFields .= "&entry.758332158=" . $fullmobile;
        $postFields .= "&entry.1900106466=" . $message;
        $postFields .= "&entry.1693361781=" . $source;
        

        $postFields .= '&entry.1830911442=' . urlencode($_COOKIE['cstm_ppc_campaign']);
        $postFields .= '&entry.939490048=' . urlencode($_COOKIE['cstm_ppc_channel']);
        $postFields .= '&entry.729166844=' . urlencode($_COOKIE['cstm_ppc_keyword']);
        $postFields .= '&entry.839903606=' . urlencode($_COOKIE['cstm_ppc_placement']);
        $postFields .= '&entry.2003337495=' . urlencode($_COOKIE['cstm_ppc_device']);
        $postFields .= '&entry.399907321=' . urlencode($_COOKIE['cstm_ppc_medium']);
        $postFields .= '&entry.1966964226=' . urlencode($_COOKIE['gclid']);
        $postFields .= '&entry.2132069230=' . $ip;

        $ch3 = curl_init();
        curl_setopt($ch3, CURLOPT_URL, "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfS2gdCtL87Qtb3rW3WgnauhjX4rzwnENtU1utA42Kf41HsSw/formResponse");
        curl_setopt($ch3, CURLOPT_POST, 1);
        curl_setopt($ch3, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch3, CURLOPT_HEADER, 0);
        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
        $result3 = curl_exec($ch3);



        // do not delete
        return true;
    }
}