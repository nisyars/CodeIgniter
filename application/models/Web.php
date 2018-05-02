<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Model
{
  public function get_all_mahasiswa()
  {
  $query = $this->db->order_by('NIM','DESC')->get('mahasiswa');
  return $query->result();
  }
}
