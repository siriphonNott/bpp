<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactUs extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // echo config_item('assets');
        // exit();
        $this->data['baseConfig']['subTitle'] = 'Contact Us';
        $this->layout_library
            ->setTitle('Contact Us')
            ->setStyleSheet(config_item('assets') . 'js/vendor/semantic/semantic.min.css')
            ->setJavascript(config_item('assets') . 'js/vendor/semantic/semantic.min.js')
            ->setJavascript(config_item('assets') . 'js/pages/contactUs.js')
            ->view('index', $this->data);
    }

    public function register()
    {
        $this->data['baseConfig']['subTitle'] = 'Contact Us';
        $this->layout_library
            ->setTitle('Contact Us')
            ->setStyleSheet(config_item('assets') . 'js/vendor/semantic/semantic.min.css')
            ->setStyleSheet(config_item('assets') . 'js/vendor/semantic/calendar.min.css')
            ->setStyleSheet('https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css')
            ->setJavascript(config_item('assets') . 'js/vendor/semantic/semantic.min.js')
            ->setJavascript(config_item('assets') . 'js/vendor/semantic/calendar.min.js')
            ->setJavascript(config_item('assets') . 'js/pages/register.js')
            ->view('register', $this->data);
    }

    public static function getContent($obj)
    {
        $time = date('d/m/Y H:i');
        if(empty($obj)) {
            $message = 'No Data';
       } else {
           $message = "\r\nTime: $time \r\n\r\n";
           $message .= "From: ".ucfirst($obj['type'])."\r\n\r\n";
           foreach ($obj as $key => $value) {
                if($key == 'type') continue;
                $message .= ucfirst($key).": $value\r\n";
           }
       }
       return $message;
    }

    public function LineNoti()
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        $token = "1D97H1PULcuzyLmXjamv4rg9LZLUHbGmnVRsGfvsYFM"; //ใส่Token ที่copy เอาไว้
        //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร

        $message = self::getContent($this->input->post());

        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData, '', '&');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "",
            CURLOPT_URL => LINE_API,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $queryData,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . $token,
                "cache-control: no-cache",
                "content-type: 	application/x-www-form-urlencoded",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

    }
}
