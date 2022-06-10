<!-- *6 -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // echo 'Selamat datang ' . $data['user']['name'];

    // *8
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    // *8 lanjut ke bawah

    $this->load->view('user/index', $data);

    // *8 lanjutan dari atas
    $this->load->view('templates/footer');
    // *8 end
  }
}
// *6