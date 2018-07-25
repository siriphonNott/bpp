<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
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
            ->setJavascript($this->config->item('assets') . 'js/pages/home.js')
            ->setJavascript($this->config->item('assets') . 'js//gmap.js')
            ->setJavascript("https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s")
            ->view('index', $this->data);
    }
}
