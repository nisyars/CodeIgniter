<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {
  public function __construct()
  {
    parent ::__construct();
    $this->load->model('web'); //panggil model
  }

  public function index ()
  {
    $data = array(
      'title'               => 'Data Mahasiswa',
      'data_mahasiswa'     => $this->web->get_all_mahasiswa()
    );
    $this->load->view('home',$data);
  }
}
