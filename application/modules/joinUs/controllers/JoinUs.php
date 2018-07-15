<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JoinUs extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['baseConfig']['subTitle'] = 'Join Us';
        $this->layout_library
            ->setTitle('Join Us')
            ->view('index', $this->data);
    }
}
