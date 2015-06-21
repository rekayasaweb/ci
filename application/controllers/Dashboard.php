<?php
/**
 * Created by PhpStorm.
 * User: andry
 * Date: 6/21/2015
 * Time: 12:28 AM
 */

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('dashboard_view');
    }
}