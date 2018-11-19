<?php
class M_Connexion extends CI_Model
{
    public function getAllUser($statut)
    {
        $sql = $this->db->query("select idUser, nomUser, statutUser from user where statutUser = '".$staut."'");
        return $sql->result();
    }
}
?>