<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Down extends CI_Controller {

    public function index()
    {
        $url = $this->input->get('url');
            shell_exec("wget -b -nc -o /dev/null --restrict-file-names=nocontrol -P ./download " . escapeshellarg($url));
            echo "success";
    }
}
