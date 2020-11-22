x   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JoinDropController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('JoinDropModel');
        
    }

    

    public function simpanalamat(){
        $this->load->model('JoinDropModel');
        
        $id= 1;
        $name= $this->input->post('nama');
        $address= $this->input->post('alamat');
        $city= $this->input->post('kota');
        //$state =$this->input->post('provinsi');
        $state ='Bandung';
        $postalcode =$this->input->post('kode_pos');
        $phonenum =$this->input->post('nomor_hp');
        $table2 = 'address';

        $data_insert = array (
            'id' => $id,
            'nama' => $name,
            'alamat' => $address,
            'kota' => $city,
            'provinsi' => $state,
            'kode_pos' => $postalcode,
            'nomor_hp' => $phonenum
        );
        $simpanalamat = $this->JoinDropModel->tambahalamat($table2, $data_insert);
        redirect('home');
    }
        
}


