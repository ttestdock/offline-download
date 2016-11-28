<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Down extends CI_Controller {

    public function index()
    {
        $url = $this->input->get('url');
            shell_exec("wget -b -o /dev/null -O ./download/temp " . escapeshellarg($url));
            echo "success";
    }
}
