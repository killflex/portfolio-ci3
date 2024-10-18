<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa');
    }
    
	public function index()
	{
        $data['mhs'] = $this->M_mahasiswa->get_data();
		$this->load->view('mahasiswa/v_mahasiswa', $data);
	}

    public function tambah()
    {
        $data = $this->input->post();
        $this->M_mahasiswa->insert_data($data);
        redirect('mahasiswa');
    }

    public function edit($nrp)
    {
        $data['mhs'] = $this->M_mahasiswa->get_data_by_id($nrp);
        $this->load->view('mahasiswa/v_edit', $data);
    }

    public function update()
    {
        $nrp = $this->input->post('nrp');
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat')
        );

        $this->M_mahasiswa->update_data($nrp, $data);
        redirect('mahasiswa');
    }

    public function hapus($nrp)
    {
        $this->M_mahasiswa->delete_data($nrp);
        redirect('mahasiswa');
    }
}
