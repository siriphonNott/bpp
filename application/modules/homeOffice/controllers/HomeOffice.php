<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeOffice extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['baseConfig']['subTitle'] = 'Home Office';
        $this->layout_library
            ->setTitle('Home Office')
            ->view('comingsoon', $this->data);
    }
}
