<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutUs extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['baseConfig']['subTitle'] = 'Home 2';
        $this->layout_library
            ->setTitle('TOWNHOME')
            ->view('index', $this->data);
    }
}
