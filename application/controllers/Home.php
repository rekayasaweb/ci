<?php
/**
 * Created by PhpStorm.
 * User: andry
 * Date: 6/20/2015
 * Time: 11:52 PM
 */

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('starter_template');
    }
}