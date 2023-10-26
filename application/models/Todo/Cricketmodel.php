<?php
class Cricketmodel extends CI_Model
{
    public function getplayer()
    {
        $query = $this->db->get('cricket');

        return $query->result();
    }

    public function insertplayer($data)
    {
        return $this->db->insert('cricket', $data);
    }


    public function editplayer($no)
    {
        $query = $this->db->get_where('cricket', ['no' => $no]);

        return $query->row();
    }

   
    
    public function updateplayer($data)
    {
        $this->db->where('no', $data['no']);

        return $this->db->update('cricket', $data);
    }

    public function deleteplayer($no)
    {
        $this->db->where('no', $no);
        
        return $this->db->delete('cricket');
    }
}
?>
