<?php 

class M_mahasiswa extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_data()
    {
        return $this->db->get('mhs')->result_array();
    }

    public function insert_data($data)
    {
        return $this->db->insert('mhs', $data);
    }

    public function get_data_by_id($nrp)
    {
        $query = "SELECT * FROM mhs WHERE nrp = ?";
        return $this->db->query($query, array($nrp))->result_array();
    }

    public function update_data($nrp, $data)
    {
        $this->db->where('nrp', $nrp);
        $this->db->set($data);
        $this->db->update('mhs');
    }

    public function delete_data($nrp)
    {
        $this->db->where('nrp', $nrp);
        $this->db->delete('mhs');
    }
}

?>