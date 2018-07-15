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
        $this->data['baseConfig']['subTitle'] = 'Contact Us';
        $this->layout_library
            ->setTitle('Contact Us')
            ->view('index', $this->data);
    }
}
