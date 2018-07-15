<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PreviousProject extends MY_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['baseConfig']['subTitle'] = 'Previous Project';
        $this->layout_library
            ->setTitle('Previous Project')
            ->view('index', $this->data);
    }

    public function portfolio()
    {
        $project = rawurldecode($this->uri->segment(3));
        $this->data['baseConfig']['subTitle'] = 'Previous Project';
        $this->data['baseConfig']['project'] = $project;
        $this->layout_library
            ->setTitle('Project xxx')
            ->view('portfolio', $this->data);
    }
}
