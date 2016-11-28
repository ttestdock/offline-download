<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Down extends CI_Controller {

    public function index()
    {
        $url = $this->input->get('url');
