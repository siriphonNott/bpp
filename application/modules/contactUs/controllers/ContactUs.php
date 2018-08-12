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
            ->setJavascript(config_item('assets') . 'js/pages/contactUs.js')
            ->view('index', $this->data);
    }

    public function LineNoti()
    {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        $token = "1D97H1PULcuzyLmXjamv4rg9LZLUHbGmnVRsGfvsYFM"; //ใส่Token ที่copy เอาไว้
        //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
        $time = date('d/m/Y H:i');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $mg = $this->input->post('message');

        $message = "\r\nTime: $time \r\n\r\n";
        $message .= "Name: $name\r\n";
        $message .= "📧 Email: $email\r\n";
        $message .= "📱 Phone: $phone\r\n";
        $message .= "💬 Message: $mg\r\n";

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
