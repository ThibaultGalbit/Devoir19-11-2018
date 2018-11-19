<?php
class M_Region1 extends CI_Model
{
    public function getOneRegion()
    {
        $sql = $this->db->query('select nomRegion from region where nomRegion = "Bourgogne"');
        return $sql->result();
    }
}
?>