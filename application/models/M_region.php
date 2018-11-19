<?php
class M_region extends CI_Model
{
    public function getAllRegion()
    {
        $sql = $this->db->query('select * from region');
        return $sql->result();
    }
   
}
?>