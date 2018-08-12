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
}
