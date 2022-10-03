<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{

      public function __construct()
      {
        parent::__construct();
        $this->load->library('form_validation');
      }

      public function index()
      {
        $this->load->model('menu_model', 'menu');

        $data['sell'] = $this->menu->getproduct();
        $data['menu'] = $this->db->get('user_sell')->result_array();

        $data['title'] = 'Jahitin aja';
        $this->load->view('templates/shop-index_header', $data);
        $this->load->view('templates/shop-index_topbar', $data);
        $this->load->view('auth/shop-index');
        $this->load->view('templates/shop-index_prefooter');
        $this->load->view('templates/shop-index_footer');
      }

      public function login(){

        if ($this->session->userdata('email')) {
          redirect('shop_user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
          $data['title'] = 'Masuk | Jahitin aja';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/login');
          $this->load->view('templates/auth_footer');
        } else {
          $this->_login();
        }
      }

      private function _login()
      {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
          if ($user['is_active'] == 1){
            if (password_verify($password, $user['password'])) {
              $data = [
                'email' => $user['email'],
                'role_id' => $user['role_id']
              ];
              $this->session->set_userdata($data);
              if ($user['role_id'] == 1){
                redirect('admin');
              }
              else{
                redirect('shop_user');
              }
            }
            else {
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
              redirect('auth/login');
            }
          }
          else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi</div>');
            redirect('auth/login');
          }
        }
        else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
          redirect('auth/login');
        }
      }

      public function registration()
      {
        if ($this->session->userdata('email')) {
          redirect('user');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
          'required' => 'Nama lengkap harus diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
          'required' => 'E-mail harus diisi',
          'valid_email' => 'Masukkan E-mail yang valid',
          'is_unique' => 'Email ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
          'required' => 'Password harus diisi',
          'matches' => 'Password tidak cocok',
          'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if( $this->form_validation->run() == false){
          $data['title'] = 'Daftar | Jahitin aja';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/registration');
          $this->load->view('templates/auth_footer');
        }
        else {
          $email = $this->input->post('email', true);
          $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 0,
            'date_created' => time()
          ];

          //siapkan token
          $token = base64_encode(random_bytes(32));
          $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
          ];

          $this->db->insert('user', $data);
          $this->db->insert('user_token', $user_token);

          $this->_sendEmail($token, 'verify');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda berhasil didaftarkan. Silahkan cek email anda untuk aktivasi</div>');
          redirect('auth/login');
        }

      }

      private function _sendEmail($token, $type)
      {
        $config = [
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_user' => 'jahitinaja101@gmail.com',
          'smtp_pass' => 'jahitinaja1234',
          'smtp_port' => 465,
          'mailtype'  => 'html',
          'charset'   => 'utf-8',
          'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('jahitinaja101@gmail.com', 'Jahitin aja');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
          $this->email->subject('Verifikasi Akun');
          $this->email->message('Klik link berikut untuk verifikasi email anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan<a>');
        }
        else if($type == 'forgot'){
          $this->email->subject('Reset Password');
          $this->email->message('Klik link berikut untuk reset password anda : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password<a>');
        }

        if($this->email->send()) {
          return true;
        }
        else {
          echo $this->email->print_debugger();
          die;
        }
      }

      public function verify()
      {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
          $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
          if($user_token) {
            if(time() - $user_token['date_created'] < (60*60*24)) {
              $this->db->set('is_active', 1);
              $this->db->where('email', $email);
              $this->db->update('user');

              $this->db->delete('user_token', ['email' => $email]);

              $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email . ' berhasil diaktivasi! Silahkan Login.</div>');
              redirect('auth/login');
            }
            else {

              $this->db->delete('user', ['email' => $email]);
              $this->db->delete('user_token', ['email' => $email]);

              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kadaluarsa</div>');
              redirect('auth/login');
            }
          }
          else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token salah</div>');
            redirect('auth/login');
          }
        }
        else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Email salah</div>');
          redirect('auth/login');
        }
      }

      public function logout()
      {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
        redirect('auth/login');
      }

      public function blocked()
      {
        $this->load->view('auth/blocked');
      }

      public function forgotPassword()
      {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
          $data['title'] = 'Lupa Password | Jahitin aja';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/forgot-password');
          $this->load->view('templates/auth_footer');
        }
        else {
          $email = $this->input->post('email');
          $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

          if ($user) {
            $token = base64_encode(random_bytes(32));
            $user_token = [
              'email' => $email,
              'token' => $token,
              'date_created' => time()
            ];

            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token, 'forgot');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan cek email anda untuk reset password</div>');
            redirect('auth/forgotPassword');
          }
          else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar atau belum aktif</div>');
            redirect('auth/forgotPassword');
          }

        }

      }

      public function resetPassword()
      {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
          $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
          if ($user_token){
            $this->session->set_userdata('reset_email', $email);
            $this->changePassword();
          }
          else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! token salah</div>');
            redirect('auth/login');
          }
        }
        else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! email salah</div>');
          redirect('auth/login');
        }
      }

      public function changePassword()
      {
        if (!$this->session->userdata('reset_email')) {
          redirect('auth/login');
        }
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'trim|required|min_length[3]|matches[password1]');
        if ($this->form_validation->run() == false) {
          $data['title'] = 'Ubah Password | Jahitin aja';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/change-password');
          $this->load->view('templates/auth_footer');
        }
        else {
          $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
          $email = $this->session->userdata('reset_email');

          $this->db->set('password', $password);
          $this->db->where('email', $email);
          $this->db->update('user');

          $this->session->unset_userdata('reset_email');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah! Silahkan login</div>');
          redirect('auth/login');
        }

      }
}
